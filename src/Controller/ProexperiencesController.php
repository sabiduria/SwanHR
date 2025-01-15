<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Proexperiences Controller
 *
 * @property \App\Model\Table\ProexperiencesTable $Proexperiences
 */
class ProexperiencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Proexperiences->find()->where(['proexperiences.deleted' => 0])
            ->contain(['Users']);
        $proexperiences = $this->paginate($query);

        $this->set(compact('proexperiences'));
    }

    /**
     * View method
     *
     * @param string|null $id Proexperience id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proexperience = $this->Proexperiences->get($id, contain: ['Users']);
        $this->set(compact('proexperience'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($user_id = null)
    {
        $session = $this->request->getSession();
        $proexperience = $this->Proexperiences->newEmptyEntity();
        if ($this->request->is('post')) {
            $proexperience = $this->Proexperiences->patchEntity($proexperience, $this->request->getData());

            if ($user_id != null)
                $proexperience->user_id = $user_id;

            $proexperience->createdby = $session->read('Auth.Username');
            $proexperience->modifiedby = $session->read('Auth.Username');
            $proexperience->deleted = 0;

            if ($this->Proexperiences->save($proexperience)) {
                $this->Flash->success(__('The proexperience has been saved.'));

                if ($user_id != null)
                    return $this->redirect(['controller' => 'users', 'action' => 'view', $user_id]);
                else
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proexperience could not be saved. Please, try again.'));
        }
        $users = $this->Proexperiences->Users->find('list', limit: 200)->all();
        $this->set(compact('proexperience', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proexperience id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $proexperience = $this->Proexperiences->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proexperience = $this->Proexperiences->patchEntity($proexperience, $this->request->getData());

            $proexperience->modifiedby = $session->read('Auth.Username');

            if ($this->Proexperiences->save($proexperience)) {
                $this->Flash->success(__('The proexperience has been saved.'));

                return $this->redirect(['controller' => 'users', 'action' => 'view', $proexperience->user_id]);
            }
            $this->Flash->error(__('The proexperience could not be saved. Please, try again.'));
        }
        $users = $this->Proexperiences->Users->find('list', limit: 200)->all();
        $this->set(compact('proexperience', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proexperience id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $this->request->allowMethod(['post', 'delete']);
        $proexperience = $this->Proexperiences->get($id);

        $proexperience->modifiedby = $session->read('Auth.Username');
        $proexperience->deleted = 0;

        if ($this->Proexperiences->save($proexperience)) {
            $this->Flash->success(__('The proexperience has been deleted.'));
        } else {
            $this->Flash->error(__('The proexperience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'users', 'action' => 'view', $proexperience->user_id]);
    }
}
