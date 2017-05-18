<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('dashboard');
    }

	public function index(){
        $data['page'] = 'War Room Dashboard';
        $this->load->view('header',$data);

        //get all regional2 3p bulanan
		$temp = exec("python script/getdata.py");
        $result = json_decode($temp, true);
        $regionalbulan = array();
        foreach ($result as $t){
            $temp = explode("|",$t);
            array_pop($temp);
            array_push($regionalbulan,$temp);
        }
        //end get all regional2 3p bulanan

        //get all regional2 2p bulanan
        $temp = exec("python script/getdata2p.py");
        $result = json_decode($temp, true);
        $regionalbulan2p = array();
        foreach ($result as $t){
            $temp = explode("|",$t);
            array_pop($temp);
            array_push($regionalbulan2p,$temp);
        }
        //end get all regional2 2p bulanan

        //get all regional2 harian
        $temp = exec("python script/getdatadaily.py");
        $result = json_decode($temp, true);
        $regionalhari = array();
        foreach ($result as $t){
            $temp = explode("|",$t);
            array_pop($temp);
            array_push($regionalhari,$temp);
        }
        //end get all regional2 harian

        //get all regional2 2p harian
        $temp = exec("python script/getdatadaily2p.py");
        $result = json_decode($temp, true);
        $regionalhari2p = array();
        foreach ($result as $t){
            $temp = explode("|",$t);
            array_pop($temp);
            array_push($regionalhari2p,$temp);
        }
        //end get all regional2 2p harian

        //combine data
        $clearRegional = array();
        $divre2 = ["BANTEN","BEKASI","BOGOR","JAKBAR","JAKPUS","JAKSEL","JAKTIM","JAKUT","TANGERANG"];
        foreach ($divre2 as $regional){
            $temp = array();
            $temp[0] = $regional;
            for ($i=0;$i<sizeof($regionalhari);$i++){
                if($regional==$regionalhari[$i][2]){
                    array_push($temp,(int)$regionalhari[$i][11]);
                    $tempChurn = (int)$regionalhari[$i][13]+(int)$regionalhari[$i][14]+(int)$regionalhari[$i][15];
                    array_push($temp,$tempChurn);
                    break;
                }
            }
            for ($i=0;$i<sizeof($regionalhari2p);$i++){
                if($regional==$regionalhari2p[$i][2]){
                    array_push($temp,(int)$regionalhari2p[$i][8]);
                    break;
                }
            }

            for ($i=0;$i<sizeof($regionalbulan);$i++){
                if($regional==$regionalbulan[$i][2]){
                    $te = str_replace(",","",$regionalbulan[$i][16]);
                    array_push($temp,(int)$te);
                    break;
                }
            }

            for ($i=0;$i<sizeof($regionalbulan2p);$i++){
                if($regional==$regionalbulan2p[$i][2]){
                    $te = str_replace(",","",$regionalbulan2p[$i][13]);
                    array_push($temp,(int)$te);
                    break;
                }
            }
            array_push($clearRegional,$temp);
        }

        //$data['regionalhari2p'] = $regionalhari2p;
        $data['clear'] = $clearRegional;
        $data['regionalhari'] = $regionalhari;
        $data['regionalbulan'] = $regionalbulan;
        $this->load->view('dashboard',$data);
        $this->load->view('footer');

    }

    public function target(){
	    $data['page'] = 'Witel Target';
	    $this->load->view('header',$data);
	    #$data['target'] = $this->dashboard->getTDTarget();
	    $this->load->view('target');
	    $this->load->view('footer');
    }
}