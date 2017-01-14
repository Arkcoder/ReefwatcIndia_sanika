<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reefhome extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url');
          $this->load->model('Home_model'); 
          $whatwedo="home_slider";
          $initiatives="initiatives";
		//$this->load->view('Reef/home_view');
        // $this->load->view('Reef/home_v');
          $res=$this->Home_model->select($whatwedo);
           $res1=$this->Home_model->select($initiatives);
          $data=array("im"=>$res,"init"=>$res1);
		  $this->load->view('Reef/h_v',$data);

          

        
   

		
	}
}
?>