<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_login extends CI_Controller { 
	function __construct(){
        parent::__construct();
	 }
	public function is_login(){
		if($this->session->userdata(('user_id') !="")){
		redirect('dashboard');
		}
	 }
	public function login(){
		$this->form_validation->set_rules('email','email','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');
		}else{
			$result=$this->admin_model->check_login();
			if($result == "1"){
				$this->session->flashdata('success','Login are successfull');
				redirect('dashboard');
			}else{
				$this->session->flashdata('error','Login are Invalid');
				redirect(base_url());
			}
		}
	}
	public function forgot_password(){
		$this->form_validation->set_rules('email','email','required');
		if($this->form_validation->run()== FALSE){
			$this->load->view('admin/forgot_password');
		}else{
			$result = $this->admin_model->check_email();
			if(result == "1"){
				$this->session->flashdata('success','Reset Password Linkare send thr Email');
				redirect('login');
			}else{
				$this->session->flashdata('error','Email In Invalid');
			}
		}
	} 
	public function reset_password(){
		$this->form_validation->set_rules('new_pass','new password','required');
		$this->form_validation->set_rules('confm_pass','confirm password','required');
		if($this->form_validation->run()== FALSE){
			$data['exist'] = $this->admin_model->get_reset_token();
			$this->load->view('admin/reset_password',$data);
		}else{
			$result = $this->admin_model->rest_password();
			$this->session->flashdata('success','Password has been reset');
			redirect('login');			
		}
	}
}