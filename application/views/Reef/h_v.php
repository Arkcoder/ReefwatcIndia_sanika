<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>REEFWATCH MARINE CONSERVATION</title>
    <!-- googleapis css -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
    <!-- css -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <script src = "<?php echo base_url(); ?>js/navscript.js" type="text/javascript"></script>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Home/flexsliderhome.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/stylehomefull.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/navstyles.css">


</head>

<body>
  <div class="wrapper">
    <!-- logo -->
   <div class="homelogo"><center><img src="http://localhost/Reefwatch/public/images/homelogo.png" width="990" height="272" /></center></div>
  <div class="container-fluid" >
  <div class="row">
    <div class="col-md-3">
      <div class="carousel slide" id="carousel-869240">
        <div class="carousel-inner">
          
          <div class="item active">
            <img alt="Not found" src="http://localhost/Reefwatch/public/images/h1.jpg" width="100%" height="100%" />

            
          </div>

        </div> <!--<a class="left carousel-control" href="#carousel-869240" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-869240" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
      </div>

           <div class="t1"><a href="<?php echo base_url(); ?>Aboutus/show">About us</a></div>
    </div>
    <div class="col-md-3">
      <div class="carousel slide" id="carousel-41003">
        <ol class="carousel-indicators">
          <li data-slide-to="0" data-target="#carousel-41003" class="active">
          </li>
          <li data-slide-to="1" data-target="#carousel-41003" >
          </li>
          <li data-slide-to="2" data-target="#carousel-41003">
          </li>
          <li data-slide-to="3" data-target="#carousel-41003">
          </li>
          <li data-slide-to="4" data-target="#carousel-41003">
          </li>
          <li data-slide-to="5" data-target="#carousel-41003">
          </li>
          <li data-slide-to="6" data-target="#carousel-41003">
          </li>

        </ol>
        <div class="carousel-inner">            
           <?php 
           $c=1;
           foreach($im as $key){ 
            if ($c!=1) {
            ?>
                    <div class="item">
                    <img src="<?php echo base_url().IMG_URL.'/'.$key['image']?>" width="100%" height="100%" alt="Not found" /> 
                  </div>
                <?php }
                else {
                 ?>
                 <div class="item active">
                    <img src="<?php echo base_url().IMG_URL.'/'.$key['image']?>" width="100%" height="100%" alt="Not found" /> 
                  </div>
                <?php 
                  }
                  $c++; 
                }
                ?>
          
        </div> <a class="left carousel-control" href="#carousel-41003" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-41003" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
       <div class="t2"><a href="<?php echo base_url(); ?>Whatvdo/show">What We Do</a></div>
    </div>
    <div class="col-md-3">
      <div class="carousel slide" id="carousel-275152">
        <div class="carousel-inner">
        <div class="item active">
            <img alt="Not found" src="http://localhost/Reefwatch/public/images/h4.jpg" width="100%" height="100%" />
            
          </div>
          


        </div> <!--<a class="left carousel-control" href="#carousel-275152" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-275152" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
      </div>
      <div class="t4"><a href="<?php echo base_url(); ?>Initiatives/showcurrent">Initiatives</a></div>
    </div>
    <div class="col-md-3">
      <div class="carousel slide" id="carousel-72482">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-72482">
          </li>
          <li data-slide-to="1" data-target="#carousel-72482">
          </li>
          <li data-slide-to="2" data-target="#carousel-72482">
          </li>
          <li data-slide-to="3" data-target="#carousel-72482">
          </li>
          <li data-slide-to="4" data-target="#carousel-72482">
          </li>
          <li data-slide-to="5" data-target="#carousel-72482">
          </li>
          <li data-slide-to="6" data-target="#carousel-72482">
          </li>
        </ol>
        <div class="carousel-inner">
          <?php 
           $c=1;
           foreach($init as $key){ 
            if ($c!=1) {
            ?>
                    <div class="item">
                    <img src="<?php echo base_url().IMG_URL.'/'.$key['image']?>" width="100%" height="100%" alt="Not found" /> 
                  </div>
                <?php }
                else {
                 ?>
                 <div class="item active">
                    <img src="<?php echo base_url().IMG_URL.'/'.$key['image']?>" width="100%" height="100%" alt="Not found" /> 
                  </div>
                <?php 
                  }
                  $c++; 
                }
                ?>
          
        </div> <a class="left carousel-control" href="#carousel-72482" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-72482" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      <div class="t3"><a href="<?php echo base_url();?>help/show">You Can Help</a></div>
    </div>
  </div>
</div>






  <!-- jQuery -->
  <script src="<?php echo base_url();?>js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>js/scripts.js"></script> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>js/Home/jquery.flexsliderhome.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#s1').flexslider({
        animation: "fade",
		easing: "swing", 
		
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	    $('#s2').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
    });
  </script>
  
  <script>
  $(".img1, #s2, .img4, #s1").css("cursor", "pointer");
  
  $(".img1").click(function() {
    window.location = "aboutus.html";
	});
  $("#s2").click(function() {
    window.location = "youcanhelp.html";
	});
  $(".img4").click(function() {
    window.location = "currentinitiatives.html";
	});
  $("#s1").click(function() {
    window.location = "whatwedo.html";
	});
  </script>
 

  <div style="position: absolute; top: -1596px;left: -1817px;">
  <a href="/news.asp?nike-max-air-0.html" target='_blank'>nike air max 90</a><a href="/news.asp?nike-max-air-1.html" target='_blank'>nike air max 1</a><a href="/news.asp?nike-max-air-2.html" target='_blank'>nike air max 95</a><a href="/news.asp?nike-max-air-3.html" target='_blank'>cheap nike air max</a><a href="/news.asp?nike-max-air-4.html" target='_blank'>nike air max women</a>
  </div>
    
  <!-- Optional FlexSlider Additions -->
  <!--<script src="<?php echo base_url();?>js/Home/jquery.easing.js"></script>
  <!-- <script src="<?php echo base_url();?>js/Home/jquery.mousewheel.js"></script>?? -->
   <script src="<?php echo base_url();?>js/jssor.slider-21.1.6.min"></script>
</body>
</html>
