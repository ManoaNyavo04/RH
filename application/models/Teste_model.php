<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teste_model extends CI_Model {
    public function getQuestionAnneeService($idservice){
        $query = "select * from question where annee= now() and idservice = '%s'";
        $query = sprintf($query, $idservice);
        $result = $this->db->query($query);
        $tab = array();

        $i=0;
        foreach($result->result_array() as $row){
            $tab[$i]['idquestion'] = $row['idquestion'];
            $tab[$i]['idservice'] = $row['idservice'];
            $tab[$i]['question'] = $row['question'];
            $tab[$i]['coeff'] = $row['coeff'];
            $tab[$i]['annee'] = $row['annee'];
            $i++;
        }
        return $tab;
    }

    public function getReponse($idquest){
        $query = "select * from reponse where idquestion = '%s'";
        $query = sprintf($query, $idquest);
        $result = $this->db->query($query);
        $tab = array();

        $i=0;
        foreach($result->result_array() as $row){
            $tab[$i]['idreponse'] = $row['idreponse'];
            $tab[$i]['idquestion'] = $row['idquestion'];
            $tab[$i]['reponse'] = $row['reponse'];
            $i++;
        }
        return $tab;
    }
}