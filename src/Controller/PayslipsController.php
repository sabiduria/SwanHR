<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Payslips Controller
 *
 * @property \App\Model\Table\PayslipsTable $Payslips
 */
class PayslipsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Payslips->find()->where(['payslips.deleted' => 0])
            ->contain(['Payrolls', 'Users']);
        $payslips = $this->paginate($query);

        $this->set(compact('payslips'));
    }

    /**
     * View method
     *
     * @param string|null $id Payslip id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payslip = $this->Payslips->get($id, contain: ['Payrolls', 'Users']);
        $this->set(compact('payslip'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $payslip = $this->Payslips->newEmptyEntity();
        if ($this->request->is('post')) {
            $payslip = $this->Payslips->patchEntity($payslip, $this->request->getData());

            $payslip->createdby = $session->read('Auth.Username');
            $payslip->modifiedby = $session->read('Auth.Username');
            $payslip->deleted = 0;

            if ($this->Payslips->save($payslip)) {
                $this->Flash->success(__('The payslip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payslip could not be saved. Please, try again.'));
        }
        $payrolls = $this->Payslips->Payrolls->find('list', limit: 200)->all();
        $users = $this->Payslips->Users->find('list', limit: 200)->all();
        $this->set(compact('payslip', 'payrolls', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payslip id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $payslip = $this->Payslips->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payslip = $this->Payslips->patchEntity($payslip, $this->request->getData());

            $payslip->modifiedby = $session->read('Auth.Username');

            if ($this->Payslips->save($payslip)) {
                $this->Flash->success(__('The payslip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payslip could not be saved. Please, try again.'));
        }
        $payrolls = $this->Payslips->Payrolls->find('list', limit: 200)->all();
        $users = $this->Payslips->Users->find('list', limit: 200)->all();
        $this->set(compact('payslip', 'payrolls', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payslip id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $payslip = $this->Payslips->get($id);

        $payslip->modifiedby = $session->read('Auth.Username');
        $payslip->deleted = 0;

        if ($this->Payslips->save($payslip)) {
            $this->Flash->success(__('The payslip has been deleted.'));
        } else {
            $this->Flash->error(__('The payslip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
