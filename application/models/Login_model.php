<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function getdata(){
        $query = $this->db->query("select * from Employe");
        $tab = array();
        $i=0;
        foreach($query->result_array() as $row){
            $tab[$i]['idEmploye'] = $row['idEmploye'];
            $tab[$i]['idSociete'] = $row['idSociete'];
            $tab[$i]['email'] = $row['email'];
            $tab[$i]['password'] = $row['password'];
            $tab[$i]['nom'] = $row['nom'];
            $i++;
        }
        return $tab;
    }

    public function getLastExercice() {
        $sql="select * from exercice where idExercice=(select max(idExercice) from exercice)";
        $query=$this -> db -> query($sql);
        $resultat=array();
        foreach($query -> result_array() as $row) {
            $resultat=$row;
        }
        return $resultat;
    }
}