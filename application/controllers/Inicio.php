<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('submenu_model','submenu');
    }

    public function index(){
        $this->load->helper('url');
        $this->load->view('index_view');
    }
}
