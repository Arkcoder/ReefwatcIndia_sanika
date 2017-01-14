<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Whatvdo extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url');
          /*$this->load->model('_model'); 
         
          $res=$this->Aboutus_model->select();
        
        $data=array("img"=>$res);*/
            
        
    $this->load->view('Reef/Whatvdo_view');

          

        
   

		
	}
}
?>