<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->load->database('mysql');
    }
    function insertar_usuario($user, $password, $email){
    	$insertar_datos = array('nombre'=>$user,'password'=>$password,'email'=>$email);
    	$this->db->set('created_at', 'now()', false);

    	$result['success'] = $this->db->insert('Usuarios',$insertar_datos);
		$result['last_id'] = $this->db->insert_id();

		return $result;
    }

    function devolverPassword($user){
        $this->db->where('nombre', $user);
        $query = $this->db->get('Usuarios');
        $result = $query->result();
        return $result;
    }
}