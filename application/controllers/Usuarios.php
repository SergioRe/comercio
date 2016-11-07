<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model','usuarios');
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
            $this->load->view('usuarios/index_view',$data);
        }else{
            redirect('/inicio/index');
        }
    }

    public function json(){
        $this->url_elements = explode('/', $_SERVER['PATH_INFO']);
        $case = $this->url_elements[3];
        switch ($case):
            case 'list':
                $data = array();
                $list = $this->usuarios->get_datatables();
                $no = $_POST['start'];
                foreach ($list as $usuarios) {
                            $no++;
                            $row = array();
                            $row[] = $usuarios->IdUsu;
                            $row[] = $usuarios->NomCompUsu;
                            $row[] = $usuarios->ApellidosUsu;
                            $row[] = $usuarios->DniUsu;
                            $row[] = $usuarios->CorreoUsu;
                            $row[] = "<p class='text-center'>".(($usuarios->TipoUsu == 'A')?'Administrador':'Prueba')."</p>";
                            $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Editar" onclick="edit_usuario('."'".$usuarios->IdUsu."'".')"><i class="glyphicon glyphicon-pencil"></i></a>';
                            $data[] = $row;
                }
                $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->usuarios->count_all(),
                            "recordsFiltered" => $this->usuarios->count_filtered(),
                            "data" => $data,
                        );
                echo json_encode($output);
                break;
            case 'update':
                $data = array();
                $data['respuesta'] = $this->usuarios->crud($_POST,'update');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
            case 'add':
                $data = array();
                $data['respuesta'] = $this->usuarios->crud($_POST,'add');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;    
        endswitch;
    }

    function editar(){
        $this->load->helper('url');
        $data = array();
        $data['usuarios'] = $this->usuarios->get_by_id($_POST['IdUsu']);
        $this->load->view('usuarios/editar_view',$data);
    }

    function agregar(){
        $this->load->helper('url');
        $data = array();
        $this->load->view('usuarios/agregar_view',$data);
    }
}