<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Menu extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model','usuarios');
        $this->load->model('menu_model','menu');
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
            $this->load->view('menu/index_view',$data);
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
                $list = $this->menu->get_datatables();
                $no = $_POST['start'];
                foreach ($list as $menu) {
                            $no++;
                            $row = array();
                            $row[] = "<p class='text-center'>".$menu->IdMenu."</p>";
                            $row[] = $menu->NomMenu;
                            $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Editar" onclick="edit_menu('."'".$menu->IdMenu."'".')"><i class="glyphicon glyphicon-pencil"></i> Editar</a>';
                            $data[] = $row;
                }
                $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->menu->count_all(),
                            "recordsFiltered" => $this->menu->count_filtered(),
                            "data" => $data,
                        );
                echo json_encode($output);
                break;
            case 'update':
                $data = array();
                $data['respuesta'] = $this->menu->crud($_POST,'update');
                echo json_encode(array('msj'=>$data['respuesta']));
                break;
        endswitch;
    }
    
    function editar(){
        $this->load->helper('url');
        $data = array();
        $data['menu'] = $this->menu->get_by_id($_POST['IdMenu']);
        $this->load->view('menu/editar_view',$data);
    }
}
