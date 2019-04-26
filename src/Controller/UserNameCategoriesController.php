<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserNameCategories Controller
 *
 * @property \App\Model\Table\UserNameCategoriesTable $UserNameCategories
 *
 * @method \App\Model\Entity\UserNameCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserNameCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userNameCategories = $this->paginate($this->UserNameCategories);

        $this->set(compact('userNameCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id User Name Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userNameCategory = $this->UserNameCategories->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userNameCategory', $userNameCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userNameCategory = $this->UserNameCategories->newEntity();
        if ($this->request->is('post')) {
            $userNameCategory = $this->UserNameCategories->patchEntity($userNameCategory, $this->request->getData());
            if ($this->UserNameCategories->save($userNameCategory)) {
                $this->Flash->success(__('The user name category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user name category could not be saved. Please, try again.'));
        }
        $this->set(compact('userNameCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Name Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userNameCategory = $this->UserNameCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userNameCategory = $this->UserNameCategories->patchEntity($userNameCategory, $this->request->getData());
            if ($this->UserNameCategories->save($userNameCategory)) {
                $this->Flash->success(__('The user name category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user name category could not be saved. Please, try again.'));
        }
        $this->set(compact('userNameCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Name Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userNameCategory = $this->UserNameCategories->get($id);
        if ($this->UserNameCategories->delete($userNameCategory)) {
            $this->Flash->success(__('The user name category has been deleted.'));
        } else {
            $this->Flash->error(__('The user name category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
