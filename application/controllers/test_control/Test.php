	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {

	public function getQuestion() {
        $this->load->Model('Bdd');
        $question= $this->Bdd->Select('v_serv_question');
        $reponse= $this->Bdd->Select('reponse');
        $tab['questrep']= array($question, $reponse);

        $this->load->view('test/question', $tab);
    }

	public function checkreponse($sessionIdService) {
		
		$this->load->model('Bdd');
		$questionReponse = $this->Bdd->select_where('v_rep_question','idservice',$sessionIdService,'*');
		
		$values = $this->input->get('reponse');
		$reponseUser = $this->listeQuestion_Reponse($values);

		// // for ($i=0; $i < count($reponseUser); $i++) { 
		// // 	// echo $reponseUser[$i][0];
		// // 	foreach ($questionReponse->result_array() as $row) {
		// // 		if ($row['idquestion']==$reponseUser[$i][0]) {
		// // 			echo $row['idquestion']." ".$reponseUser[$i][0]. "<br>";
		// // 			echo $row['idreponse']." ".$reponseUser[$i][1]. "<br>";
		// // 			// $note = $note + $row['note'];
		// // 		}	
		// // 	}
		// // }
		$note = $this->comparaisonReponse($reponseUser,$questionReponse);
		echo "NOTE ".$note;
		
		// // return $tab; 
		// foreach ($tab as $option) {
		// 	foreach ($option as $cle => $ligne) {
		// 		echo "Clé : " . $cle . "<br>";
		// 		foreach ($ligne as $cle2 => $valeur) {
		// 			echo $cle2 . " : " . $valeur . "<br>"; 
		// 		}
		// 	}
		// }
		// var_dump($tab[0]);
	}

	// public function comparaisonReponse($reponseUser, $reponseCorrecte) {
	// 	$note = 0;

	// 	for ($i=0; $i < count($reponseUser); $i++) { 
	// 		// for ($j=0; $j < count($reponseUser); $j++) { 
	// 			echo $reponseUser[$i][0];
	// 		// }
	// 		// foreach ($reponseCorrecte->result_array() as $row) {
	// 		// 	if ($row['idquestion']==$reponseUser[$i][0] && $reponseUser[$i][1]==0) {
	// 		// 			$note = $note + 0;
	// 		// 			echo $note;
	// 		// 		}
				
	// 		// 	if ($row['idquestion']==$reponseUser[$i][0] && $row['idreponse']==$reponseUser[$i][1]) {
	// 		// 		echo "QUESTION ".$row['idquestion']." ".$reponseUser[$i][0]. "<br>";
	// 		// 		echo "REPONSE ".$row['idreponse']." ".$reponseUser[$i][1]. "<br>";
	// 		// 		echo "<br>";
	// 		// 		$note = $note + $row['note'];
	// 		// 	} else  if ($row['idquestion']==$reponseUser[$i][0] && $row['idreponse']==$reponseUser[$i][1]) {
	// 		// 		echo "QUESTION ".$row['idquestion']." ".$reponseUser[$i][0]. "<br>";
	// 		// 		echo "REPONSE ".$row['idreponse']." ".$reponseUser[$i][1]. "<br>";
	// 		// 		echo "<br>";
	// 		// 		$note = $note + $row['note'];
	// 		// 	}		
	// 		// }
	// 	}
	// 	return $note;
	// }
	

	public function comparaisonReponse($reponseUser, $reponseCorrecte) {
		$note = 0;

		for ($i=0; $i < count($reponseUser); $i++) { 
			foreach ($reponseCorrecte->result_array() as $row) {
				if ($row['idquestion']==$reponseUser[$i][0] && $row['idreponse']==$reponseUser[$i][1]) {
					echo "QUESTION ".$row['idquestion']." ".$reponseUser[$i][0]. "<br>";
					echo "REPONSE ".$row['idreponse']." ".$reponseUser[$i][1]. "<br>";
					echo "<br>";
					$note = $note + $row['note'];
				}
				//  else  if ($row['idquestion']==$reponseUser[$i][0] && $row['idreponse']==$reponseUser[$i][1]) {
				// 	echo "QUESTION ".$row['idquestion']." ".$reponseUser[$i][0]. "<br>";
				// 	echo "REPONSE ".$row['idreponse']." ".$reponseUser[$i][1]. "<br>";
				// 	echo "<br>";
				// 	$note = $note + $row['note'];
				// }		
			}
		}
		return $note;
	}

	public function listeQuestion_Reponse($reponseUser) {
		$tab = array();
		foreach ($reponseUser as $option) {
			$option = $this->decomposition($option);
			array_push($tab,$option);
        }
		return $tab;
	}

	public function checkanswer() {
		$reponse = $this->input->get('reponse');
	}

	public function decomposition($chaine) {
		$valeurs = explode(',', $chaine);
		$tableauDeuxDimensions = array($valeurs[0],$valeurs[1]);

		return $tableauDeuxDimensions;
	}
}

?>