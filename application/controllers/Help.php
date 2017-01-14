<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Help extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url');
          /*$this->load->model('help_model'); 
        
          $res=$this->help_model->select();
        
        $data=array("img"=>$res);*/
    $this->load->view('Reef/help_view');

   
	}
  public function donate()
  {
    $this->load->helper('url');
    $this->load->view('Reef/donate_v');
  }
public function donatedd()
  {
    $this->load->helper('url');
    $this->load->view('Reef/donatedd_v');
  }
public function donatecp()
  {
    $this->load->helper('url');
    $this->load->view('Reef/donatecp_v');
  }
}
?>