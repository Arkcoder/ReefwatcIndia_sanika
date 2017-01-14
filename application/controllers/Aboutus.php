<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Aboutus extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url');
          $this->load->model('Aboutus_model'); 
         
          $res=$this->Aboutus_model->select();
        
        $data=array("img"=>$res);
            
        
    $this->load->view('Reef/aboutus_view',$data);

	}
  public function team()
  {
    $this->load->helper('url');
    $this->load->model('Aboutus_model'); 
         
          $result=$this->Aboutus_model->team();
        
        $pic=array("team"=>$result);
     $this->load->view('Reef/team_v',$pic);
  }
}
?>