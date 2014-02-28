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
<link rel="stylesheet" type="text/css" href="css/program.css" media="all" />
 <script type="text/javascript" src="js/jquery.js"></script>   
<script type="text/javascript" src="js/shared.js"></script> 
</head>
<body id="g2">
<div id="wrapper">

  <?php include('inc/inc-header.php'); ?>

	<div id="contents">
		<div class="section">
        	<div id="movie">
           	  <img src="images/pic_program02.gif" width="978" height="340" alt="" />
			<!-- / #series --></div>
        <!-- /section --></div>
        <div class="section">
       	  <div id="movieDetail" class="clearfix">
          	<p class="cover"><img src="images/pic_program03.gif" width="291" height="349" alt="" /></p>
            <h3>Snow white and The Huntsman</h3>
            <p>สโนไวท์ สาวน้อยที่กระจกวิเศษบอกว่าเธอสวยกว่า ราชินีแห่ง<br />
            สโนไวท์ สาวน้อยที่กระจกวิเศษบอกว่าเธอสวยกว่า ราชินีแห่ง <br />
            ความชั่วร้าย ดังนั้นการตามล่าทำลายล้าง เจ้าหญิงสโนไวท์จึง <br />
            เกิดขึ้น หลังจากโดนยึดเมืองไป สโนไวท์ก็ได้พบกับนายพรานป่า <br />
            ที่ได้รับคำสั่งให้มาฆ่าเธอ แต่เขากลับมาฝึกให้เธอต่อสู้เพื่อ <br />
            ทวงบัลลังก์กลับคืนส่วนของเจ้าชายหนุ่มรูปงามผู้ตกหลุมรักใน<br />
            ความงามและความเก่งกาจของสโนไวท์</p>
            <p class="mt40"><img src="images/img_program01.gif" width="385" height="39" alt="" /></p>
          	<p><img src="images/img_program02.gif" width="979" height="207" alt="" /></p>
          <!-- / #movieDetail --></div>
        <!-- /section --></div>

		<div id="varietyWrap" class="section">
          	<div id="variety">
        		<p class="heading">RELATED</p>
            	<div id="slidesVariety" class="slides">
                  <img src="images/pic_varietySlide02.gif" width="695" height="330" alt="" />           		  
                  <img src="images/pic_varietySlide02.gif" width="695" height="330" alt="" />           		  
                  <img src="images/pic_varietySlide02.gif" width="695" height="330" alt="" />           		  
                </div>
            <!-- / #variety --></div>
        <!-- /section --></div>
        
  <!-- /contents --></div>
<!-- /wrapper --></div>

<?php include('inc/inc-footer.php'); ?>

<script type="text/javascript" src="js/jquery.slides.min.js"></script>
<script type="text/javascript">	
	$(document).ready(function(){
		//top slides
      $('#slidesVariety').slidesjs({
        width: 695,
        height: 330
      });
	});
</script> 

</body>
</html>
