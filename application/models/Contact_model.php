<?php
class Contact_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function insert($data) {
            $res=$this->db->insert('contact', $data);
            return $res;
        }
    }
    
?>