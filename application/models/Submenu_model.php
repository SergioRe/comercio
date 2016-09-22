<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu_model extends CI_Model {

    var $table = 'submenu';
    var $column_order = array('IdSubMenu', 'NomSubMenu', 'UrlSubMenu', 'EstadoSubMenu');
    var $column_search = array('IdSubMenu', 'NomSubMenu', 'UrlSubMenu', 'EstadoSubMenu');
    var $order = array('IdSubMenu' => 'asc'); // default order 

    public function __construct(){
            parent::__construct();
            $this->load->database();
    }

    function obtenerListaAlumnos(){
        $this->load->database();
        $alumnos = $this->db->get($this->table);
        return $alumnos->result();
    }
}
