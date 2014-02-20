<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>GMMZ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/layout.css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/shared.js"></script>  
</head>
<body id="g1">
<div id="wrapper">

  <?php include('inc/inc-header.php'); ?>

	<div id="contents">
		<div class="section">
            <p><img src="images/mainImg01.jpg" width="1020" height="407" alt="" /></p>
        <!-- /section --></div>
		<div class="section">
            <p><img src="images/brn_home01.jpg" width="1020" height="165" alt="" /></p>
        <!-- /section --></div>
		<div id="highLight" class="section">
        	<h2><img src="images/txt_heading01.jpg" width="1020" height="48" alt="highlight" /></h2>
            <div class="clearfix">
            	<ul>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
            		<li class="item">
            	    	<a href="#">
            	            <img src="images/pic_home04.jpg" width="250" height="215" alt="" class="color" />
            	            <img src="images/pic_home05.jpg" width="250" height="215" alt="" />
            	        </a>
            	    </li>
           	  	</ul>
              </div>
        <!-- /section --></div>
        <div id="newsEvent" class="section">
            <h2><img src="images/txt_heading02.jpg" width="1020" height="48" alt="news event" /></h2>
            <div class="clearfix">
            	<div class="item">
                	<a href="#"><img src="images/pic_home01.jpg" width="330" height="230" alt="" /></a>
					<h3>The Brave Man</h3>
                    <p>Portfolio</p>
           	  	</div>
            	<div class="item">
                	<a href="#"><img src="images/pic_home02.jpg" width="330" height="230" alt="" /></a>
					<h3>The Brave Man</h3>
                    <p>Portfolio</p>
           	  	</div>
            	<div class="item">
                	<a href="#"><img src="images/pic_home03.jpg" width="330" height="230" alt="" /></a>
					<h3>The Brave Man</h3>
                    <p>Portfolio</p>
           	  	</div>
            </div>
        <!-- /section --></div>
		<div class="section">
            <p><img src="images/mainImg02.jpg" width="1020" height="280" alt="slide" /></p>
        <!-- /section --></div>
        
  <!-- /contents --></div>
<!-- /wrapper --></div>

<?php include('inc/inc-footer.php'); ?>

<script type="text/javascript">
	$(document).ready(function(){		
		//hover grayscale
		$("img.color").hover(function() {
			$(this).stop().animate({"opacity": "0"}, "500");
		},function() {
			$(this).stop().animate({"opacity": "1"}, "500");
		});
	});
</script>
</body>
</html>
