<?php
// logics for database hadle
class Model_user extends CI_Model {
    function insertUserdata(){
      $data = array (
        
            'fname' => $this->input->post('fname',TRUE),
            'lname' => $this->input->post('lname',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE))
      );
      return $this->db->insert('users',$data);
      // print_r($data);
      // die();
      // return false ;
    }

    function LoginUser(){
      // database email password check
      // if exist --->session create
      // else ----> error
      $email =  $this->input->post('email');//post from name of the field
      $password = sha1($this->input->post('password'));

      $this->db->where('email',$email);
      $this->db->where('password',$password);
      $respond = $this->db->get('users');
      if($respond->num_rows()==1){
         return $respond->row(0);
      }else{
         return false ;
      }
      
    }
}
 
