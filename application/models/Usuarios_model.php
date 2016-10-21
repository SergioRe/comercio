<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    var $table = 'usuarios';
    var $column_order = array('');
    var $column_search = array('');
    var $order = array('IdUsu' => 'desc');
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function login($datos){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('CorreoUsu', $datos['inputEmail']);
        $this->db->where('PassUsu', $datos['inputPassword']);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
}
