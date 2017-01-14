<?php
class Aboutus_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function select() {
             $result=$this->db->get('aboutus')->result_array();
            return $result;
        }
        public function team()
        {
        	$res=$this->db->get('team')->result_array();
            return $res;
        }
    }
    
?>