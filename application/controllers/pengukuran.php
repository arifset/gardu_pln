<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengukuran extends MY_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('mpengukuran');
		
		if($this->session->userdata('islogin')==FALSE){    		
    	   	redirect('login');
        }
	}

////fungsi gardu
	function pengukuran(){
			//$data['gardu'] = $this->mpengukuran->show_pengukuran();
			$this->render_pages('add_pengukuran',$data);
	}
	function result_pengukuran(){
		$this->render_pages('result_pengukuran');
	}
	function delete_pengukuran($id){
		$this->mgardu->delete_pengukuran($id);
		redirect('dashboard/pengukuran');
	}
	function add_pengukuran(){
		//$data['trafo_list']=$this->mpengukuran->get_trafo_list();
		$data['gardu'] = $this->mpengukuran->get_gardu();
		//$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
		$this->render_pages('add_pengukuran',$data);		
	}
	function act_add_pengukuran(){
		$nama_gardu = $this->input->post('nama_gardu');
        $jenis_gardu = $this->input->post('jenis_gardu');
        $gi_gardu = $this->input->post('gi_gardu');
		$alamat = $this->input->post('alamat');
		$temp_gardu = $this->input->post('temp_gardu');
		$jenis_trafo = $this->input->post('jenis_trafo');

		$this->form_validation->set_rules('nama_gardu', 'Nama Gardu', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Gardu', 'required');
		$this->form_validation->set_rules('temp_gardu', 'Temp Gardu', 'required');
		$this->form_validation->set_rules('jenis_gardu','Jenis Gardu','required');
		$this->form_validation->set_rules('jenis_trafo','Jenis Trafo','required');
		$this->form_validation->set_rules('gi_gardu','GI Gardu','required');

		if ($this->form_validation->run() == FALSE){
			$data['trafo_list']=$this->mgardu->get_trafo_list();
			$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
			$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
            $this->render_pages('add_gardu',$data);
       	}else{
			$data_gardu = array("nama_gardu"=>$nama_gardu,"id_trafo"=>$jenis_trafo,"jenis_gardu"=>$jenis_gardu,"gi_gardu"=>$gi_gardu,"alamat_gardu"=>$alamat,"temp_gardu"=>$temp_gardu);
        	$this->mgardu->insert_data_gardu($data_gardu);
            redirect('dashboard/gardu');
		}
	}

	function edit_pengukuran($id){
		$data['gardu'] = $this->mpengukuran->get_gardu($id)->row();
		$data['trafo_list']=$this->mpengukuran->get_trafo_list();
		$data['jenis_gardu'] = $this->mpengukuran->get_jenis_gardu();
		$data['gi_gardu'] = $this->mpengukuran->get_gi_gardu();
		$this->render_pages('edit_pengukuran',$data);
	}

	function save_edit_pengukuran(){
		$id_gardu = $this->input->post('id_gardu');
		$nama_gardu = $this->input->post('nama_gardu');
        $jenis_gardu = $this->input->post('jenis_gardu');
        $gi_gardu = $this->input->post('gi_gardu');
		$alamat = $this->input->post('alamat');
		$temp_gardu = $this->input->post('temp_gardu');
		$jenis_trafo = $this->input->post('jenis_trafo');

		$this->form_validation->set_rules('id_gardu', 'ID Gardu', 'required');
		$this->form_validation->set_rules('nama_gardu', 'Nama Gardu', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Gardu', 'required');
		$this->form_validation->set_rules('temp_gardu', 'Temp Gardu', 'required');
		$this->form_validation->set_rules('jenis_gardu','Jenis Gardu','required');
		$this->form_validation->set_rules('jenis_trafo','Jenis Trafo','required');
		$this->form_validation->set_rules('gi_gardu','GI Gardu','required');

		if ($this->form_validation->run() == FALSE){
			$data['trafo_list']=$this->mgardu->get_trafo_list();
			$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
			$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
            $this->render_pages('validasi_edit',$data);
       	}else{
			$data_gardu = array("nama_gardu"=>$nama_gardu,"id_trafo"=>$jenis_trafo,"jenis_gardu"=>$jenis_gardu,"gi_gardu"=>$gi_gardu,"alamat_gardu"=>$alamat,"temp_gardu"=>$temp_gardu);
        	$this->mgardu->update_gardu($data_gardu,$id_gardu);
            
            redirect('dashboard/gardu');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */