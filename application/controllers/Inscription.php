<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}
	public function inscription(){
		$this -> load -> model('Model_model', 'Model');
		$data['devise']=$this -> Model -> getAllDevise();
		$this->load->view('index', $data);
	}
	public function upload_image($nom_image){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload');
		$this->upload->initialize($config);
		$this->upload->do_upload($nom_image);
		return $file_info = $this->upload->data();
		// $config['max_size'] = '00000000000';
		// $config['max_width']  = '10240000000';
		// $config['max_height']  = '7680000000';
		// $config['overwrite'] = TRUE;
		// $config['encrypt_name'] = FALSE;
		// $config['remove_spaces'] = TRUE;
	}
	public function traitement(){
		$logo = $this->upload_image('logo');
		$NIF = $this->upload_image('NIF');
		$NS = $this->upload_image('NS');
		$NRCS = $this->upload_image('NRCS');
		$nom_societe = tri($this->input->post('nom_societe')) ;
 		$nom_dirigeant = tri($this->input->post('nom_dirigeant')) ;
		$date_creation = tri($this->input->post('date_de_creation')) ;
 		$adresse_entreprise = tri($this->input->post('adresse_entreprise')) ;
 		$email = tri($this->input->post('email')) ;
 		$telephone = tri($this->input->post('telephone')) ;
 		$objet = tri($this->input->post('objet')) ;
 		$capitale = tri($this->input->post('capitale')) ;
 		$siege = tri($this->input->post('siege')) ;
 		$date_debut = tri($this->input->post('date_debut')) ;
 		$devise_de_tenue_de_compte = tri($this->input->post('devise_de_tenue_de_compte')) ;
 		$devise_equivalence = tri($this->input->post('devise_equivalence'));
		$nom_comptable=tri($this -> input -> post('nom_comptable'));
		$email_comptable=tri($this -> input -> post('email_comptable'));
		$mdp=tri($this -> input -> post('mdp'));
		$data['societe'] = $this->Inscription_model->in_data($nom_societe,$nom_dirigeant,$date_creation,$adresse_entreprise,$email,$telephone,$objet,$capitale,$siege,$date_debut,$NIF['file_name'],$NS['file_name'],$NRCS['file_name'],$devise_de_tenue_de_compte,$devise_equivalence,$logo['file_name']);
		try {
			verif_data($nom_dirigeant);
			$this->load->model('Inscription_model');
			$this->Inscription_model->insert_societe($nom_societe,$nom_dirigeant,$date_creation,$adresse_entreprise,$email,$telephone,$objet,$capitale,$siege,$logo['file_name'],$date_debut,$NIF['file_name'],$NS['file_name'],$NRCS['file_name'],$devise_de_tenue_de_compte,$devise_equivalence);
			$this->load->model('Model_model');
			$data['societe'] = $this->Model_model->getallinfosociete();
			$this -> Inscription_model -> insertCompta($data['societe'][0]['idSociete'], $email_comptable, $mdp, $nom_comptable);
			// $this->load->view('acceuil',$data);
			redirect("Login");
			// redirect("Login/acceuil");
		} catch (Exception $e) {
			$data['error'] = $e->getMessage();
			$this->load->view("index", $data);
		}
	}
}

?>