<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model','usuarios');
        $this->load->model('banner_model','banner');
        $this->load->model('menu_model','menu');
        $this->load->model('videos_model','videos');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $data['alerta'] = "S";
        $banner = $this->banner->obtenerBannerActivo();
        $data['menu']  = $this->menu->obtenerListaMenu();
        $data['videos']  = $this->videos->mostarVideos();
        $data['banner'] = $banner;
        $data['login'] = 'No';
        if(count($_POST) ==  0){
            $this->load->view('index_view',$data);
        }else{
            $datos = $this->usuarios->login($_POST);
            $cnt = count($datos);
            $resultado = (($cnt>0)?'S':'N');
            if($resultado == 'S'){
                $data['login'] = 'Si';
                $sess_array = array('IdUsu' => $datos[0]['IdUsu'],
                    'NomCompUsu' => $datos[0]['NomCompUsu'],
                    'ApellidosUsu' => $datos[0]['ApellidosUsu'],
                    'TipoUsu' => $datos[0]['TipoUsu']);
                $this->session->set_userdata('logged_in', $sess_array);
                if($datos[0]['TipoUsu'] == 'A'){
                    redirect('/admin/index');
                }else{
                    $data['alerta'] = "S";
                    $session_data = $this->session->userdata('logged_in');
                    $data['IdUsu'] = $session_data['IdUsu'];
                    $data['NomCompUsu'] = $session_data['NomCompUsu'];
                    $data['ApellidosUsu'] = $session_data['ApellidosUsu'];
                    $data['tipousu'] = $session_data['TipoUsu'];
                    $this->load->view('index_view',$data);
                }
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

    public function json(){
        $this->url_elements = explode('/', $_SERVER['PATH_INFO']);
        $case = $this->url_elements[3];
        $data = array();
        switch ($case):
            case 'add':
                if(isset($_POST['SuscribirmeUsu'])){
                    $_POST['SuscribirmeUsu'] = 'S';
                }else{
                    $_POST['SuscribirmeUsu'] = 'N';
                }
                $data['respuesta'] = $this->usuarios->crud($_POST,'add');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
            case 'recuperarpass':
                $existeCorreo = $this->usuarios->existeCorreo($_POST['CorreoUsu']);
                $datos = count($existeCorreo);
                if($datos > 0){
                    
                }else{
                    $data['respuesta'] = 'correoNoExiste';
                    echo json_encode(array('msj'=>$data['respuesta']));
                }
                break;
        endswitch;
    }
}
