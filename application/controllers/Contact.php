<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class contact extends CI_Controller {

	
    public function show()
	{
         $this->load->helper('url');
         $this->load->view('Reef/contact_view');
         if(!empty($_POST)) {
         $name=$_POST['txtName'];
         $email=$_POST['txtEmail'];
         $subject=$_POST['txtSubject'];
         $message=$_POST['txtBody'];
         $data=array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message);
         $this->load->model('Contact_model');
         $res=$this->Contact_model->insert($data);
     }
    }
  }

  ?>