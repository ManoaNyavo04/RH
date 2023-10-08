<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription_model extends CI_Model{

    public function in_data($nom_societe,$nom_dirigeant,$date_creation,$adresse_entreprise,$email,$telephone,$objet,$capitale,$siege,$logo,$date_debut,$NIF,$NS,$NRCS,$devise_de_tenue_de_compte,$devise_equivalence){
        $data = array();
        $data[0]['nom_societe'] = $nom_societe;
        $data[0]['nom_dirigeant'] = $nom_dirigeant;
        $data[0]['date_creation']=$date_creation;
        $data[0]['adresse_entreprise']=$adresse_entreprise;
        $data[0]['email']=$email;
        $data[0]['telephone']=$email;
        $data[0]['objet']=$objet;
        $data[0]['capitale']=$capitale;
        $data[0]['siege']=$siege;
        $data[0]['logo']=$logo;
        $data[0]['date_debut']=$date_debut;
        $data[0]['NIF']=$NIF;
        $data[0]['NS']=$NS;
        $data[0]['NRCS']=$NRCS;
        $data[0]['devise_de_tenue_de_compte']=$devise_de_tenue_de_compte;
        $data[0]['devise_equivalence']=$devise_equivalence;
        return $data;
    }

    public function getLastIdSociete() {
        $resultat=0;
        $sql="select idSociete from societe where idSociete=(select max(idSociete) from societe)";
        $query=$this -> db -> query($sql);
        foreach($query->result_array() as $row){
            $resultat=$row['idSociete'];
        }
        return $resultat;
    }

    public function getFinExercice($date_debut) {
        $sql="SELECT DATE_ADD('%s', INTERVAL 12 MONTH) - INTERVAL 1 DAY as fin";
        $sql=sprintf($sql, $date_debut);
        $query=$this -> db -> query($sql);
        foreach($query -> result_array() as $row) {
            $resultat=$row['fin'];
        }
        return $resultat;
    }

    public function insertExercice($idSociete, $date_debut) {
        $date_fin=$this -> getFinExercice($date_debut);
        $sql="insert into exercice values(default, '%s', '%s', '%s' )";
        $sql=sprintf($sql, $idSociete, $date_debut, $date_fin);
        $this -> db -> query($sql);
    }

    public function insertCompta($idSociete, $email_comptable, $mdp, $nom_comptable) {
        $sql="insert into employe values(default, '%s', '%s', '%s', '%s')";
        $sql=sprintf($sql, $idSociete, $email_comptable, $mdp, $nom_comptable);
        $this -> db -> query($sql);
    }

    public function insert_societe($nom_societe,$nom_dirigeant,$date_creation,$adresse_entreprise,$email,$telephone,$objet,$capitale,$siege,$logo,$date_debut,$NIF,$NS,$NRCS,$devise_de_tenue_de_compte,$devise_equivalence){
        $data0 =array(
            'idDirigeant' => 1,
            'nom' => $nom_dirigeant
        );
        $this->db->insert('dirigeant', $data0);
        echo $nom_societe;
        $count = $this->db->count_all('dirigeant');
        echo $count;
        $sql = "insert into societe values(default,'".$nom_societe."',".$count.",'".$adresse_entreprise."','".$telephone."','".$email."','".$date_creation."','".$objet."',".$capitale.",'".$siege."','".$NIF."','".$NS."','".$NRCS."','".$date_debut."',".$devise_de_tenue_de_compte.",'".$devise_equivalence."','".$logo."')";
        echo $sql;
        $this->db->query($sql);
        $idSociete=$this -> getLastIdSociete();
        $this -> insertExercice($idSociete, $date_debut);
        //$this->db->insert('societe', $data);
    }
}

?>