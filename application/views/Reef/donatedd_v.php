
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="css/style2.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styledonatedd.css"/>
<title>WHAT WE DO</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/navstyles.css"/>
<script src="<?php echo base_url();?>js/navscript.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper">
<div class="header">  
<div class="logo"><a href="<?php echo base_url();?>Reefhome"><img src="<?php echo base_url();?>/public/images/logo.png" width="358" height="139" border="0" /></a></div>
<div class="ico-box">
      <div class="ico-donate"><a href="<?php echo base_url();?>Donate"><img src="<?php echo base_url();?>/public/images/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="<?php echo base_url();?>/public/images/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="<?php echo base_url();?>/public/images/iconfb.png" width="28" height="28" border="0" /></a></div>
      
    </div>
<div class="navigation">
<ul class="nav">
  <li><a href="<?php echo base_url();?>AboutUs">About us</a>  
        <ul>
            <li><a href="<?php echo base_url();?>Team">Our Team</a></li>
        </ul>
  </li>
   
   
   <li><a href="<?php echo base_url();?>WhatWeDo">What we do</a></li>
   <li><a href="#">Initiatives</a>
      <ul>
         <li><a href="<?php echo base_url();?>Initiatives/showcurrent">Current Initiatives</a></li>
         <li><a href="<?php echo base_url();?>Initiatives/showpast">Past Initiatives</a></li>
      </ul>
   </li>
   <li><a href="<?php echo base_url();?>YouCanHelp" class="active">You can help!</a>
      <ul>
         <li><a href="<?php echo base_url();?>Donate" class="active">Donate</a></li>
      </ul>
    
   </li>
   <li><a href="<?php echo base_url();?>Partners">Partners</a></li>
   <li><a href="<?php echo base_url();?>Multimedia/show">Multimedia</a>
      <ul>
         <li><a href="#">Blog</a></li><br />

         <li><a href="#">Gallery</a></li><br />

         <li><a href="#">Video</a></li><br />

      </ul>
   </li>
   <li><a href="<?php echo base_url();?>Contact">Contact us</a></li>
  </ul>
</div>
</div>
<div class="donatetext"><img src="<?php echo base_url();?>/public/images/donatetext1.gif" width="990" height="134" /></div>
<div class="paymenttabs">
<div class="op"><a href="<?php echo base_url();?>Donate"><img src="<?php echo base_url();?>/public/images/onlinepay.gif" width="204" height="54" border="0" /></a></div>
<div class="dd"><img src="<?php echo base_url();?>/public/images/debitpayactive.gif" width="203" height="54" border="0" /></div>
<div class="cp"><a href="<?php echo base_url();?>help/donatecp"><img src="<?php echo base_url();?>/public/images/chqpay.gif" width="204" height="54" border="0" /></a></div>

</div>

<div class="opdesc"><img src="<?php echo base_url();?>/public/images/opdesc.gif" width="705" height="286" /></div>
<div class="dddesc"><img src="<?php echo base_url();?>/public/images/dpdesc.gif" width="705" height="287" /></div>
<div class="cpdesc"><img src="<?php echo base_url();?>/public/images/cpdesc.gif" width="705" height="287" /></div>
</div><!--Wrapper ends-->
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    
    
    });
  </script>



  
  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo base_url();?>js/jquery.easing.js"></script>
  <script src="<?php echo base_url();?>js/jquery.mousewheel.js"></script>

</body>
</html>
