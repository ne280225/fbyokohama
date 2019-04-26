<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;
use Exception;
/**
 * ParticipationPlans Controller
 *
 * @property \App\Model\Table\ParticipationPlansTable $ParticipationPlans
 *
 * @method \App\Model\Entity\ParticipationPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParticipationPlansController extends BaseController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

     //ここから記述
/*    public $pagenate = [
      'ParticipationPlans' => ['scope' => 'participationPlan'],
      'Events' => ['scope' => 'event']
    ];
**/

    public function index()
    {

        $this->paginate = [
            'contain' => ['Events']
        ];
        $participationPlans = $this->paginate($this->ParticipationPlans);
        $this->set(compact('participationPlans'));

    }


    /**
     * View method
     *
     * @param string|null $id Participation Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('participationPlan', $participationPlan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participationPlan = $this->ParticipationPlans->newEntity();
        if ($this->request->is('post')) {
            $participationPlan = $this->ParticipationPlans->patchEntity($participationPlan, $this->request->getData());
            if ($this->ParticipationPlans->save($participationPlan)) {
                $this->Flash->success(__('The participation plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participation plan could not be saved. Please, try again.'));
        }
        $users = $this->ParticipationPlans->Users->find('list', ['limit' => 200]);
        $events = $this->ParticipationPlans->Events->find('list', ['limit' => 200]);
        $this->set(compact('participationPlan', 'users', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Participation Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participationPlan = $this->ParticipationPlans->patchEntity($participationPlan, $this->request->getData());
            if ($this->ParticipationPlans->save($participationPlan)) {
                $this->Flash->success(__('The participation plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participation plan could not be saved. Please, try again.'));
        }
        $users = $this->ParticipationPlans->Users->find('list', ['limit' => 200]);
        $events = $this->ParticipationPlans->Events->find('list', ['limit' => 200]);
        $this->set(compact('participationPlan', 'users', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Participation Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participationPlan = $this->ParticipationPlans->get($id);
        if ($this->ParticipationPlans->delete($participationPlan)) {
            $this->Flash->success(__('The participation plan has been deleted.'));
        } else {
            $this->Flash->error(__('The participation plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
