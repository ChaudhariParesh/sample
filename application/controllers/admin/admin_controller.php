<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_controller extends CI_Controller { 
	function __construct(){
		parent::__construct();
		$this->is_login();
	 }
	public function is_login(){
		if($this->session->userdata('user_id') == ""){
			redirect('login');
			}	
	}public function dashboard(){
		$data['total_contact']=$this->admin_model->get_total_contact_count();
		$data['total_enquiry']=$this->admin_model->get_total_enquiry_count();
		$this->load->view('admin/dashboard',$data);
	}
	public function check_logout(){
		$this->session->sess_destroy();
		redirect('login');
	}	
	public function update_profile(){
		if($this->input->post('check_password') == "check_password" ){ 
		$result = $this->admin_model->set_password();
		$this->session->flashdata('success',' Change Password successfully');
		redirect('update_profile');
		}
		$this->form_validation->set_rules('first_name','First Name','required');
		if($this->form_validation->run()==FALSE){
			$data['single']=$this->admin_model->get_profile();
			$this->load->view('admin/update_profile',$data);
		}else{
			$result = $this->admin_model->set_profile();
			redirect('update_profile');
				if($result =="1"){
					$this->session->flashdata('success',' update profile successfully');
				}else{
					$this->session->flashdata('error',' update profile unsuccessfully');
				}
			}
	}
		public function inactive(){
			$this->admin_model->inactive();
			$this->session->set_flashdata('success','Record inactive Suucessfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		public function active(){
			$this->admin_model->active();
			$this->session->set_flashdata('success','Record active Suucessfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		public function delete(){
			$this->admin_model->delete();
			$this->session->set_flashdata('success','Record delete Suucessfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
	public function list_contact(){
		$data['catagory']=$this->admin_model->get_all_contact();
		$data['single']=$this->admin_model->get_single_contact();
		$this->load->view('admin/list_contact',$data);
	}	
	public function list_enquiry(){
		$data['catagory']=$this->admin_model->get_all_enquiry();
		$data['single']=$this->admin_model->get_single_enquiry();
		$this->load->view('admin/list_enquiry',$data);
	}
}

