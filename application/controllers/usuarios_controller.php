<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');
		$this->load->helper('url');
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
	public function index()
	{
		echo "string";
	}

	/*public function insertarusuario(){
		$user = $this->input->POST('user');
		$password = $this->input->POST('password');
		$email =$this->input->POST('email');
		$output = array(
			'success' => false,
			'message' => "Ha ocurrido un error al cargar la promoción, intente mas tarde",
			'last_id' => NULL,
			'image_id' => NULL,
			'csrfName' => $this->security->get_csrf_token_name(), //desactive nomas el csrf, mate todo el ws hehe
      'csrfHash' => $this->security->get_csrf_hash()
		);
		$model_injector = $this->usuarios_model->insertar_usuario($user, $password, $email);

			if($model_injector) {

				$output['success'] = true;
				$output['message'] = "Se ha insertado el usuario con exito.";
			} else {

				$output['success'] = false;
				$output['message'] = "Ha ocurrido un error inesperado al tratar de insertar el usuario, vuelva a intentarlo nuevamente.";
			}

			echo json_encode($model_injector); exit;
	}*/

	public function signin(){
		$this->load->view('signin');
	}

	public function administrador(){
		session_start();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			$this->load->view('administrador');
		}else{
			redirect(base_url('/welcome/login'));
		}
	}

	public function comprobarLogin(){
		$user = $this->input->POST('user');
		$password = $this->input->POST('password');
		$model_injector = $this->usuarios_model->devolverPassword($user);
		$passworddb = json_encode($model_injector[0]->password);
		$passworddb = str_replace('"',"",$passworddb);
		if($passworddb == $password){
			session_start();
			$_SESSION['loggedin'] = true;
			echo 'true';
		}else{
			echo 'false';
		}
	}

	public function cerrar_sesion(){
		session_start();
		$_SESSION['loggedin'] = false;
		echo json_encode($_SESSION['loggedin']);
	}

	public function createProducto(){
		$output = array(
			'success' => false,
			'message' => "Ha ocurrido un error al cargar la promoción, intente mas tarde",
			'last_id' => NULL,
			'image_id' => NULL,
			'csrfName' => $this->security->get_csrf_token_name(), //desactive nomas el csrf, mate todo el ws hehe
      'csrfHash' => $this->security->get_csrf_hash()
		);
		$descripcion = $this->input->POST('texto');
		$promocion_input = $this->input->POST('promocion');
		if(isset($_FILES['image'])){
			if(0 < $_FILES['image']['error']){
					$output['message'] = "Ha ocurrido un error al cargar la imagen";
	    	}else{
				$image_id = md5(time());
	        	move_uploaded_file($_FILES['image']['tmp_name'], 'assets/' . $image_id . ".png");
				$output['image_id'] = $image_id;
			}
		}else{
			if($this->input->post('edit') == "false"){
				$output['message'] = "Debes cargar una imagen.";
			}else{
				if(!isset($image_id)){
					$image_id = $this->input->post('image_id');
					$output['image_id'] = $image_id;
				}
			}

		}
		$promocion = 0;
		if($promocion_input == 'true'){
			$promocion = 1;
		}
		$model_injector = $this->usuarios_model->insertarProducto($image_id,$descripcion,$promocion);

		if($model_injector) {
				$output['last_id'] = $model_injector['last_id'];
				$output['success'] = true;
				$output['message'] = "Se ha insertado con exito el producto";
			} else {

				$output['success'] = false;
				$output['message'] = "Ha ocurrido un error inesperado al tratar de insertar el producto, vuelva a intentarlo nuevamente.";
			}
				output:
			$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($output));
	}

	public function getProductos() {
		$output = array('success' => false,
						'message' => "Se han obtenido las productos con exito.",
						'productos' => array());

		$productos = $this->usuarios_model->get_productos();

		if(count($productos) > 0){
			$output['productos'] = $productos;
			$output['success'] = true;
		}
		$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($output));
	}

	public function eliminarProducto(){
		$id=$this->input->post('id');
		$output = array('success' => false,"message" => "Se ha eliminado el producto con exito" );
		$eliminado = $this->usuarios_model->eliminar_producto($id);
		if($eliminado){
			$output['success'] = true;
		}else{
			$output['message'] = "Ha ocurrido un error";
		}
		$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($output));
	}

	public function addUser(){
		$output = array('success' => false,"message" => "Se ha insertado el usuario con exito" );
		$email = $this->input->POST('email');
		$usuario = $this->input->POST('usuario');
		$contrasena = $this->input->POST('contrasena');
		$rcontrasena = $this->input->POST('rcontrasena');
		if($contrasena == $rcontrasena){
			$model_injector = $this->usuarios_model->addUser($usuario,$contrasena,$email);
			if($model_injector){
				$output['succes'] = true;
				$output['message'] = 'Se inserto el usuario ocon exito';
			}else{
				$output['succes'] = false;
				$output['message'] = 'No se ha podido insertar el usuario';
			}
		}else{
			$output['succes'] = false;
			$output['message'] = 'Las contrasenas no coinciden';
		}
	}
}
