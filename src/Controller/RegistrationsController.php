<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Hash;
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
    $this->set('authuser', $this->Auth->user());
  }
  public function index()
    {
// var_dump($this->request->session()->read('Auth.User.id'));
     $this->paginate = [
         'contain' => ['ParticipationPlans']
       ];
      $events = $this->paginate($this->Events);
//      $this->set(compact('events'));

//ここで$myparticipationPlansを設定して、viewですでにレコードが存在するかを調べるーーーーーーーーーーーーーーーーーー
      $my = $this->ParticipationPlans->find('all',[
        'conditions'=>['user_id'=>$this->request->session()->read('Auth.User.id')]
      ]);
      $myparticipationPlans = Hash::combine($my->toArray(),'{n}.event_id','{n}');
      $this->set(compact('events','myparticipationPlans','my'));
    }

    public function view($id = null)
    {
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('participationPlan', $participationPlan);
    }

    public function join($id = null)
      {
    //    if($myparticipationPlans->find('all',['event_id'=>$id]) == null){
        if($id == null){

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

          return $this->redirect(['action' => 'index']);
      }
  // public function change($id = null)
  //   {
  //     if($id = null){
  //
  //       $participationPlan = $this->ParticipationPlans->newEntity();
  //
  //     }else{
  //       $participationPlan = $this->ParticipationPlans->get($id, [
  //           'contain' => ['Users', 'Events','ParticipationPlans']
  //       ]);
  //     }
  //       if ($this->request->is(['patch', 'post', 'put'])) {
  //           $participationPlan = $this->ParticipationPlans->patchEntity($participationPlan, $this->request->getData());
  //           if ($this->ParticipationPlans->save($participationPlan)) {
  //               $this->Flash->success(__('The participation plan has been saved.'));
  //
  //               return $this->redirect(['action' => 'index']);
  //           }
  //           $this->Flash->error(__('The participation plan could not be saved. Please, try again.'));
  //       }
  //       $users = $this->ParticipationPlans->Users->find('list', ['limit' => 200]);
  //       $events = $this->ParticipationPlans->Events->find('list', ['limit' => 200]);
  //       $this->set(compact('participationPlan', 'users', 'events'));
  //
  //   }

}
