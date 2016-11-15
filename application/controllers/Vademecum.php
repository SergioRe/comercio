<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vademecum extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model','usuarios');
        $this->load->model('banner_model','banner');
        $this->load->model('menu_model','menu');
        $this->load->model('videos_model','videos');
        $this->load->model('categoria_model','categoria');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        date_default_timezone_set('America/Lima');
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $IdMenu = '0000000004';
        $data['alerta'] = "S";
        $banner = $this->banner->obtenerBannerActivo();
        $data['menu']  = $this->menu->obtenerListaMenu();
        $data['videos']  = $this->videos->mostarVideos();
        $data['videostodos'] = $this->categoria->listaCategoriaPorMenu($IdMenu,true);
        $numero = count($data['videostodos']);
        $numeroFinal = '';
        if ($numero%2==0){
            $numeroFinal = $numero/2;
        }else{
            $numeroFinal = ($numero+1)/2;
        }
        $particionVideos = array_chunk($data['videostodos'], $numeroFinal);
        $data['videostodosuno'] = $particionVideos[0];
        $data['videostodosdos'] = $particionVideos[1];
        $data['videospalabra'] = $this->categoria->listaCategoriaPorMenu($IdMenu);
        $data['banner'] = $banner;
        $data['login'] = 'No';
        $data['videospalabrafiltro'] = 'SoloOcho';
        if(count($_POST) ==  0){
            $this->load->view('vademecum/index_view',$data);
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
                    $this->load->view('vademecum/index_view',$data);
                }
            }else{
                $data['alerta'] = "N";
                $this->load->view('vademecum/index_view',$data);
            }
        }
    }

    public function listar(){
        $this->load->helper('url');
        $data = array();
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['IdUsu'] = $session_data['IdUsu'];
            $data['NomCompUsu'] = $session_data['NomCompUsu'];
            $data['ApellidosUsu'] = $session_data['ApellidosUsu'];
            $data['tipousu'] = $session_data['TipoUsu'];
            $this->load->view('vademecum/listar_view',$data);
        }else{
            redirect('/inicio/index');
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
        $domain = explode('/', $_SERVER['HTTP_REFERER']);
        $urlContorlador = $domain[0].'//'.$domain[2].'/'.$domain[3].'/assets/imagenes/';
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
            case 'list':
                $data = array();
                $IdMenu = '0000000004';
                $list = $this->categoria->get_datatables($IdMenu);
                $no = $_POST['start'];
                foreach ($list as $categoria) {
                    $colordestacado = (($categoria->DestacadoCategoria == 'S')?'success':'inverse');
                    $no++;
                    $row = array();
                    $row[] = $categoria->IdCategoria;
                    $row[] = $categoria->NomMenu;
                    $row[] = '<p class="aliniado">'.$categoria->TituloVideo.'</p>';
                    $row[] = '<img style="width:100%;height:50px;" src="'.$urlContorlador.$categoria->ImagenVideo.'">';
                    $row[] = '<button type="button" class="btn btn-'.$colordestacado.' btn-sm" onclick="destacado_salud('."'".$categoria->IdCategoria."'".','."'".$categoria->IdVideo."'".','."'".$categoria->DestacadoCategoria."'".');">'.(($categoria->DestacadoCategoria == 'S')?'Si':'No').'</button>';
                    $data[] = $row;
                }
                $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->categoria->count_all($IdMenu),
                            "recordsFiltered" => $this->categoria->count_filtered($IdMenu),
                            "data" => $data,
                        );
                echo json_encode($output);
                break;
            case 'destacado':
                $data = array();
                $IdMenu = '0000000004';
                $datos = $this->categoria->listaCategoriaPorMenu($IdMenu);
                $igualClavePk = '';
                foreach ($datos as $valor):
                    if($valor['IdCategoria'] == $_POST['IdCategoria']){
                        $igualClavePk = 'Si';
                    }
                endforeach;
                $_POST['DestacadoCategoria'] = (($_POST['DestacadoCategoria'] == 'S')?'N':'S');
                if(count($datos) < 8){
                    $data['respuesta'] = $this->categoria->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else if($igualClavePk == 'Si'){
                    $data['respuesta'] = $this->categoria->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else{
                    echo json_encode(array('msj'=>'mostrarActivo'));
                }
                break;
        endswitch;
    }
}
