<?php

class Register extends CI_Controller{

public function index(){
		//$id=$this->session->userdata('id_user');
		//$data = $this->Model_futsal->tampil_profil($id);
		$this->load->view('Register'
		//, array('data' => $data)
		);	
	}

public function login(){


}

public function sign_up(){

}

}

?>