<?php
class Partners_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function select() {
             $result=$this->db->get('partners')->result_array();
            return $result;
        }
    }
    
?>