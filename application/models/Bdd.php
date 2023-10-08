<?php
if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Bdd extends CI_Model{
    public function select($nomtable) {
        $this->db->select('*');
        $query=$this->db->get($nomtable);
        return $query;
    }

    public function select_where($tablename, $colonnewhere, $idtoselect, $colonnetoget) {
        $this->db->select($colonnetoget);
        $this->db->where($colonnewhere, $idtoselect);
        $query = $this->db->get($tablename);
        return $query;
    }

    public function insert($tablename, $data) {
        $this->db->insert($tablename, $data);
    }

    public function delete($tablename, $colonne, $idtodelete) {
        $this->db->where($colonne, $idtodelete);
        $this->db->delete($tablename);
    }

    public function update($tablename, $colonne, $idtoupdate, $data) {
        $this->db->where($colonne, $idtoupdate);
        $this->db->update($tablename, $data);
    }
}
