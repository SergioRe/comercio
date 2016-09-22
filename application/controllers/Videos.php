<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('submenu_model','submenu');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $this->load->view('videos/index_view',$data);
    }
}
