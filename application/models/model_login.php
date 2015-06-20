<?php

class Model_login extends CI_Model{


public function enter_database(){
  $register_email=$this->input->post('register_email');
  $register_name=$this->input->post('register_name');
  $register_password=$this->input->post('register_password');
  
  $data=array(
     'email'=>$register_email,
    'name'=>$register_name,
    'password'=>$register_password,
    );
  $query=$this->db->insert('users',$data);
  if($query){
    return true;
  }else{
    return false;
  }
}


public function login(){

  $email= $this->input->post('login_email');
  $password=$this->input->post('login_password');
  $this->db->select('email','name'); 
  $this->db->from('users');
  $this->db->where('email',$email);
  $this->db->where('password',md5($password));
  $query = $this->db->get();
  return $query->result();
}


}
