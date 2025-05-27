<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use DateTime;

/**
 * Payrolls Controller
 *
 * @property \App\Model\Table\PayrollsTable $Payrolls
 */
class PayrollsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Payrolls->find()->where(['payrolls.deleted' => 0]);
        $payrolls = $this->paginate($query);

        $this->set(compact('payrolls'));
    }

    /**
     * View method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payroll = $this->Payrolls->get($id, contain: ['Payslips']);
        $this->set(compact('payroll'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $payroll = $this->Payrolls->newEmptyEntity();
        if ($this->request->is('post')) {
            $payroll = $this->Payrolls->patchEntity($payroll, $this->request->getData());

            $payroll->createdby = $session->read('Auth.Username');
            $payroll->modifiedby = $session->read('Auth.Username');
            $payroll->deleted = 0;

            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
        }
        $this->set(compact('payroll'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $payroll = $this->Payrolls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payroll = $this->Payrolls->patchEntity($payroll, $this->request->getData());

            $payroll->modifiedby = $session->read('Auth.Username');

            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
        }
        $this->set(compact('payroll'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $payroll = $this->Payrolls->get($id);

        $payroll->modifiedby = $session->read('Auth.Username');
        $payroll->deleted = 0;

        if ($this->Payrolls->save($payroll)) {
            $this->Flash->success(__('The payroll has been deleted.'));
        } else {
            $this->Flash->error(__('The payroll could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function generate($id)
    {
        $usersTable = $this->fetchTable('Users');
        $users = $usersTable->find()->all();

        foreach ($users as $user){
            $bank = $user->bank;
            $bank_account = $user->bank_account;
            $nber_days = 20;
            $salary_per_day = self::getSalaryPerDay($user->id);
            $monthly_salary = $salary_per_day * $nber_days;

            self::NewPayslips($id, $user->id, $nber_days, $monthly_salary, $bank, $bank_account, "Payroll Team");
        }

        return $this->redirect(['action' => 'view', $id]);
    }

    public static function NewPayslips($payroll_id, $user_id, $nber_days, $monthly_salary, $bank, $bank_account, $username){
        $connection = ConnectionManager::get('default');

        $connection->insert('payslips', [
            'payroll_id' => $payroll_id,
            'user_id' => $user_id,
            'hour_sup' => 0,
            'nber_days' => $nber_days,
            'primes' => 0,
            'salary' => $monthly_salary,
            'bank' => $bank,
            'bank_account' => $bank_account,
            'payed' => 0,
            'published' => 0,

            'created' => new DateTime('now'),
            'modified' => new DateTime('now'),
            'createdby' => $username,
            'modifiedby' => $username,
            'deleted' => 0
        ], ['created' => 'datetime', 'modified' => 'datetime']);

        $connection->update('payrolls', [
            'actived' => 1
        ], [
            'id' => $payroll_id
        ]);
    }

    public static function getSalaryPerDay($user_id): ?float
    {
        $table = TableRegistry::getTableLocator()->get("payrollinfos")
            ->find()
            ->select(['salary_per_day'])
            ->where(['user_id' => $user_id])
            ->orderByDesc('id')
            ->first();

        return $table ? $table->salary_per_day : 1;
    }
}
