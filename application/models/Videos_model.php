<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model {

    var $table = 'videos';
    var $column_order = array('IdVideo');
    var $column_search = array('IdVideo', 'TituloVideo', 'ImagenVideo','NomMenu');
    var $order = array('IdVideo' => 'desc'); // default order 

    public function __construct(){
            parent::__construct();
            $this->load->database();
    }

    function mostarVideos(){
        $this->db->from($this->table);
        $this->db->join('menu','menu.IdMenu = videos.IdMenu');
        $this->db->where('MostrarVideo', 'S');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    private function _get_datatables_query(){
        $this->db->from('videos');
        $this->db->join('menu','menu.IdMenu = videos.IdMenu');
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

    public function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($IdVideo){
        $this->db->from($this->table);
        $this->db->join('menu','menu.IdMenu = videos.IdMenu');
        $this->db->where('IdVideo',$IdVideo);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function listarVideosDestacados(){
        $this->db->from($this->table);
        $this->db->join('menu','menu.IdMenu = videos.IdMenu');
        $this->db->where('destacado','S');
        $this->db->order_by("HoraVideo", "desc");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
    
    public function listarVideosTodos(){
        $this->db->from($this->table);
        $this->db->join('menu','menu.IdMenu = videos.IdMenu');
        $this->db->order_by("HoraVideo", "desc");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function validarMostrarVideos(){
        $this->db->from($this->table);
        $this->db->where('MostrarVideo','S');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function crud($data,$crud){
        try {
            switch ($crud) {
                case 'update':
                    $this->db->where('IdVideo', $data['IdVideo']);
                    unset($data['IdVideo']);
                    $this->db->update($this->table , $data);
                    break;
                case 'add':
                    $this->db->insert($this->table , $data);
                    break;
            }
            return 'Si';
        }catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
    }
}
