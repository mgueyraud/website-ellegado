<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('email');
		$this->load->model('usuarios_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('index');
	}

	public function login(){
		session_start();
		$_SESSION['loggedin'] = false;
		$this->load->view('login');
	}


	public function sendEmail(){
		$nombre = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$this->email->from($email, $nombre);
		$this->email->to('ellegadodemarthita@gmail.com');

		$this->email->subject('El legado de Marthita(Pagina web)');
		$this->email->message($message);

		$this->email->send();
		//$this->load->view('/login/postJs');
		//$this->load->view('/login/welcome',$data);
		/*$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));*/
        $output = array('success' => false,
						'message' => "Se ha insertado el email con exito");
		$model_injector = $this->usuarios_model->saveEmail($email);
		if($model_injector){
			$output['succes'] = true;
			$output['message'] = 'Se inserto el email con exito ';
		}else{
			$output['succes'] = false;
			$output['message'] = 'No se ha podido insertar el email';
		}
	}


}
