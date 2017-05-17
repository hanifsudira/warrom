<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }

    public function getAllTarget(){

    }

    public function getTDTarget(){
        $mo = date('n');
        $ye = date('Y');
        $query = $this->db->query("SELECT witel, target FROM wr_db.target where bulan= '$mo' and tahun='$ye'");
        return $query ? $query->result() : "Gagal";
    }

}
?>