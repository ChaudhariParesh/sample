<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class front_controller extends CI_Controller{
	public function __construct(){
		parent::__construct(); 
	}
	
	public function enquiry(){
			$this->form_validation->set_rules('first_name','first name','required');
			if($this->form_validation->run() === FALSE){
			$data['single']=$this->front_model->get_single_enquiry();
			$this->load->view('front/enquiry',$data);
			}else{
				$result= $this->front_model->set_enquiry();
			if($result == "0"){
					$this->session->set_flashdata('success','Record Added Suucessfully');
				}else{
					$this->session->set_flashdata('success','update Suucessfully');
				}
				redirect('');
			}
	}
	public function contact(){
			$this->form_validation->set_rules('contact_name','contact name','required');
			if($this->form_validation->run() === FALSE){
			$data['single']=$this->front_model->get_single_contact();
			$this->load->view('front/contact',$data);
			}else{
				$result= $this->front_model->set_contact();
			if($result == "0"){
					$this->session->set_flashdata('success','Record Added Suucessfully');
				}else{
					$this->session->set_flashdata('success','update Suucessfully');
				}
				redirect('');
			}
	}
	public function about(){	
		$this->load->view('front/about');
	}
	public function index(){	
		$this->load->view('front/index');
	}
	public function upload_info(){	
		$this->load->view('front/upload_info');
	}
	public function search_request(){	
		$this->load->view('front/search_request');
	}
	public function diet_plan(){	
		$this->load->view('front/diet_plan');
	}
	public function gym_installation(){	
		$this->load->view('front/gym_installation');
	}
	public function consultancy(){	
		$this->load->view('front/consultancy');
	}
	public function retail(){	
		$this->load->view('front/retail');
	}
	public function details_request(){	
		$this->load->view('front/details_request');
	}
	public function draft_request(){	
		$this->load->view('front/draft_request');
	}
	public function registration(){
		$this->form_validation->set_rules('first_name','first name','required');
		if($this->form_validation->run() === FALSE){
		$data['single']=$this->front_model->get_single_registration();
		$this->load->view('front/registration',$data);
		}else{
			$result = $this->front_model->set_registration();
			if($result == "0"){
				$this->session->set_flashdata('success','Record Added Suucessfully');
			}else{
				$this->session->set_flashdata('error','Record Added Unsuucessfully');
			}
			redirect('registration');
		}
	}
	public function add_property(){
		$this->form_validation->set_rules('state','select state','required');
		if($this->form_validation->run() === FALSE){
			$data['all_state']=$this->front_model->get_all_state();
			$data['all_district']=$this->front_model->get_all_district();
			$data['all_taluka']=$this->front_model->get_all_taluka();
			$data['all_village']=$this->front_model->get_all_village();
			$data['single']=$this->front_model->get_single_property();
			$this->load->view('front/add_property',$data);
			
		}else{
			$file_type = "";
		if(isset($_FILES['file_type'])){
			$file_data['upload_path'] = 'images/file_type';
			$file_data['allowed_types'] = 'gif|jpg|png|jpeg';
			$file_data['encrypt_name'] = true;
			$this->load->library('upload', $file_data);
			$this->upload->initialize($file_data);
			if (!$this->upload->do_upload('file_type')) {
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = $this->upload->data();
				$file_type = $data['file_name'];
				}
			}
			$result = $this->front_model->set_property($file_type);
			if(result=="0"){
				$this->session->set_flashdata('success','Record added successfully');
			}else{
				$this->session->set_flashdata('error','Record added unsuccessfully');
			}
			redirect('add_property');
		}
	}
}