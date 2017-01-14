<?php
class help_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function select() {
             $result=$this->db->get('help')->result_array();
            return $result;
        }
    }
    
?>