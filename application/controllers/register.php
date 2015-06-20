<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

public function register_me(){
  	$this->load->library('form_validation');
  	$this->form_validation->set_rules('register_email','register email','required|xss_clean|trim');  
  	//xss clean to prevent cross-site scripting
  	$this->form_validation->set_rules('register_password','register_password','required |md5');
  	$this->form_validation->set_rules('register_name','register_password','required |xss_clean');

  	//if validation successful
  	if($this->form_validation->run()){
      $user_data=array(
        'register_name'=>$this->input->post('register_name'),
        'is_register'=>1
        );
      $this->put_data();
      $this->session->set_userdata($user_data);
      if($this->session->userdata('is_register')==1){ 
  	   $this->load->helper('url');
  	   redirect('http://localhost/CheckIn/');


  	}else{
  		$this->load->helper('url');
        $this->load->view('view_restricted');
  	}
  	}else{
      $this->load->helper('url');
     
      
  	}
  }

  public function put_data(){
  $this->load->model('model_login');
  $this->model_login->enter_database();
  }



 public function login(){
   $this->load->model('model_login');
   $result['email']=$this->model_login->login();
   $bool=$this->session->set_userdata($result);
   $this->load->helper('url');
  redirect('http://localhost/CheckIn/');
} 

}