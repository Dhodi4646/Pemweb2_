<?php

class Dashboard extends CI_controller{
    public function index(){

        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
}
}



?>