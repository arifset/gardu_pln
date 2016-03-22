<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Count extends CI_Controller {

	function index(){
		$this->load->view('input_count');
	}

	function hitung(){
		$r = $this->input->post('r');
		$s = $this->input->post('s');
		$t = $this->input->post('t');
		$setimbang = ($r+$s+$t)/3;
		
		if($r<0){
			echo"R Harus Positif";
		}else if($s<0){
			echo"S Harus Positif";
		}else if($t<0){
			echo"T Harus Positif";
		}else{

			if($r>$setimbang){
				$pindah_r = $r-$setimbang;
			}else{
				$pindah_r = 0;
			}

			if($s>$setimbang){
				$pindah_s = $s-$setimbang;
			}else{
				$pindah_s =0;
			}

			if($t>$setimbang){
				$pindah_t = $t-$setimbang;
			}else{
				$pindah_t = 0;
			}

			if(($pindah_r and $pindah_s)!=0){
				
				$r_akhir = $r-$pindah_r;
				$s_akhir = $s-$pindah_s;
				$t_akhir = $t+$pindah_r+$pindah_s;

					$data['keterangan_r'] = array("Pindah ke T = $pindah_r");
					$data['keterangan_s'] = array("Pindah ke T = $pindah_s");
					$data['keterangan_t'] = array();

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s_akhir;
					$data['t'] =  $t_akhir;
					$data['r'] =  $r_akhir;
					$this->load->view('show_count',$data);

			}else if(($pindah_r and $pindah_t)!=0){

				$r_akhir = $r-$pindah_r;
				$t_akhir = $t-$pindah_t;
				$s_akhir = $s+$pindah_r+$pindah_t;


					$data['keterangan_r'] = array("Pindah ke S = $pindah_r");
					$data['keterangan_s'] = array();
					$data['keterangan_t'] = array("Pindah ke S = $pindah_t");

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s_akhir;
					$data['t'] =  $t_akhir;
					$data['r'] =  $r_akhir;
					$this->load->view('show_count',$data);


			}else if(($pindah_t and $pindah_s)!=0){

				$s_akhir = $s-$pindah_s;
				$t_akhir = $t-$pindah_t;
				$r_akhir = $r+$pindah_t+$pindah_s;


					$data['keterangan_r'] = array();
					$data['keterangan_s'] = array("Pindah ke R = $pindah_s");
					$data['keterangan_t'] = array("Pindah ke R = $pindah_t");

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s_akhir;
					$data['t'] =  $t_akhir;
					$data['r'] =  $r_akhir;
					$this->load->view('show_count',$data);



			}else if($pindah_r!=0){
				if(($pindah_s and $pindah_t)==0){
					$kurang_t = $setimbang-$t;
					$kurang_s = $setimbang-$s; 

					$tambah_s = $pindah_r-$kurang_t;
					$tambah_t = $pindah_r-$kurang_s;

					$data['r_pindah_ke_s'] = $tambah_s;
					$data['r_pindah_ke_t'] = $tambah_t;

					$data['keterangan_r'] = array("Pindah ke S = $tambah_s","Pindah ke T = $tambah_t");
					$data['keterangan_s'] = array();
					$data['keterangan_t'] = array();

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s+$tambah_s;
					$data['t'] =  $t+$tambah_t;
					$data['r'] =  $r-$pindah_r;
					$this->load->view('show_count',$data);
					
				}else if($pindah_s==0){
					$s_akhir = $s+$pindah_r+$pindah_t;
					$t_akhir = $t-$pindah_t;
					$r_akhir = $r-$pindah_r;
				
				}else if($pindah_t==0){
					$t_akhir = $t+$pindah_r+$pindah_s;
					$s_akhir = $s-$pindah_s;
					$r_akhir = $r-$pindah_r;
					
				}

			}else if($pindah_s!=0){
				if(($pindah_r and $pindah_t)==0){
					$kurang_t = $setimbang-$t;
					$kurang_r = $setimbang-$r; 

					$tambah_r = $pindah_s-$kurang_t;
					$tambah_t = $pindah_s-$kurang_r;

					$data['s_pindah_ke_r'] = $tambah_r;
					$data['s_pindah_ke_t'] = $tambah_t;


					$data['keterangan_r'] = array();
					$data['keterangan_s'] = array("Pindah ke R = $tambah_r","Pindah ke T = $tambah_t");
					$data['keterangan_t'] = array();

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s-$pindah_s;
					$data['t'] =  $t+$tambah_t;
					$data['r'] =  $r+$tambah_r;

					$this->load->view('show_count',$data);
					
				}else if($pindah_r==0){
					$r_akhir = $r+$pindah_r+$pindah_t;
					$t_akhir = $t-$pindah_t;
					$s_akhir = $s-$pindah_r;
					
				}else if($pindah_t==0){
					$t_akhir = $t+$pindah_r+$pindah_s;
					$s_akhir = $s-$pindah_s;
					$r_akhir = $r-$pindah_r;
				}

			}else if($pindah_t!=0){
				if(($pindah_r and $pindah_s)==0){
					$kurang_r = $setimbang-$r;
					$kurang_s = $setimbang-$s; 

					$tambah_s = $pindah_t-$kurang_r;
					$tambah_r = $pindah_t-$kurang_s;

					$data['t_pindah_ke_r'] = $tambah_r;
					$data['t_pindah_ke_s'] = $tambah_s;


					$data['keterangan_r'] = array();
					$data['keterangan_s'] = array();
					$data['keterangan_t'] = array("Pindah ke R = $tambah_r","Pindah ke S = $tambah_s");

					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s+$tambah_s;
					$data['t'] =  $t-$pindah_t;
					$data['r'] =  $r+$tambah_r;

					$this->load->view('show_count',$data);
					
				}else if($pindah_r==0){
					$s_akhir = $s-$pindah_s;
					$t_akhir = $t-$pindah_t;
					$r_akhir = $r+$pindah_s+$pindah_t;
					
				}else if($pindah_s==0){
					$t_akhir = $t-$pindah_t;
					$s_akhir = $s+$pindah_t+$pindah_r;
					$r_akhir = $r-$pindah_r;
					
				}
			}else{
					$data['r_awal'] = $r;
					$data['s_awal'] = $s;
					$data['t_awal'] = $t;
					
					$data['s'] =  $s;
					$data['t'] =  $t;
					$data['r'] =  $r;

					$data['keterangan_r'] = array();
					$data['keterangan_s'] = array();
					$data['keterangan_t'] = array();

					$this->load->view('show_count',$data);
			}
		
		}


	}





}