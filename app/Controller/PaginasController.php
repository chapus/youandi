<?php
App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');

class PaginasController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Paginas';
	
	public $useTable = false;

	public $uses = array('Customer');
	
	public function beforeFilter() {
		parent::beforeFilter();
		if(isset($this->Security) &&  ($this->RequestHandler->isAjax() || $this->action=='send')){
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}
		$this->Security->blackHoleCallback = 'blackhole';
		
	}
	
	
	public function nosotros() {
		$this->set('title_for_layout', __('Nosotros - You & I | Organizamos y coordinamos tus eventos') );
	}
	
	public function servicios() {
		$this->set('title_for_layout', __('Servicios - You & I | Organizamos y coordinamos tus eventos') );
	}
	
	public function eventos() {
		$this->set('title_for_layout', __('Eventos - You & I | Organizamos y coordinamos tus eventos') );
	}
	
	public function galeria() {
		$this->set('title_for_layout', __('Galería - You & I | Organizamos y coordinamos tus eventos') );
	}
	
	public function contacto() {
		$this->set('title_for_layout', __('Contacto - You & I | Organizamos y coordinamos tus eventos') );
	}
	
	public function send() {
		$this->layout = 'ajax';
		//Configure::write('debug', 0);
		$this->autoRender = false;
		if( $this->RequestHandler->isAjax() ) {
			if($_SERVER['REQUEST_METHOD'] == "POST") {
				
				$eaddress = $_POST['contact_email'];
				$name = $_POST['contact_name'];
				$phone = $_POST['contact_phone'];
				$comments = $_POST['contact_message'];
				
				if(filter_var($eaddress, FILTER_VALIDATE_EMAIL) && $name != "" && $comments != "") {
					
					$this->Customer->create();
					$data = array('Customer' => array(
									'name' => $name,
									'email' => $eaddress,
									'comments' => $comments,
									'created' => date("Y-m-d H:i:s")
									));
									
					$this->Customer->save($data['Customer']);
				
					
					$email = new CakeEmail();
					$email->config('gmail');
					
					$email->from( array($eaddress => 'You And I - Nuevo contacto') );
					//$email->to( array('lilia@mezzoforte.com.mx') );
					$email->to( array('info@youandi.com.mx', 'vane@youandi.com.mx') );
					$email->subject( $name.' se ha contactado hoy.' );
					$email->replyTo( $eaddress );
					$email->addBcc( 'limpaspid@yahoo.com' );
					
					$email->template('contact')->emailFormat('html');
					$email->viewVars( array('user' => $name,
											'email' => $eaddress,
											'phone' => $phone,
											'comments' => $comments
											) );
					
					//return $email;
				} else {
					return "missing";
				}
				
				
				if(!$email->send()) {
					echo "error";
				} else {
					echo "success";
				}
				
				
			}
		}

	}
	

}

?>