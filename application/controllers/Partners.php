<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Partners extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url'); 
        $this->load->model('Partners_model');
        $res=$this->Partners_model->select();
        
        $data=array("img"=>$res);
            
        
		$this->load->view('Reef/partner_view',$data);
	}
}
?>