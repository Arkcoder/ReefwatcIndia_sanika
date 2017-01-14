
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="css/style2.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylewhatwedo.css"/>
<title>WHAT WE DO</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navstyles.css"/>
<script src="<?php echo base_url(); ?>js/navscript.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper">
<div class="header">	
<div class="logo"><a href="<?php echo base_url();?>Reefhome"><img src="<?php echo base_url();?>/public/images/logo.png" width="358" height="139" border="0" /></a></div>
<div class="ico-box">
      <div class="ico-donate"><a href="donate.html"><img src="<?php echo base_url();?>/public/images/icondonatenew.png" width="28" height="28" border="0" /></a></div>
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
   
   
   <li><a href="<?php echo base_url();?>WhatWeDo" class="active">What we do</a></li>
   <li><a href="#">Initiatives</a>
   		<ul>
         <li><a href="<?php echo base_url();?>Initiatives/showcurrent">Current Initiatives</a></li>
         <li><a href="<?php echo base_url();?>Initiatives/showpast">Past Initiatives</a></li>
     	</ul>
   </li>
   <li><a href="<?php echo base_url();?>YouCanHelp">You can help!</a>
   		<ul>
         <li><a href="<?php echo base_url();?>help/donate">Donate</a></li>
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


<div class="col1">
<div class="whatwedo-box1">
<div class="whatwedo-1">WHAT WE DO</div>
<div class="whatwedo-2">ReefWatch is committed towards changing India's interaction with her ocean. We hope to make people more aware - <a href="currentinitiatives.html">projects page</a> <br />
  to fund research - <a href="pastInitiatives.html">past activities</a> that illuminates 
more sustainable ways of using the ocean, and to 
work with communities 
and the Indian Government to realize our vision of protecting the ocean for our future generations. 
  <br />
  We work closely with our <a href="partners.html">partners</a> and <a href="donate.html">donors</a> to achieve this vision. 
See <a href="youcanhelp.html">how you can help</a>...</div>
</div>
</div>

<div class="col2">
<div class="whatwedo-box2">
<div class="whatwedo-3">WHY WE DO WHAT WE DO</div>
<div class="whatwedo-4">For many millions of years, the ocean truly was a cradle of life, supporting millions of animals large and small in its fold. During the early parts of the Industrial Revolution, the ocean was a silent buffer – absorbing much of the carbon dioxide, pollutants and effluents human society was creating as by-products of progress. It has also, for years, supplied a growing demand for protein in most parts of the world. Unfortunately, large as she is, the ocean is not infinite, and nor are her resources or limits. Today we are very close to pushing those limits. </div>
</div>
<div class="slidebox"><div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic3.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic4.jpg" />
  	    		</li>
                <li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic5.jpg" />
  	    		</li>
                <li>
  	    	    <img src="<?php echo base_url();?>/public/images/pic6.jpg" />
  	    		</li>
          </ul>
        </div></div>
<div class="whatwedo-box3">
<div class="whatwedo-5"> We who dwell on this planet need clean air, food, medicines for illnesses, a hospitable climate, recreation, inspiration and access to a source of inspiration and richness that is greater than ourselves or our own everyday lives. For these reasons, a healthy ocean is vital for human health. 
  <br />
  	
We owe it to ourselves to nurture these resources for our own survival and that of our children and theirs. </div>
</div>
</div>
</div>
</div>
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
