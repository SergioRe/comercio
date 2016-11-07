<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Banner extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('banner_model','banner');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['IdUsu'] = $session_data['IdUsu'];
            $data['NomCompUsu'] = $session_data['NomCompUsu'];
            $data['ApellidosUsu'] = $session_data['ApellidosUsu'];
            $data['tipousu'] = $session_data['TipoUsu'];
            $this->load->view('banner/index_view',$data);
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
                $list = $this->banner->get_datatables();
                $no = $_POST['start'];
                foreach ($list as $banner) {
                            $no++;
                            $row = array();
                            $row[] = "<p class='text-center'>".$banner->IdBanner."</p>";
                            $row[] = $banner->NomBanner;
                            $row[] = '<img style="width:100%;height:50px;" src="'.$urlContorlador.$banner->NomBanner.'">';
                            $row[] = "<p class='text-center'>".(($banner->EstadoBanner == 'A')?'Activo':'Inactivo')."</p>";
                            $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Editar" onclick="edit_banner('."'".$banner->IdBanner."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
                            $data[] = $row;
                }
                $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->banner->count_all(),
                            "recordsFiltered" => $this->banner->count_filtered(),
                            "data" => $data,
                        );
                echo json_encode($output);
                break;
            case 'update':
                $data = array();
                $IdBanner = $this->input->post('IdBanner');
                $EstadoBanner = $this->input->post('EstadoBanner');
                if(!empty($_FILES)){
                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                        if(move_uploaded_file($_FILES['archivo']['tmp_name'],'assets/imagenes/'.$_FILES['archivo']['name'])){
                            $foto=$_FILES['archivo']['name'];
                            $data['NomBanner'] = $foto;
                        }
                    }
                }
                $data['IdBanner'] = $IdBanner;
                $data['EstadoBanner'] = $EstadoBanner;
                if(empty($data['EstadoBanner'])){
                    $data['EstadoBanner'] = 'I';
                }
                $bannerActivo = $this->banner->obtenerBannerActivo();
                $cantidad = count($bannerActivo);
                if($cantidad == 0){
                    $data['respuesta'] = $this->banner->crud($data,'update');
                    echo json_encode(array('msj'=>$data['respuesta']));
                }else{
                    if($bannerActivo[0]['IdBanner'] == $IdBanner){
                        $data['respuesta'] = $this->banner->crud($data,'update');
                        echo json_encode(array('msj'=>$data['respuesta']));
                    }else if($bannerActivo[0]['IdBanner'] !== $IdBanner && $data['EstadoBanner'] == 'A'){
                        echo json_encode(array('msj'=>'bannerActivo'));
                    }else{
                        $data['respuesta'] = $this->banner->crud($data,'update');
                        echo json_encode(array('msj'=>$data['respuesta']));
                    }
                }
                break;
            case 'add':
                $data = array();
                if(!empty($_FILES)){
                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                        if(move_uploaded_file($_FILES['archivo']['tmp_name'],'assets/imagenes/'.$_FILES['archivo']['name'])){
                            $foto=$_FILES['archivo']['name'];
                            $data['NomBanner'] = $foto;
                        }
                    }
                }
                //$data['EstadoBanner'] = $this->input->post('EstadoBanner');
                //if(empty($data['EstadoBanner'])){
                $data['EstadoBanner'] = 'I';
                //}
                $data['respuesta'] = $this->banner->crud($data,'add');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
        endswitch;
    }

    function editar(){
        $this->load->helper('url');
        $data = array();
        $data['banner'] = $this->banner->get_by_id($_POST['IdBanner']);
        $this->load->view('banner/editar_view',$data);
    }

    function agregar(){
        $this->load->helper('url');
        $data = array();
        $this->load->view('banner/agregar_view',$data);
    }
}
