<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ajax_controller extends CI_Controller {
	
	  public function get_unique_state(){
		 $this->admin_model->get_unique_state();
	 }
	public function get_unique_district(){
		 $this->admin_model->get_unique_district();
	 }
	 public function get_unique_taluka(){
		 $this->admin_model->get_unique_taluka();
	 }
	 public function get_unique_village(){
		 $this->admin_model->get_unique_village();
	 }
}