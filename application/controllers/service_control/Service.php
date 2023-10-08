<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {
	public function getAllService() {
		$this->load->model('Bdd');

		$liste_service['service'] = $this->Bdd->select('service');
		$this->load->view('service/service_list', $liste_service);	//mbola solona le anaranle fichier
	}
	
}

?>