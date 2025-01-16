<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Occupations Controller
 *
 * @property \App\Model\Table\OccupationsTable $Occupations
 */
class OccupationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Occupations->find()->where(['Occupations.deleted' => 0]);
        $occupations = $this->paginate($query);

        $this->set(compact('occupations'));
    }

    /**
     * View method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupation = $this->Occupations->get($id, contain: ['Users']);
        $this->set(compact('occupation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $occupation = $this->Occupations->newEmptyEntity();
        if ($this->request->is('post')) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->getData());

            $occupation->createdby = $session->read('Auth.Username');
            $occupation->modifiedby = $session->read('Auth.Username');
            $occupation->deleted = 0;

            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
        }
        $this->set(compact('occupation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $occupation = $this->Occupations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->getData());

            $occupation->modifiedby = $session->read('Auth.Username');

            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
        }
        $this->set(compact('occupation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $occupation = $this->Occupations->get($id);

        $occupation->modifiedby = $session->read('Auth.Username');
        $occupation->deleted = 0;

        if ($this->Occupations->save($occupation)) {
            $this->Flash->success(__('The occupation has been deleted.'));
        } else {
            $this->Flash->error(__('The occupation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
