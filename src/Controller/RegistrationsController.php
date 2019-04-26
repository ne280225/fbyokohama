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
  }
  public function index()
    {

      $this->paginate = [
          'contain' => ['Events']
        ];
        
        $participationPlans = $this->paginate('ParticipationPlans');
        $this->set(compact('participationPlans'));

    }



    public function view($id = null)
    {
        $participationPlan = $this->ParticipationPlans->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('participationPlan', $participationPlan);
    }

}
