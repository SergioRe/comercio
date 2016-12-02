<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    var $table = 'categoria';
    var $column_order = array('IdCategoria', 'IdMenu', 'DestacadoCategoria');
    var $column_search = array('IdCategoria', 'IdMenu', 'DestacadoCategoria');
    var $order = array('IdCategoria' => 'desc'); // default order 

    public function __construct(){
            parent::__construct();
            $this->load->database();
    }

    public function get_datatables($IdMenu){
        $this->_get_datatables_query($IdMenu);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    private function _get_datatables_query($IdMenu){
	$this->db->select('categoria.IdCategoria, categoria.DestacadoCategoria, menu.NomMenu,videos.TituloVideo,videos.ImagenVideo,videos.IdVideo,videos.flag');
        $this->db->from('categoria');
        $this->db->join('menu','menu.IdMenu = categoria.IdMenu');
        $this->db->join('videos','videos.IdVideo = categoria.IdVideo');
        $this->db->where('categoria.IdMenu',$IdMenu);
        $i = 0;
        foreach ($this->column_search as $item){
            if($_POST['search']['value']){
                if($i===0){
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }else{
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
        if(isset($_POST['order'])){
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else if(isset($this->order)){
                $order = $this->order;
                $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function count_filtered($IdMenu){
        $this->_get_datatables_query($IdMenu);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($IdMenu){
        $this->db->from($this->table);
        $this->db->where('categoria.IdMenu',$IdMenu);
        return $this->db->count_all_results();
    }

    public function listaCategoriaPorMenu($IdMenu,$flag=false){
        $this->db->select('categoria.IdCategoria, categoria.DestacadoCategoria, menu.NomMenu,videos.TituloVideo,videos.ImagenVideo,videos.IdVideo,videos.PalabraVideo,videos.DescriocionVideo,videos.HoraVideo,videos.flag');
        $this->db->from('categoria');
        $this->db->join('menu','menu.IdMenu = categoria.IdMenu');
        $this->db->join('videos','videos.IdVideo = categoria.IdVideo');
        $this->db->where('categoria.IdMenu',$IdMenu);
        if($flag == true){
            $this->db->order_by("videos.HoraVideo", "asc");
        }else{
            $this->db->where('categoria.DestacadoCategoria','S');
        }
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function crud($data,$crud){
        try {
            switch ($crud) {
                case 'update':
                    $this->db->where('IdCategoria', $data['IdCategoria']);
                    unset($data['IdCategoria']);
                    $dataCategoria = array('DestacadoCategoria' => $data['DestacadoCategoria']);
                    $this->db->update($this->table , $dataCategoria);
                    break;
            }
            return 'Si';
        }catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
    }
}
