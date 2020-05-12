<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class front_model extends CI_Model{
	
	public function set_enquiry(){
			$data = array(
				'first_name'		=> $this->input->post('first_name'),
				'contact_email'		=> $this->input->post('contact_email'),	
				'contact_phone'		=> $this->input->post('contact_phone'),	
				'message'			=> $this->input->post('message'),
			);
			if($this->input->post('id') == ""){
				$date=array(
					'created_on'=> date('Y-m-d H:i:s'),
				);
			$newuser=array_merge($data,$date);
			$this->db->insert('tbl_enquiry',$data);
			return 0;
			}else{ 		
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_enquiry',$data);
			return 1;
			}
	}
	public function set_contact(){
			$data = array(
				'contact_name'		=> $this->input->post('contact_name'),
				'contact_mobile'	=> $this->input->post('contact_mobile'),
				'contact_email'		=> $this->input->post('contact_email'),
				'message'			=> $this->input->post('message'),
			);
			if($this->input->post('id') == ""){
				$date=array(
					'created_on'=> date('Y-m-d H:i:s'),
				);
			$newuser=array_merge($data,$date);
			$this->db->insert('tbl_contact',$data);
			return 0;
			}else{ 
			
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_contact',$data);
			return 1;
			}
	}
	public function get_single_contact(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get('tbl_contact');
		return $result->row();
	}
	public function get_single_enquiry(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get('tbl_enquiry');
		return $result->row();
	}
}