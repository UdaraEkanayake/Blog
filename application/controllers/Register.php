<?php

class   Register extends CI_Controller {
    public function RegisterUser(){
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('register');
        }
        else
        {
               $this->load->model('Model_user');
               $response = $this->Model_user->insertUserdata();
               if ($response){
               $this->session->set_flashdata('msg','Registered successfully please login!!!');
               redirect('Home/register');
               }
               else{
                $this->session->set_flashdata('msg','Something went wrong!!!');
                redirect('Home/register');
               }
        }

    }

}