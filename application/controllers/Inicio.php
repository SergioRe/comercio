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
        date_default_timezone_set('America/Lima');
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $data['alerta'] = "S";
        $banner = $this->banner->obtenerBannerActivo();
        $data['menu']  = $this->menu->obtenerListaMenu();
        $data['videos']  = $this->videos->mostarVideos();
        $data['destacado'] = $this->videos->listarVideosDestacados();
        $data['videostodos'] = $this->videos->listarVideosTodos();
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
                    $data['respuesta'] = $this->envioCorreo($_POST['CorreoUsu']);
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else{
                    $data['respuesta'] = 'correoNoExiste';
                    echo json_encode(array('msj'=>$data['respuesta']));
                }
                break;
        endswitch;
    }

    public function envioCorreo($correo){
        $name = 'renato';
        $email_address = $correo;
        $phone = '1234';
        $message = 'Prueba Prueba Prueba Prueba';
        $email_body= "<b>El siguiente cliente le a enviado un mensaje:</b><br/>";
        $email_body.= "<b>El usuario:</b> $name<br/>";
        $email_body.= "<b>Correo Electrónico: </b>$email_address<br/>";
        $email_body.= "<b>Numero Teléfono: </b>$phone<br/>";
        $email_body.= "<b>Ha recibido el siguiente mensaje:<b/><br/>";
        $email_body.= "$message";
        $titulo = "A recibido un nuevo correo de: $email_address";
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: Mundo kids Play $email_address\r\n";
        $to = "renato.mpisconte@gmail.com";
        $bool = mail($to,$titulo,$email_body,$headers);
        return 'Si';
    }
}
