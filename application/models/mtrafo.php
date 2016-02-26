<?php
class Mtrafo extends CI_Model{

	function show_trafo(){
		$this->db->select('name_trafo,sn_trafo,kapasitas_trafo,hvnominal_trafo,lvnominal_trafo,temp_oil_trafo,tahun_trafo,type_trafo');
		$this->db->from('data_trafo');
		return $this->db->get()->result();
	}

//crud default
	function get_data($table){
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get()->result();	
	}

	function insert_data($table,$data){
		$this->db->insert($table,$data);
	}
	function delete_data($table,$parameter,$id){
		$this->db->delete($table,array($parameter=>$id));
	}
	function select_data_id($table,$parameter,$id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where(array($parameter=>$id));
		return $this->db->get()->row();
	}
	function update_data($table,$data,$parameter,$id){
		$this->db->where($parameter,$id);
		return $this->db->update($table,$data);
	}
//end
}


?>