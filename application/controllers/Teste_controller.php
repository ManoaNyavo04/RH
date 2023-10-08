<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Teste_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
		$this->load->database('db');
    }

    public function load_question(){
        $this->load->view('question');
    }

    public function test_mandefa($idservice){
        redirect('index.php/Teste_controller/test_question_reponse/'.$idservice);
    }

    public function test_question_reponse($idservice){
        $this->load->Model('Teste_model');
        $question['quest']= $this->Teste_model->getQuestionAnneeService($idservice);
        // var_dump($question);

    } 

    public function test_reponse(){
        $this->load->Model('Teste_model');
        $idquest= 1;
        $data = $this->Teste_model->getReponse($idquest);
        var_dump($data);
    }

    public function getQuestion() {
        $this->load->Model('Bdd');
        $question= $this->Bdd->Select('question');
        $reponse= $this->Bdd->Select('reponse');
        // var_dump($question);
        $tab= array($question, $reponse);
        $this->load->view('question', $tab);
    }

   /* public function go_parcourir($idservice){
        echo $idservice;
    } */
}