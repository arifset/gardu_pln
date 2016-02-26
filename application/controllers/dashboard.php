<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('mgardu');
		$this->load->model('mtrafo');
		if($this->session->userdata('islogin')==FALSE){    		
    	   	redirect('login');
        }
	}

	public function index()
	{
		$this->render_pages('home');    
	}
////fungsi gardu
	function gardu(){
			$data['gardu'] = $this->mgardu->show_gardu();
			$this->render_pages('gardu',$data);
	}
	function delete_gardu($id){
		$this->mgardu->delete_gardu($id);
		redirect('dashboard/gardu');
	}
	function add_gardu(){
		$data['trafo_list']=$this->mgardu->get_trafo_list();
		$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
		$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
		$this->render_pages('add_gardu',$data);		
	}
	function act_add_gardu(){
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

	function edit_gardu($id){
		$data['gardu'] = $this->mgardu->get_gardu($id)->row();
		$data['trafo_list']=$this->mgardu->get_trafo_list();
		$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
		$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
		$this->render_pages('edit_gardu',$data);
	}

	function save_edit_gardu(){
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
//fungsi trafo
	function trafo(){
			$data['trafo'] = $this->mtrafo->show_trafo();
			$this->render_pages('trafo',$data);
	}
	function delete_trafo($id){
		$this->mtrafo->delete_trafo($id);
		redirect('dashboard/trafo');
	}
//


	//fungsi oil level list
	function oil_level(){
		$data['oil_list']=$this->mtrafo->get_data('oil_level_list');
		$this->render_pages('oil_level_list/oil_level',$data);			
	}

	function add_oil_list(){
		$oil_level = $this->input->post('oil_level_list');
        $oil_nilai = $this->input->post('oil_nilai_list');
        
		$this->form_validation->set_rules('oil_level_list','Level Oil','required');
		$this->form_validation->set_rules('oil_nilai_list','Nilai Oil','required');

		if ($this->form_validation->run() == FALSE){
			$data['oil_list']=$this->mtrafo->get_data('oil_level_list');
            $this->render_pages('oil_level_list/oil_level',$data);
       	}else{
			$data_oil = array("name_level"=>$oil_level,"nilai_level"=>$oil_nilai);
        	$this->mtrafo->insert_data('oil_level_list',$data_oil);
            redirect('dashboard/oil_level');
		}
	}
	function delete_oil_list($id){
		$this->mtrafo->delete_data('oil_level_list','id_level',$id);
		redirect('dashboard/oil_level');
	}
	function edit_oil_list($id){
		$data['oil_list']=$this->mtrafo->get_data('oil_level_list');
		$data['oil_list_select']=$this->mtrafo->select_data_id('oil_level_list','id_level',$id);
		$this->render_pages('oil_level_list/edit_oil_level',$data);
	}

	function save_oil_list_edit(){
		$oil_level = $this->input->post('oil_level_list');
        $oil_nilai = $this->input->post('oil_nilai_list');
        $id_level = $this->input->post('id_level');
        $data_oil = array("name_level"=>$oil_level,"nilai_level"=>$oil_nilai);
		
		$this->mtrafo->update_data('oil_level_list',$data_oil,'id_level',$id_level);	
		redirect("dashboard/oil_level");			
	}
	//end

	//fungsi tap list
	function tap_list(){
		$data['tap_list']=$this->mtrafo->get_data('tap_list');
		$this->render_pages('tap list/tap_list',$data);			
	}

	function add_tap_list(){
		$name_tap = $this->input->post('name_tap');
        $nilai_tap = $this->input->post('nilai_tap');
        
		$this->form_validation->set_rules('name_tap','Nama Tap','required');
		$this->form_validation->set_rules('nilai_tap','Nilai Tap','required');

		if ($this->form_validation->run() == FALSE){
			$data['tap_list']=$this->mtrafo->get_data('tap_list');
            $this->render_pages('tap list/tap_list',$data);
       	}else{
			$data_tap = array("name_tap"=>$name_tap,"nilai_tap"=>$nilai_tap);
        	$this->mtrafo->insert_data('tap_list',$data_tap);
            redirect('dashboard/tap_list');
		}
	}
	function delete_tap_list($id){
		$this->mtrafo->delete_data('tap_list','id_tap_list',$id);
		redirect('dashboard/tap_list');
	}
	function edit_tap_list($id){
		$data['tap_list']=$this->mtrafo->get_data('tap_list');
		$data['tap_list_select']=$this->mtrafo->select_data_id('tap_list','id_tap_list',$id);
		$this->render_pages('tap list/edit_tap_list',$data);
	}

	function save_tap_list_edit(){
		$name_tap = $this->input->post('name_tap');
        $nilai_tap = $this->input->post('nilai_tap');
        $id_level = $this->input->post('id_level');
        $data_tap = array("name_tap"=>$name_tap,"nilai_tap"=>$nilai_tap);
		
		$this->mtrafo->update_data('tap_list',$data_tap,'id_tap_list',$id_level);	
		redirect("dashboard/tap_list");			
	}
	//end

	//fungsi tipe trafo list
	function tipe_trafo_list(){
		$data['type_trafo_list']=$this->mtrafo->get_data('type_trafo_list');
		$this->render_pages('tipe_trafo_list/tipe_trafo_list',$data);			
	}

	function add_tipe_trafo_list(){
		$tipe_trafo = $this->input->post('tipe_trafo');
      
        
		$this->form_validation->set_rules('tipe_trafo','Tipe Trafo','required');
	

		if ($this->form_validation->run() == FALSE){
			$data['type_trafo_list']=$this->mtrafo->get_data('type_trafo_list');
            $this->render_pages('tipe_trafo_list/tipe_trafo_list',$data);
       	}else{
			$data_tap = array("name_type_trafo"=>$tipe_trafo);
        	$this->mtrafo->insert_data('type_trafo_list',$data_tap);
            redirect('dashboard/tipe_trafo_list');
		}
	}
	function delete_tipe_trafo_list($id){
		$this->mtrafo->delete_data('type_trafo_list','id_type_trafo',$id);
		redirect('dashboard/tipe_trafo_list');
	}
	function edit_tipe_trafo_list($id){
		$data['type_trafo_list']=$this->mtrafo->get_data('type_trafo_list');
		$data['tipe_trafo_list_select']=$this->mtrafo->select_data_id('type_trafo_list','id_type_trafo',$id);
		$this->render_pages('tipe_trafo_list/edit_tipe_trafo_list',$data);
	}

	function save_tipe_trafo_list_edit(){
		$tipe_trafo = $this->input->post('tipe_trafo');
        $id_level = $this->input->post('id_level');
        $data_tap = array("name_type_trafo"=>$tipe_trafo);
		
		$this->mtrafo->update_data('type_trafo_list',$data_tap,'id_type_trafo',$id_level);	
		redirect("dashboard/tipe_trafo_list");			
	}
	//end

	//fungsi name trafo list
	function name_trafo_list(){
		$data['name_trafo_list']=$this->mtrafo->get_data('name_trafo_list');
		$this->render_pages('name_trafo_list/name_trafo_list',$data);			
	}

	function add_name_trafo_list(){
		$tipe_trafo = $this->input->post('name_trafo');
      
        
		$this->form_validation->set_rules('name_trafo','Name Trafo','required');
	

		if ($this->form_validation->run() == FALSE){
		$data['name_trafo_list']=$this->mtrafo->get_data('name_trafo_list');
            $this->render_pages('name_trafo_list/name_trafo_list',$data);
       	}else{
			$data_tap = array("name_trafo"=>$tipe_trafo);
        	$this->mtrafo->insert_data('name_trafo_list',$data_tap);
            redirect('dashboard/name_trafo_list');
		}
	}
	function delete_name_trafo_list($id){
		$this->mtrafo->delete_data('name_trafo_list','id_name',$id);
		redirect('dashboard/name_trafo_list');
	}
	function edit_name_trafo_list($id){
		$data['name_trafo_list']=$this->mtrafo->get_data('name_trafo_list');
		$data['name_trafo_list_select']=$this->mtrafo->select_data_id('name_trafo_list','id_name',$id);
		$this->render_pages('name_trafo_list/edit_name_trafo_list',$data);
	}

	function save_name_trafo_list_edit(){
		$tipe_trafo = $this->input->post('name_trafo');
        $id_level = $this->input->post('id_level');
        $data_tap = array("name_trafo"=>$tipe_trafo);
		
		$this->mtrafo->update_data('name_trafo_list',$data_tap,'id_name',$id_level);	
		redirect("dashboard/name_trafo_list");			
	}
	//end





	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */