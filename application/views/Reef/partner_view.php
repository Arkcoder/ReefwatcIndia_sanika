<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PARTNERS</title>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" type="text/css" href="css/style8.css"/>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
<link rel="stylesheet" type="text/css"  href = "<?php echo base_url(); ?>css/stylepartners.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/navstyles.css">
<script src = "<?php echo base_url(); 
         ?>js/navscript.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <div class="logo"><a href="<?php echo base_url();?>Reefhome"><img src="<?php echo base_url();?>/public/images/homelogo.png" width="358" height="139" border="0" /></a></div>
    <div class="ico-box">
      <div class="ico-donate"><a href="<?php echo base_url();?>Donate"><img src="<?php echo base_url();?>/public/images/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="<?php echo base_url();?>/public/images/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="http://localhost/Reefwatch/public/images/iconfb.png" width="28" height="28" border="0" /></a></div>
      
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
        <li><a href="<?php echo base_url();?>YouCanHelp">You can help!</a>
   		<ul>
         <li><a href="<?php echo base_url();?>Donate">Donate</a></li>
     	</ul>  	
   </li>
        <li><a href="<?php echo base_url();?>Partners" class="active">Partners</a></li>
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
  <div class="mainbox">

    <div class="partners1">We believe in working in synergy with various organizations to most effectively protect the ocean. Harnessing the individual strengths and expertise of our partners, we hope together to create a passionate, ocean loving community.<br />
      <span style="color:#999">If you believe that your organization could use our support or if your expertise might assist ours, please </span><a href="contact.aspx">contact us.</a></div>
  </div>
  <div class="mainbox1">
      <?php foreach($img as $val): ?>
    <div class="img2">
      <div class="img1partner"><a href="<?php echo $val['domain']; ?>" target="_blank"><img src="<?php echo base_url() . IMG_URL . "/" . $val['img_url']; ?>" width="200" height="165"></a></div>
      <div class="t2"></div>
    </div>
      <?php endforeach; ?>
    
  </div>
</div>
   
</body>
</html>
