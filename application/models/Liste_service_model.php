<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Liste_service_model extends CI_Model {

    public function getService(){
        $query = "select * from service";
        $query = $this->db->query($query);
        $tab = array();
        $i= 0;
        foreach($query->result_array() as $row){
            $tab[$i]['idservice'] = $row['idservice'];
            $tab[$i]['nomservice'] = $row['nomservice'];
            $tab[$i]['horaire'] = $row['horaire'];
            $tab[$i]['nbrpers'] = $row['nbrpers'];
            $i++;
        }
        return $tab;
    }
}