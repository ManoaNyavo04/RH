<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}
    public function error_login(){
		$data['errorl'] = 'Your Account is Invalid';  
		$this->load->view('login',$data);
	}
	public function acceuil(){
		$this->load->model('Model_model');	
		$data['societe'] = $this->Model_model->getallinfosociete();
		$this->load->view('acceuil',$data);
	}

	public function process_login(){
		$this->load->model('Model_model');
		$this->load->view('test');
		$nom = trim($this->input->post('email'));
		$mdp = trim($this->input->post('password'));
		$this->load->model('Login_model');
		$data=$this->Login_model->getdata();
		$d=verify_login($nom,$mdp,$data);
		$exercice=$this -> Login_model -> getLastExercice();
		if($d!=0){
			$this->session->set_userdata('idEmploye',$d);
			$this -> session -> set_userdata('exercice', $exercice);
			$this -> session -> set_userdata('societe', $this->Model_model->getallinfosociete()[0]);
			redirect('login/acceuil/'.$d);
		}else{
			redirect('Login/error_login');
		}
	}
}
?>