<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dependents Controller
 *
 * @property \App\Model\Table\DependentsTable $Dependents
 */
class DependentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Dependents->find()
            ->contain(['Users', 'Relationships']);
        $dependents = $this->paginate($query);

        $this->set(compact('dependents'));
    }

    /**
     * View method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependent = $this->Dependents->get($id, contain: ['Users', 'Relationships']);
        $this->set(compact('dependent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependent = $this->Dependents->newEmptyEntity();
        if ($this->request->is('post')) {
            $dependent = $this->Dependents->patchEntity($dependent, $this->request->getData());
            if ($this->Dependents->save($dependent)) {
                $this->Flash->success(__('The dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependent could not be saved. Please, try again.'));
        }
        $users = $this->Dependents->Users->find('list', limit: 200)->all();
        $relationships = $this->Dependents->Relationships->find('list', limit: 200)->all();
        $this->set(compact('dependent', 'users', 'relationships'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependent = $this->Dependents->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependent = $this->Dependents->patchEntity($dependent, $this->request->getData());
            if ($this->Dependents->save($dependent)) {
                $this->Flash->success(__('The dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependent could not be saved. Please, try again.'));
        }
        $users = $this->Dependents->Users->find('list', limit: 200)->all();
        $relationships = $this->Dependents->Relationships->find('list', limit: 200)->all();
        $this->set(compact('dependent', 'users', 'relationships'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependent = $this->Dependents->get($id);
        if ($this->Dependents->delete($dependent)) {
            $this->Flash->success(__('The dependent has been deleted.'));
        } else {
            $this->Flash->error(__('The dependent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
