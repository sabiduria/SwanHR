<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Payrollinfos Controller
 *
 * @property \App\Model\Table\PayrollinfosTable $Payrollinfos
 */
class PayrollinfosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Payrollinfos->find()->where(['payrollinfos.deleted' => 0])
            ->contain(['Users']);
        $payrollinfos = $this->paginate($query);

        $this->set(compact('payrollinfos'));
    }

    /**
     * View method
     *
     * @param string|null $id Payrollinfo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payrollinfo = $this->Payrollinfos->get($id, contain: ['Users']);
        $this->set(compact('payrollinfo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $payrollinfo = $this->Payrollinfos->newEmptyEntity();
        if ($this->request->is('post')) {
            $payrollinfo = $this->Payrollinfos->patchEntity($payrollinfo, $this->request->getData());

            $payrollinfo->createdby = $session->read('Auth.Username');
            $payrollinfo->modifiedby = $session->read('Auth.Username');
            $payrollinfo->deleted = 0;

            if ($this->Payrollinfos->save($payrollinfo)) {
                $this->Flash->success(__('The payrollinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payrollinfo could not be saved. Please, try again.'));
        }
        $users = $this->Payrollinfos->Users->find('list', limit: 200)->all();
        $this->set(compact('payrollinfo', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payrollinfo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $payrollinfo = $this->Payrollinfos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payrollinfo = $this->Payrollinfos->patchEntity($payrollinfo, $this->request->getData());

            $payrollinfo->modifiedby = $session->read('Auth.Username');

            if ($this->Payrollinfos->save($payrollinfo)) {
                $this->Flash->success(__('The payrollinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payrollinfo could not be saved. Please, try again.'));
        }
        $users = $this->Payrollinfos->Users->find('list', limit: 200)->all();
        $this->set(compact('payrollinfo', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payrollinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $payrollinfo = $this->Payrollinfos->get($id);

        $payrollinfo->modifiedby = $session->read('Auth.Username');
        $payrollinfo->deleted = 0;

        if ($this->Payrollinfos->save($payrollinfo)) {
            $this->Flash->success(__('The payrollinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The payrollinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
