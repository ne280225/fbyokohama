<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Auth\DefaultPasswordHasher; // added.
use Cake\Event\Event; // added.

class BaseController extends AppController
{

	// 初期化処理
	public function initialize()
	{
		parent::initialize();
		// 必要なコンポーネントのロード
		$this->loadComponent('RequestHandler');
		$this->loadComponent('Flash');
		$this->loadComponent('Auth', [
			'authorize' => ['Controller'],
			'authenticate' => [
				'Form' => [
					'fields' => [
						'username' => 'user_name',
						'password' => 'password'
					]
				]
			],
			'loginRedirect' => [
				'controller' => 'Users',
				'action' => 'login'
			],
			'logoutRedirect' => [
				'controller' => 'Users',
				'action' => 'logout',
			],
			'authError' => 'ログインしてください。',
		]);
	}


	// 認証をしないページの設定
	// public function beforeFilter(Event $event) {
	// 	parent::beforeFilter($event);
	// 	$this->Auth->allow([]);
	// }

	// 認証時のロールの処理
	public function isAuthorized($user = null){
		// 管理者はtrue
		if($user['user_role_id'] === 2){
		   return true;
		}
		// 一般ユーザーはAuctionControllerのみtrue、他はfalse
		if($user['user_role_id'] === 1){
			// if ($this->name == 'Event'){
			// 	return true;
			// } else {
				return false;
			// }
		}
		// その他はすべてfalse
		return false;
	}
}
