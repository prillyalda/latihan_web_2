<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

	
	public function index()
    {
        echo "coba membuat controller baru";
    }
    
        public function testpenjumlahan($nilai1, $nilai2) {
            $this->load->model("model_latihan1");
            $hasil = $this->model_latihan1->simplesum($nilai1, $nilai2);
            //echo "hasil penjumalahan bilangan sederhana ".$nilai1." + ".$nilai2."=".$hasil;

            $data['nilai1'] = $nilai1;
            $data['nilai2'] = $nilai2;
            $data['hasil'] = $hasil;
            $this->load->view('latihan1.html', $data);

        }
    }
    ?>
   
