<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;
use Exception;

class RegistrationsController extends BaseController
{

  public $useTable = false;

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Paginator');
    $this->loadModel('ParticipationPlans');
    $this->loadModel('Events');
    $this->loadModel('Users');
  }
  public function index()
    {

      $this->paginate = [
          'contain' => ['ParticipationPlans']
        ];

        $events = $this->paginate($this->Events);
        $this->set(compact('events'));

    }



    public function view($id = null)
    {
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('participationPlan', $participationPlan);
    }

    public function change($id = null)
    {
      if($id = null){

        $participationPlan = $this->ParticipationPlans->newEntity();

      }else{
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => ['Users', 'Events','ParticipationPlans']
        ]);
      }
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

}
