	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {

	public function getQuestion() {
        $this->load->Model('Bdd');
        $question= $this->Bdd->Select('v_serv_question');
        $reponse= $this->Bdd->Select('reponse');
        $tab['questrep']= array($question, $reponse);

        $this->load->view('question', $tab);
    }

	public function checkcv() {
		$values = $this->input->get('reponse');
		$tab = array();
		foreach ($values as $option) {
			$option = $this->decomposition($option);
			array_push($tab,$option);
        }

		return $tab;
		// foreach ($tab as $option) {
		// 	foreach ($option as $cle => $ligne) {
		// 		echo "Clé : " . $cle . "<br>";
		// 		foreach ($ligne as $cle2 => $valeur) {
		// 			echo $cle2 . " : " . $valeur . "<br>"; 
		// 		}
		// 	}
		// }
		var_dump($tab);
	}

	public function checkanswer() {
		$reponse = $this->input->get('reponse');
	}

	public function decomposition($chaine) {
		$valeurs = explode(',', $chaine);
		$tableauDeuxDimensions = array(
			'ligne' => array(   
				'valeur1' => $valeurs[0],
				'valeur2' => $valeurs[1]
			));
		return $tableauDeuxDimensions;
	}
}

?>