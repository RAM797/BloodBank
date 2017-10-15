<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>

        <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<img src="cpics/welcome.png"/>		
		<p><h2>The Blood Donor of today may be recipient of tomorrow</h2></p>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/slider1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider5.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider6.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider7.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider8.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4>Blood bank:</h4>
			<p>We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="registration.php">signing up</a> online as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by <a href="index.php">www.lifesaver.com</a> on behalf of "Life Saver Blood Bank"
as a public service without any profit motive.This is a free service. 
We request donors to update contact details regularly.</p>
	</div>
	
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">

</div>
</div>
</body>
</html>