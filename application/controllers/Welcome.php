<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function index(){
        $data['page'] = 'War Room Dashboard';
        $this->load->view('header',$data);

        //get all regional2 bulanan
		$temp = exec("python script/getdata.py");
        $result = json_decode($temp, true);
        $regionalbulan = array();
        foreach ($result as $t){
            $temp = explode("|",$t);
            array_pop($temp);
            array_push($regionalbulan,$temp);
        }
        //end get all regional2 bulanan

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
        $divre2 = ["BANTEN","BEKASI","BOGOR","JAKBAR","JAKPUS","JAKSEL","JAKTIM","TANGERANG"];
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
                    array_push($temp,(int)$regionalbulan[$i][16]);
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
}