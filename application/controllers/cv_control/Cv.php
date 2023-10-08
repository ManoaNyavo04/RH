<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cv extends CI_Controller {

	public function remplircv() {
		$this->load->model("Bdd");
		$list_pays = $this->Bdd->select('pays');
		$list_genre = $this->Bdd->select('genre');
		$list_diplome = $this->Bdd->select('diplome');
		$list_exp = $this->Bdd->select('experience');
		$list_ville = $this->Bdd->select('ville');
		$list_situationmatrimoniale = $this->Bdd->select('situationmatrimoniale');
		$liste['genre_pays'] = array($list_pays,$list_genre,$list_diplome,$list_exp,$list_ville,$list_situationmatrimoniale);
		
		// $this->load->view("cv/header");
		$this->load->view("composant/sidebar");
		$this->load->view("cv/formcv",$liste);
		// $this->load->view("cv/test",$liste);
	}

	public function checkcv() {
		$this->load->model('Bdd');
		
		$nom = $this->input->get('nom');
		$prenom = $this->input->get('prenom');
		$date = $this->input->get('date');
		$email = $this->input->get('email');
		$telephone = $this->input->get('telephone');
		$adresse = $this->input->get('adresse');
		$pays = $this->input->get('pays');
		$genre = $this->input->get('genre');
		$ville = $this->input->get('ville');
		$diplome = $this->input->get('diplome');
		$diplome = $this->maxPoint($diplome);
		echo $diplome;
		$exp = $this->input->get('exp');
		
			$candidat_data = array();
			$candidat_data['idservice'] = 1;
			$candidat_data['nom'] = $nom;
			$candidat_data['prenom'] = $prenom;
			$candidat_data['dtn'] = $date;
			$candidat_data['email'] = $email;
			$candidat_data['telephone'] = $telephone;
			$candidat_data['adresse'] = $adresse;
			$candidat_data['idpays'] = $pays;
			$candidat_data['idgenre'] = $genre;
			$candidat_data['idville'] = $ville;
			$candidat_data['iddiplome'] = $diplome;
			$candidat_data['idexperience'] = $exp;
			
			// var_dump($candidat_data);

			$this->Bdd->insert('candidat',$candidat_data);
	}	

	public function maxPoint($diplome) {
		$maxtemp = $diplome[0];

		for ($i=1 ; $i<count($diplome); $i++) {
			if ($diplome[$i] >= $maxtemp) { $maxtemp = $diplome[$i];}
		}
		return $maxtemp;
	}
	public function getAllPays() {
		$this->load->model("Bdd");
		$tab['pays'] = $this->Bdd->select('pays');

		$this->load->view("cv/test",$tab);
	}
}

?>