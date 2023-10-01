<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Service_controller extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database('db');
	}

    /*public function index(){
        $this->load->view('liste_service');
    }*/

    public function get_service(){
        $this->load->Model('Liste_service_model');

        $data['service']= $this->Liste_service_model->getService();
        // var_dump($data['service']);
        $this->load->view('liste_service', $data);
    }

    public function test_mandefa($idservice){
        redirect('index.php/Service_controller/go_parcourir/'.$idservice);
    }

    public function go_parcourir($idservice){
        echo $idservice;
    }

    public function test_teste(){
        $this->load->Model('Teste_model');
        $idservice=1;
        $data= $this->Teste_model->getQuestionAnneeService($idservice);
        var_dump($data);
    } 

    public function test_reponse(){
        $this->load->Model('Teste_model');
        $idquest= 1;
        $data = $this->Teste_model->getReponse($idquest);
        var_dump($data);
    }


}