<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_model extends CI_Model{ 

public  function active(){
		$data=array('status'=>'1');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update($this->uri->segment(2),$data);
		return true;
	}
	public function inactive(){
		$data=array('status'=>'0');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update($this->uri->segment(2),$data);
		return true;
	}
	public  function delete(){
		$data=array('is_deleted'=>'1');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update($this->uri->segment(2),$data);
		return true;
	}
	public  function check_login(){
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',md5($this->input->post('password')));
		$this->db->where('is_deleted','0');
		$result = $this->db->get('tbl_login');
		$result = $result->row();
		if(!empty($result)){
			$data= array(
			'user_id' =>$result->id,
			);
			$this->session->set_userdata($data);
				return 1;
			}else{
				return 0;
			}	
	}
	public function check_email(){
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('is_deleted','0');
		$result = $this->db->get('tbl_login');
		$result = $result->row();
		if(!empty($result)){
			
		$passwordreset = "";
        $passwordreset  = rand(999999999,9999999999);
		$passwordreset = md5($passwordreset);
        $newpass['reset_password'] =  $passwordreset;
        $this->db->where('id', $result->id);
        $this->db->update('tbl_login', $newpass); 
			$message = 'Dear '.$this->input->post('email')."<br>";
			$message = $this->input->post('passwordreset').". Below are the link for reset password more details.<br>";
			echo $message .= '<a href="'.base_url().'reset_password/'. $passwordreset.'">Click here</a>';
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->from('no-reply@b2b.com'); 
			$this->email->to($this->input->post('email')); 
			$this->email->subject($this->input->post('title'));
			$this->email->message($message);
			if($this->email->send()){
					echo 'Email sent.';
			}else{
				return false;
			}
		}
	}
	public function get_reset_token(){
		$this->db->where('reset_password',$this->uri->segment(2));
		$result = $this->db->get('tbl_login');
		return $result->row();
	}
	public function rest_password(){
		$this->db->where('reset_password',$this->input->post('token'));
		$result = $this->db->get('tbl_login');
		$result = $result->row();
		if(!empty($result)){
			$data = array(
				'password' => md5($this->input->post('new_pass')),
				'reset_password' => ''				
			);
			$this->db->where('id',$result->id);
			$this->db->update('tbl_login',$data);
			return true;
		}else{
			return false;
		}
	}
	public function set_profile(){
		$data = array(
		'first_name' 	=> $this->input->post('first_name'),
		'last_name'		=> $this->input->post('last_name'),
		'company_name'	=> $this->input->post('company_name'),
		'mobile_no'		=> $this->input->post('mobile_no'),
		'address'		=> $this->input->post('address'),
		'email'			=> $this->input->post('email'),	
		);
		if($this->session->userdata('user_id') == ''){
			$data =array(
				'created_on'=> date('Y-m-d H:i:s'),
			);
			$newprofile	=	array_merge ($data,$date); 
			$this->db->insert('tbl_login',$data);
		return 0;
		}else{
			$this->db->where('id',$this->session->userdata('user_id'));
			$this->db->update('tbl_login',$data);
		return 1;
		}
	}
	public  function set_password(){
		$data = array(
			'password' => md5($this->input->post('new_pass')),
		);
		$this->db->where('id',$this->session->userdata('user_id'));
		$this->db->update('tbl_login',$data);
		return 1;	
	}
	public function get_old_password(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->session->userdata('user_id'));
		$this->db->where('password',md5($this->input->post('old_password')));
		$result= $this->db->get('tbl_login');
		echo $result->num_rows();
	}

	public function get_profile(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->session->userdata('user_id'));
		$result= $this->db->get('tbl_login');
		return $result->row();
	}	
	
	/*public function get_all_village(){
		$this->db->where('is_deleted','0');
		$this->db->order_by('village','ASC');
		$result =$this->db->get('tbl_village');
		return $result->result();
	}*/ 
	public function get_single_contact(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get('tbl_contact');
		return $result->row();
	}
	public function get_all_contact(){
		$this->db->where('is_deleted','0');
		$this->db->order_by('contact_name','ASC');
		$result=$this->db->get('tbl_contact');
		return $result->result();
	}
	public function get_single_enquiry(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get('tbl_enquiry');
		return $result->row();
	}
	public function get_all_enquiry(){
		$this->db->where('is_deleted','0');
		$this->db->order_by('first_name','ASC');
		$result=$this->db->get('tbl_enquiry');
		return $result->result();
	}
	public function get_single_registration(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get('tbl_registration');
		return $result->row();
	}
	public function get_all_registration(){
		$this->db->where('is_deleted','0');
		$this->db->order_by('first_name','ASC');
		$result=$this->db->get('tbl_registration');
		return $result->result();
	}
	public function get_single_property(){
		$this->db->where('is_deleted','0');
		$this->db->where('id',$this->uri->segment(2));
		$result = $this->db->get(' tbl_add_property');
		return $result->row();
	}
	public function get_all_property(){
		$this->db->where('is_deleted','0');
		$this->db->order_by('state','ASC');
		$result=$this->db->get(' tbl_add_property');
		return $result->result();
	}
	public function get_total_enquiry_count(){
		$this->db->where('is_deleted','0');
		$result = $this->db->get('tbl_enquiry');
		return $result->num_rows();
	}
	public function get_total_contact_count(){
		$this->db->where('is_deleted','0');
		$result = $this->db->get('tbl_contact');
		return $result->num_rows();
	}
	public function get_total_registration_count(){
		$this->db->where('is_deleted','0');
		$result = $this->db->get('tbl_registration');
		return $result->num_rows();
	}
}