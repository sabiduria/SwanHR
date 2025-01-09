<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Leaves Controller
 *
 * @property \App\Model\Table\LeavesTable $Leaves
 */
class LeavesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Leaves->find()->where(['leaves.deleted' => 0])
            ->contain(['Leavestypes', 'Statuses', 'Users']);
        $leaves = $this->paginate($query);

        $this->set(compact('leaves'));
    }

    /**
     * View method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leave = $this->Leaves->get($id, contain: ['Leavestypes', 'Statuses', 'Users']);
        $this->set(compact('leave'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $leave = $this->Leaves->newEmptyEntity();
        if ($this->request->is('post')) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());

            $leave->createdby = $session->read('Auth.Username');
            $leave->modifiedby = $session->read('Auth.Username');
            $leave->deleted = 0;

            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        $leavestypes = $this->Leaves->Leavestypes->find('list', limit: 200)->all();
        $statuses = $this->Leaves->Statuses->find('list', limit: 200)->all();
        $users = $this->Leaves->Users->find('list', limit: 200)->all();
        $this->set(compact('leave', 'leavestypes', 'statuses', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $leave = $this->Leaves->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());

            $leave->modifiedby = $session->read('Auth.Username');

            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        $leavestypes = $this->Leaves->Leavestypes->find('list', limit: 200)->all();
        $statuses = $this->Leaves->Statuses->find('list', limit: 200)->all();
        $users = $this->Leaves->Users->find('list', limit: 200)->all();
        $this->set(compact('leave', 'leavestypes', 'statuses', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $leave = $this->Leaves->get($id);

        $leave->modifiedby = $session->read('Auth.Username');
        $leave->deleted = 0;

        if ($this->Leaves->save($leave)) {
            $this->Flash->success(__('The leave has been deleted.'));
        } else {
            $this->Flash->error(__('The leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}