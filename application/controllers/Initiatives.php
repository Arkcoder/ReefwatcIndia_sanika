<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Initiatives extends CI_Controller {

	
    public function showcurrent()
	{
         $this->load->helper('url');
         $this->load->view('Reef/currentini_view');
  }
  public function showpast()
  {
         $this->load->helper('url');
         $this->load->view('Reef/pastini_v');

          
}
        
   

		
	
}
?>