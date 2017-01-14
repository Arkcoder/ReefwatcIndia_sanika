<?php
class Home_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function select($a) {
             $result=$this->db->get($a)->result_array();
            return $result;
            //$result1=$this->db->get('initiatives')->result_array();
            //return $result1;
        }
    }
    
?>