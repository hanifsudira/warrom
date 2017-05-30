<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('dashboard');
    }

//	public function index(){
//        $data['page'] = 'War Room Dashboard';
//        $this->load->view('header',$data);
//        $target = $this->dashboard->getTDTarget();
//
//        //get all regional2 3p bulanan
//		$temp = exec("python script/getdata.py");
//        $result = json_decode($temp, true);
//        $regionalbulan = array();
//        foreach ($result as $t){
//            $temp = explode("|",$t);
//            array_pop($temp);
//            array_push($regionalbulan,$temp);
//        }
//        //end get all regional2 3p bulanan
//
//        //get all regional2 2p bulanan
//        $temp = exec("python script/getdata2p.py");
//        $result = json_decode($temp, true);
//        $regionalbulan2p = array();
//        foreach ($result as $t){
//            $temp = explode("|",$t);
//            array_pop($temp);
//            array_push($regionalbulan2p,$temp);
//        }
//        //end get all regional2 2p bulanan
//
//        //get all regional2 harian
//        $temp = exec("python script/getdatadaily.py");
//        $result = json_decode($temp, true);
//        $regionalhari = array();
//        foreach ($result as $t){
//            $temp = explode("|",$t);
//            array_pop($temp);
//            array_push($regionalhari,$temp);
//        }
//        //end get all regional2 harian
//
//        //get all regional2 2p harian
//        $temp = exec("python script/getdatadaily2p.py");
//        $result = json_decode($temp, true);
//        $regionalhari2p = array();
//        foreach ($result as $t){
//            $temp = explode("|",$t);
//            array_pop($temp);
//            array_push($regionalhari2p,$temp);
//        }
//        //end get all regional2 2p harian
//
//        //combine data
//        $clearRegional = array();
//        $divre2 = ["BANTEN","BEKASI","BOGOR","JAKBAR","JAKPUS","JAKSEL","JAKTIM","JAKUT","TANGERANG"];
//        foreach ($divre2 as $regional){
//            $temp = array();
//            $temp[0] = $regional;
//
//            if ($regional=='JAKUT' && $regionalhari[8][0]=='TOTAL'){
//                array_push($temp,0);
//                array_push($temp,0);
//            }
//
//            for ($i=0;$i<count($regionalhari);$i++){
//                if($regional==$regionalhari[$i][2]){
//                    array_push($temp,(int)$regionalhari[$i][11]);
//                    $tempChurn = (int)$regionalhari[$i][13]+(int)$regionalhari[$i][14]+(int)$regionalhari[$i][15];
//                    array_push($temp,$tempChurn);
//                    break;
//                }
//            }
//            for ($i=0;$i<count($regionalhari2p);$i++){
//                if($regional==$regionalhari2p[$i][2]){
//                    array_push($temp,(int)$regionalhari2p[$i][8]);
//                    break;
//                }
//            }
//
//            for ($i=0;$i<count($regionalbulan);$i++){
//                if($regional==$regionalbulan[$i][2]){
//                    $te = str_replace(",","",$regionalbulan[$i][16]);
//                    array_push($temp,(int)$te);
//                    break;
//                }
//            }
//
//            for ($i=0;$i<count($regionalbulan2p);$i++){
//                if($regional==$regionalbulan2p[$i][2]){
//                    $te = str_replace(",","",$regionalbulan2p[$i][13]);
//                    array_push($temp,(int)$te);
//                    break;
//                }
//            }
//            for ($i=0;$i<count($target);$i++){
//                if($regional==$target[$i]->witel){
//                    array_push($temp,$target[$i]->target);
//                    break;
//                }
//            }
//            array_push($clearRegional,$temp);
//        }
//        $clear = array();
//        foreach ($clearRegional as $t){
//            $temp = array();
//            $temp[0] = $t[0];
//            array_push($temp,$t[1]);
//            array_push($temp,$t[3]);
//            $total = $t[1]+$t[3];
//            array_push($temp,$total);
//            array_push($temp,$t[2]);
//            $nal = $total-$t[2];
//            array_push($temp,$nal);
//            $nalmtd = $t[4]+$t[5];
//            array_push($temp,$nalmtd);
//            array_push($temp,$t[6]);
//            $year = date('Y');
//            $month = date('n');
//            $day = cal_days_in_month(CAL_GREGORIAN,$month,$year);
//            $today = date('j');
//            $div = ($today/$day)*$t[6];
//            $achmtd = ($nalmtd/$div)*100;
//            array_push($temp,(float)$achmtd);
//
//            array_push($clear,$temp);
//        }
//
//        foreach ($clear as $array) {
//            $bysort[] = $array[8];
//        }
//        array_multisort($bysort,SORT_DESC,SORT_NUMERIC,$clear);
//        $content = file_get_contents("https://mdashboard.telkom.co.id/indihome/app.php/report/tgl_update");
//        $data['selesai'] = json_decode($content)->rows->SELESAI ;
//        $data['clear'] = $clear;
//        $this->load->view('dashboard',$data);
//        $this->load->view('footer');
//    }

    public function index(){
        $data['page'] = 'War Room Dashboard';
        $data['fulltitle'] = 'NAL IndiHome Jakarta Barat';
        $data['tipe'] = 1;
        $this->load->view('header',$data);
        $mydata = $this->dashboard->getdata();
        foreach ($mydata as $t){
            $bysort[] = $t->achmtd;
        }
        array_multisort($bysort,SORT_DESC,SORT_NUMERIC,$mydata);
        $data['clear'] = $mydata;
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }

    public  function assurance(){
        $data['page'] = 'Assurance';
        $data['fulltitle'] = 'Assurance Tiket Jakarta Barat';
        $data['tipe'] = 2;
        $this->load->view('header',$data);
        #$temp = exec("python script/getnonatero.py");
        #$data['tiket'] = json_decode($temp, true);
        $data['tiket'] = $this->dashboard->gettiket();
        $this->load->view('assurance',$data);
        $this->load->view('footer');
    }

    public function reportps(){
        $data['page'] = 'Chart';
        $data['fulltitle'] = 'Report 2 Month';
        $data['tipe'] = 3;
        $this->load->view('header',$data);
        //$this->load->view('report',$data);
        $this->load->view('footer');
    }


    public function target(){
	    $data['page'] = 'Witel Target';
	    $data['fulltitle'] = 'Target Witel Regional 2';
        $data['tipe'] = 4;
	    $this->load->view('header',$data);
        $divre2 = ["BANTEN","BEKASI","BOGOR","JAKBAR","JAKPUS","JAKSEL","JAKTIM","JAKUT","TANGERANG"];
        $temp = $this->dashboard->getAllTarget();
        $target = array();
        foreach ($divre2 as $regional){
            $arr = array();
            array_push($arr,$regional);
            for ($i = 0;$i<count($temp);$i++){
                if($temp[$i]->witel == $regional){
                    array_push($arr,$temp[$i]->target);
                }
            }
            array_push($target,$arr);
        }

	    $data['target'] = $target;
	    $this->load->view('target',$data);
	    $this->load->view('footer');
    }


}