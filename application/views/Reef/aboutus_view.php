<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABOUT US</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styleabout.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/navstyles.css"/>
<script src="<?php echo base_url();?>js/navscript.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" media="screen" />
</head>

<body>
<div class="wrapper">
  <div class="header">
    <div class="logo"><a href="<?php echo base_url();?>Reefhome"><img src="http://localhost/Reefwatch/public/images/logo.png" width="358" height="139" border="0" /></a></div>
    <div class="ico-box">
      <div class="ico-donate"><a href="<?php echo base_url();?>help/donate"><img src="http://localhost/Reefwatch/public/images/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="http://localhost/Reefwatch/public/images/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="http://localhost/Reefwatch/public/images/iconfb.png" width="28" height="28" border="0" /></a></div>
      
    </div>
    <div class="navigation">
      <ul class="nav">
        <li><a href="<?php echo base_url();?>Aboutus/show" class="active">About us</a>
          <ul>
            <li><a href="<?php echo base_url();?>Aboutus/team">Our Team</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>Whatvdo/show">What we do</a></li>
        <li><a href="#">Initiatives</a>
          <ul>
            <li><a href="<?php echo base_url();?>Initiatives/showcurrent">Current Initiatives</a></li>
            <li><a href="<?php echo base_url();?>Initiatives/showpast">Past Initiatives</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>help/show">You can help!</a>
   		<ul>
         <li><a href="<?php echo base_url();?>help/donate">Donate</a></li>
     	</ul>  	
   </li>
        <li><a href="<?php echo base_url();?>Partners/show">Partners</a></li>
        <li><a href="<?php echo base_url();?>Multimedia/show">Multimedia</a>
   		<ul>
         <li><a href="#">Blog</a></li><br />

         <li><a href="#">Gallery</a></li><br />

         <li><a href="#">Video</a></li><br />

     	</ul>
   </li>
        <li><a href="<?php echo base_url();?>Contact/show">Contact us</a></li>
      </ul>
    </div>
  </div>
  <div class="mainbox">
    <div class="col1">
      <div class="main2">
        <div class="aboutbox2">
          <div class="about1">VISION</div>
          <div class="about2">To protect the ocean and the life within it, through education, research and management, so that our children and theirs will continue to have access to this source of richness and beauty that sustains us today. </div>
        </div>
        <div class="aboutbox3">
          
          <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide" id="carousel-425556">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-425556">
          </li>
          <li data-slide-to="1" data-target="#carousel-425556">
          </li>
          <li data-slide-to="2" data-target="#carousel-425556">
          </li>
          <li data-slide-to="3" data-target="#carousel-425556">
          </li>
          <li data-slide-to="4" data-target="#carousel-425556">
          </li>
          <li data-slide-to="5" data-target="#carousel-425556">
          </li>
          <li data-slide-to="6" data-target="#carousel-425556">
          </li>
        </ol>
        <div class="carousel-inner">
                  <?php 
           $c=1;
           foreach($img as $key){ 
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

        </div> <a class="left carousel-control" href="#carousel-425556" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-425556" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
      <div class="about3">ReefWatch Marine Conservation is a non-profit Organization established in 1993, as a Public Charitable Trust under the Societies Registration Act. Reefwatch is involved in research, education and outreach activities.
        
        These have included coral reef monitoring in the Lakshadweep and Andaman & Nicobar Islands, documentary films, beach clean ups in Mumbai, SCUBA training for scientists and education programs in schools across the country.<br />
        ReefWatch has served as a Member of the National Board for Wildlife (Government of India) since May 2007.
        
        ReefWatch has had the privilege of working with many dedicated and inspiring individuals in the fields of science, government, filmmaking, photography and the media. <br />
        Its efforts are targeted towards protecting and nurturing the diversity of life in India's coastal and marine environments. </div>
    </div>
    <div class="col2">
      <div class="phase1desc">
        <div class="closebutt1"><img src="http://localhost/Reefwatch/public/images/closebutton.png" width="25" height="25" /></div>
        <ul>
          <li>Developing and conducting programs that introduce the youth of the nation to the wonders of the marine world and anthropogenic pressures upon the aquatic ecosystem, through hands on underwater experiences as well as classroom sessions.</li>
          <li>Empowering the youth with the knowledge, training and avenues for change to a better, bluer, planet. </li>
          <li>Creating multimedia content to raise awareness amongst the public.</li>
          <li>Workshops for tour operators in critical marine areas to inspire better practices amongst tourists. </li>
        </ul>
      </div>
      
      <div class="phase2desc">
        <div class="closebutt1"><img src="http://localhost/Reefwatch/public/images/closebutton.png" width="25" height="25" /></div>
        <ul>
          <li>Conduct, fund and facilitate targeted research towards increasing our understanding and effectiveness of conservation methods in the marine sphere.</li>
          <li>Improving the current capacities of research facilities and efforts in the islands of India by collaborating with foreign scientific institutions. </li>
        </ul>
      </div>
      
      <div class="phase3desc">
        <div class="closebutt1"><img src="http://localhost/Reefwatch/public/images/closebutton.png" width="25" height="25" /></div>
        <ul>
          <li>Providing support and advocacy to the concerned ministries of the Government of India and local authorities towards creating more effective policy and implementation methods for the preservation of marine areas and organisms.</li>
        </ul>
      </div>
      
      <div class="about4">OBJECTIVES</div>
      <div class="about5">ReefWatch's strategy for the conservation of our marine spaces is simple. We must first know our ocean, and then use this knowledge and ensuing enthusiasm to inform sustainable management. 
        Thus under a refreshed team and management, ReefWatch aims to fulfill three objectives, education, research and management, in a phased order:</div>
      <div class="about6">
        <div class="about7">
          <div class="phase1">Phase One</div>
          <span style="color: #999999">focuses on education & awareness building:</span><br />
          <a href="#">Read More</a> </div>
        <div class="about8">
          <div class="phase2">Phase Two</div>
          <span style="color: #999999">will incorporate scientific research into the fold of ReefWatch activities:</span><br />
          <a href="#">Read More</a> </div>
        <div class="about9">
          <div class="phase3">Phase three</div>
          <span style="color: #999999">will involve a strengthening of ReefWatch's advisory and support role with governmental and regulatory bodies by:</span><br />
          <a href="#">Read More</a> </div>
      </div>
      <div class="aboutimg2"><a href="<?php echo base_url();?>Aboutus/team"><img src="http://localhost/Reefwatch/public/images/aboutimg2.gif" width="140" height="37" border="0" /></a></div>
    </div>
  </div>
</div>


<script src="<?php echo base_url();?>js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>js/scripts.js"></script> 
<!-- jQuery --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
<!-- <script>window.jQuery || document.write('<script src="js/jquery-1.7.min.js">\x3C/script>')</script>  -->

<script>
$(function(){
	$(".ico-t, .ico-f, .aboutimg2").css("cursor", "pointer");
	$(".ico-t, .ico-f").hover(function(){	
	$(this).css("opacity","0.7");
	})
	
	$(".ico-t, .ico-f, .aboutimg2").mouseleave(function(){	
	$(this).css("opacity","1");
	})
})	
</script>

<script>
  	$(function(){
		$(".closebutt1").css("cursor","pointer");
		
		$(".about7 a").click(function(){
			$(".phase2desc").fadeOut();
			$(".phase3desc").fadeOut();
			
			$(".phase1desc").slideToggle();
			})
			
			
		$(".about8 a").click(function(){
			$(".phase1desc").fadeOut();
			$(".phase3desc").fadeOut();
			
			$(".phase2desc").slideToggle();
			})
			
		$(".about9 a").click(function(){
			$(".phase1desc").fadeOut();
			$(".phase2desc").fadeOut();
			
			$(".phase3desc").slideToggle();
			})
			
		$(".closebutt1").click(function(){
			$(".phase1desc").fadeOut("slow")
			$(".phase2desc").fadeOut("slow")
			$(".phase3desc").fadeOut("slow")
			})
		})
</script> 

<!-- FlexSlider --> 
<script src="<?php echo base_url();?>js/jquery.flexslider.js"></script> 

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
</body>
</html>
