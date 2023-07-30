<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Controller {
	function __construct() {
    parent::__construct();

	}
	public function savedata(){
		if($this->input->is_ajax_request()){
			$index=$this->input->post('index');
			$data=$this->input->post('data');
			$this->session->set_userdata('process_datasetindex',$index);
			$this->session->set_userdata('process_dataset',$data);
			$this->db->truncate("dataset");
			$this->db->insert_batch("dataset",$data);
		}else{
			show_404();
		}
	}
	function delete($key=NULL){
		$this->db->query("DELETE FROM naivebayes_history WHERE JSON_EXTRACT(history, '$.uniqid')=?;",array($key));
		redirect("naivebayes/history");
	}
	function truncate(){
		$this->db->where("type","secondary");
		$this->db->delete("dataset");
		redirect("naivebayes/history");
	}
	function printhistory(){
		$this->load->view("module/naivebayes/output");
	}
}
