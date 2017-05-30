<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }

    public function getdata(){
        $query = $this->db->query("SELECT * FROM data");
        return $query ? $query->result() : "Gagal";
    }

    public function getAllTarget(){
        $query = $this->db->query("SELECT * FROM target");
        return $query ? $query->result() : "Gagal";
    }

    public function getTDTarget(){
        $mo = date('n');
        $ye = date('Y');
        $query = $this->db->query("SELECT witel, target FROM target where bulan= '$mo' and tahun='$ye'");
        return $query ? $query->result() : "Gagal";
    }

    public function gettiket(){
        $query = $this->db->query("SELECT * FROM tiket");
        return $query ? $query->result() : "Gagal";
    }

}
?>