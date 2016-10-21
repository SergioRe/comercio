<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model','usuarios');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $data['alerta'] = "S";
        if(count($_POST) ==  0){
            $this->load->view('index_view',$data);
        }else{
            $datos = $this->usuarios->login($_POST);
            $cnt = count($datos);
            $resultado = (($cnt>0)?'S':'N');
            if($resultado == 'S'){
                $sess_array = array('IdUsu' => $datos[0]['IdUsu'],
                    'NomCompUsu' => $datos[0]['NomCompUsu'],
                    'ApellidosUsu' => $datos[0]['ApellidosUsu'],
                    'TipoUsu' => $datos[0]['TipoUsu']);
                $this->session->set_userdata('logged_in', $sess_array);
                redirect('/admin/index');
            }else{
                $data['alerta'] = "N";
                $this->load->view('index_view',$data);
            }
        }
    }

    public function cerrarsession(){
        $this->load->helper('url');
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('/inicio/index');
    }
}
