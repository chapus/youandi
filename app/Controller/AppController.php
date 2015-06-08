<?php

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	var $helpers = array('Form', 'Html', 'Session',	'Js', 'Usermgmt.UserAuth', 'Usermgmt.Image');
	public $components = array('Session', 'RequestHandler', 'Usermgmt.UserAuth', 'Security');

	/* Override functions */
	public function paginate($object = null, $scope = array(), $whitelist = array()) {
		$sessionKey = sprintf('UserAuth.Search.%s.%s', $this->name, $this->action);
		if ($this->Session->check($sessionKey)) {
			$persistedData = $this->Session->read($sessionKey);
			if(!empty($persistedData['page_limit'])) {
				$this->paginate['limit']=$persistedData['page_limit'];
			}
		}
		return parent::paginate($object, $scope, $whitelist);
	}
	function beforeFilter() {
		$this->userAuth();
	}
	private	function userAuth() {
		$this->UserAuth->beforeFilter($this);
	}
	
}
