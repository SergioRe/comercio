<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('videos_model','videos');
        $this->load->model('menu_model','menu');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $data['fecha'] = $fecha;
        $this->load->view('videos/index_view',$data);
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
            $this->load->view('videos/listar_view',$data);
        }else{
            redirect('/inicio/index');
        }
    }

    public function json(){
        $this->url_elements = explode('/', $_SERVER['PATH_INFO']);
        $case = $this->url_elements[3];
        $domain = explode('/', $_SERVER['HTTP_REFERER']);
        $urlContorlador = $domain[0].'//'.$domain[2].'/'.$domain[3].'/assets/imagenes/';
        switch ($case):
            case 'list':
                $data = array();
                $list = $this->videos->get_datatables();
                $no = $_POST['start'];
                foreach ($list as $videos) {
                    $colorMostrarVideo = (($videos->MostrarVideo == 'S')?'success':'inverse');
                    $colordestacado = (($videos->destacado == 'S')?'success':'inverse');
                    $no++;
                    $row = array();
                    $row[] = $videos->IdVideo;
                    $row[] = $videos->NomMenu;
                    $row[] = '<p class="aliniado">'.$videos->TituloVideo.'</p>';
                    $row[] = '<button type="button" class="btn btn-'.$colorMostrarVideo.' btn-sm" onclick="mostrar_video('."'".$videos->IdVideo."'".','."'".$videos->MostrarVideo."'".');">'.(($videos->MostrarVideo == 'S')?'Si':'No').'</button>';
                    $row[] = '<img style="width:100%;height:50px;" src="'.$urlContorlador.$videos->ImagenVideo.'">';
                    $row[] = '<button type="button" class="btn btn-'.$colordestacado.' btn-sm" onclick="destacado_video('."'".$videos->IdVideo."'".','."'".$videos->destacado."'".');">'.(($videos->destacado == 'S')?'Si':'No').'</button>';
                    $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Editar" onclick="edit_video('."'".$videos->IdVideo."'".')"><i class="glyphicon glyphicon-pencil"></i></a>';
                    $data[] = $row;
                }
                $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->videos->count_all(),
                            "recordsFiltered" => $this->videos->count_filtered(),
                            "data" => $data,
                        );
                echo json_encode($output);
                break;
            case 'update':
                $data = array();
                $data['IdVideo'] = $this->input->post('IdVideo');
                $data['IdMenu'] = $this->input->post('IdMenu');
                $data['TituloVideo'] = $this->input->post('TituloVideo');
                $data['destacado'] = $this->input->post('destacado');
                $data['DescriocionVideo'] = $this->input->post('DescriocionVideo');
                if(!empty($_FILES)){
                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                        if(move_uploaded_file($_FILES['archivo']['tmp_name'],'assets/imagenes/'.$_FILES['archivo']['name'])){
                            $foto=$_FILES['archivo']['name'];
                            $data['ImagenVideo'] = $foto;
                        }
                    }
                }
                date_default_timezone_set('America/Lima');
                $fecha = date('Y-m-d H:i:s');
                $data['HoraVideo'] = $fecha;
                $data['respuesta'] = $this->videos->crud($data,'update');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
            case 'add':
                $data = array();
                $data['IdMenu'] = $this->input->post('IdMenu');
                $data['TituloVideo'] = $this->input->post('TituloVideo');
                $data['destacado'] = $this->input->post('destacado');
                $data['DescriocionVideo'] = $this->input->post('DescriocionVideo');
                $data['MostrarVideo'] = 'N';
                if(!empty($_FILES)){
                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                        if(move_uploaded_file($_FILES['archivo']['tmp_name'],'assets/imagenes/'.$_FILES['archivo']['name'])){
                            $foto=$_FILES['archivo']['name'];
                            $data['ImagenVideo'] = $foto;
                        }
                    }
                }
                date_default_timezone_set('America/Lima');
                $fecha = date('Y-m-d H:i:s') ;
                $data['HoraVideo'] = $fecha;
                $data['respuesta'] = $this->videos->crud($data,'add');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
            case 'validar':
                $data = array();
                $datos = $this->videos->validarMostrarVideos();
                $igualClavePk = '';
                foreach ($datos as $valor):
                    if($valor['IdVideo'] == $_POST['IdVideo']){
                        $igualClavePk = 'Si';
                    }
                endforeach;
                $_POST['MostrarVideo'] = (($_POST['MostrarVideo'] == 'S')?'N':'S');
                if(count($datos) < 5){
                    $data['respuesta'] = $this->videos->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else if($igualClavePk == 'Si'){
                    $data['respuesta'] = $this->videos->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else{
                    echo json_encode(array('msj'=>'mostrarActivo'));
                }
            break;
            case 'destacado':
                $data = array();
                $datos = $this->videos->listarVideosDestacados();
                $igualClavePk = '';
                foreach ($datos as $valor):
                    if($valor['IdVideo'] == $_POST['IdVideo']){
                        $igualClavePk = 'Si';
                    }
                endforeach;
                $_POST['destacado'] = (($_POST['destacado'] == 'S')?'N':'S');
                if(count($datos) < 16){
                    $data['respuesta'] = $this->videos->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else if($igualClavePk == 'Si'){
                    $data['respuesta'] = $this->videos->crud($_POST,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else{
                    echo json_encode(array('msj'=>'mostrarActivo'));
                }
                break;
        endswitch;
    }

    function editar(){
        $this->load->helper('url');
        $data = array();
        $data['videos'] = $this->videos->get_by_id($_POST['IdVideo']);
        $data['menu'] = $this->menu->obtenerListaMenu();
        $this->load->view('videos/editar_view',$data);
    }

    function agregar(){
        $this->load->helper('url');
        $data = array();
        $data['menu'] = $this->menu->obtenerListaMenu();
        $this->load->view('videos/agregar_view',$data);
    }
}