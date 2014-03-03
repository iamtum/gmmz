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
<body>
<div id="wrapper">

  <?php include('inc/inc-header.php'); ?>

	<div id="contents">
		<div id="contactWrap" class="section">
            <h2><img src="images/title_contactus01.gif" width="210" height="25" alt="contact us" /></h2>
            <div id="contactIn" class="clearfix">
                <div id="contactDetail" class="clearfix">
                    <div id="googlemap" class="clearfix"><img src="images/img_contactMap01.gif" width="976" height="354" alt="map" /></div>
                    <div id="form_contact">
                      <h3>บริษัท จีเอ็มเอ็ม แซท เทรดดิ้ง จำกัด</h3>
                        <p>เลขที่ 50 อาคาร จีเอ็มเอ็ม แกรมมี่ เพลส ถนน สุขุมวิท แขวงคลองเตยเหนือ<br />
                            เขตวัฒนา กรุงเทพ 10110 โทร: 1629</p>
                       <p class="cover"><img src="images/contact_logo.gif" width="94" height="94" alt="logo" /></p>
                        <span>แบบฟอร์มกรอกข้อมูลเพื่อติดต่อเรา</sapn>
                        <form name="form_contact01" action="" method="post">
                            <table class="table_basic01" id="sectionForm01" cellpadding="0" cellspacing="0">
                                <colgroup>
                                    <col width="40%" />
                                    <col width="60%" />
                                </colgroup>                    	
                                <tr>
                                    <th><div>ชื่อ*</div></th>
                                    <td><div><input type="text" name="input_01" size="70" class="inputM" value="" tabindex="1" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>เบอร์โทร*</div></th>
                                    <td><div><input type="text" name="input_02" size="70" class="inputM" value="" tabindex="2" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>อีเมล์*</div></th>
                                    <td><div><input type="email" name="input_03" size="70" class="inputM" value="" tabindex="3" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>หัวข้อ</div></th>
                                    <td><div><input type="text" name="input_04" size="70" class="inputM" value="" tabindex="4" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>รายละเอียด</div></th>
                                    <td><div><textarea name="testarea_01" cols="20" rows="4" class="textareaM" tabindex="5"></textarea></div></td>
                                </tr>
                                <tr>
                                    <th><div>Serial Number :</div></th>
                                    <td><div><input type="text" name="input_05" size="70" class="inputM" value="" tabindex="6" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>รุ่นกล่องทีใช้ปัจจุบัน</div></th>
                                    <td><div><input type="text" name="input_06" size="70" class="inputM" value="" tabindex="7" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>แพ็คเกจปัจจุบัน</div></th>
                                    <td><div><input type="text" name="input_07" size="70" class="inputM" value="" tabindex="8" /></div></td>
                                </tr>
                                <tr>
                                    <th><div>จานรับสัญญาณ</div></th>
                                    <td><div><input type="text" name="input_08" size="70" class="inputM" value="" tabindex="9" /></div></td>
                                </tr>
                                <tr>
                                    <th>&nbsp;</th>
                                    <td><br /><div><input type="image" src="images/btn_submit.gif" class="submit" alt="Submit" /></div></td>
                                </tr>
                            </table>
                        </form>
            <!-- / #form_contact --></div>
          <!-- / #contactDetail .clearfix --></div>
         <!-- / #contactIn .section --></div>
        <!-- / #contactWrap .section --></div>
        
  <!-- /contents --></div>
<!-- /wrapper --></div>

<?php include('inc/inc-footer.php'); ?>

</body>
</html>
