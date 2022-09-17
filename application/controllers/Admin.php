<?php

class Admin extends CI_Controller {
    public function index(){
        $this->load->view('Admin/dashboard');
    }

    public function AddPost(){
        $this->load->view('Admin/add');
    }
}