<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Relationships Controller
 *
 * @property \App\Model\Table\RelationshipsTable $Relationships
 */
class RelationshipsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Relationships->find()->where(['relationships.deleted' => 0]);
        $relationships = $this->paginate($query);

        $this->set(compact('relationships'));
    }

    /**
     * View method
     *
     * @param string|null $id Relationship id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relationship = $this->Relationships->get($id, contain: ['Dependents']);
        $this->set(compact('relationship'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $relationship = $this->Relationships->newEmptyEntity();
        if ($this->request->is('post')) {
            $relationship = $this->Relationships->patchEntity($relationship, $this->request->getData());

            $relationship->createdby = $session->read('Auth.Username');
            $relationship->modifiedby = $session->read('Auth.Username');
            $relationship->deleted = 0;

            if ($this->Relationships->save($relationship)) {
                $this->Flash->success(__('The relationship has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relationship could not be saved. Please, try again.'));
        }
        $this->set(compact('relationship'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Relationship id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $relationship = $this->Relationships->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relationship = $this->Relationships->patchEntity($relationship, $this->request->getData());

            $relationship->modifiedby = $session->read('Auth.Username');

            if ($this->Relationships->save($relationship)) {
                $this->Flash->success(__('The relationship has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relationship could not be saved. Please, try again.'));
        }
        $this->set(compact('relationship'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Relationship id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $relationship = $this->Relationships->get($id);

        $relationship->modifiedby = $session->read('Auth.Username');
        $relationship->deleted = 0;

        if ($this->Relationships->save($relationship)) {
            $this->Flash->success(__('The relationship has been deleted.'));
        } else {
            $this->Flash->error(__('The relationship could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
