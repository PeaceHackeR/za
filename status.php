<?php
require_once 'inc/Mobile_Detect.php';
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Za-cosmetics.com - Colour your Status</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font.css">
        <link rel="stylesheet" href="assets/css/button.css">
        <link rel="stylesheet" href="assets/css/plugin.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/respon.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
            
            
        </style>
    </head>
    <body>
        <?php include 'inc/header.php';?>
        <div class="main-wrapper">
            <div class="main-container">
                <div class="block-content block-bg block-status acen">
                    <?php if($detect->isMobile()) { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp.png" alt=""></div>
                    <?php } else { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg2.png" alt=""></div>
                    <?php } ?>
                    <header>
                        <h1 class="hpage hpage-status"><span class="hstep visible-dt">Step 4</span><span>เลือกสีและข้อความที่อยากแชร์</span></h1>
                    </header>
                    <div class="content clearfix">
                        <div class="wrap-frame">
                            <div class="row-frame">
                                <div class="frame">
                                    <div class="pic-upload"><img src="assets/img/pic.jpg" alt="" style="margin-top: -80px">
                                        <span class="logo-in"></span>
                                        <div class="color-title"><img src="assets/img/color-title-01.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-control clearfix">
                                <div class="color-select">
                                    <h3 class="visible-dt">IN <br>
A RELATIONSHIP</h3>
                                    <a href="#" class="c-rd406 active"><span>RD406</span></a>
                                    <a href="#" class="c-rd401"><span>RD401</span></a>
                                    <a href="#" class="c-rd407"><span>RD407</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="msg-box">
                            <div class="row-input hidden-dt">
                                <label for="">เลือกข้อความที่อยากแชร์</label>
                                <select name="" id="choose-txt" class="turnintodropdown">
                                    <option value="0">โสดและสดโดยเฉพาะปาก</option>
                                    <option value="1">โสดและสดโดยเฉพาะปาก2</option>
                                    <option value="2">โสดและสดโดยเฉพาะปาก3</option>
                                    <option value="showtxt">หรือ พิมพ์ข้อความ</option>
                                </select>
                                <div class="txt-msg">
                                        <label for="">พิมพ์ข้อความ</label>
                                        <textarea name="" id=""></textarea>
                                <span class="remark">*ความยาวไม่เกิน 200 ตัวอักษร</span>
                                    </div>
                            </div>
                            <div class="row-input visible-dt">
                                <h3>เลือกข้อความที่อยากแชร์</h3>
                                <ul>
                                    <li><input type="radio" name="seltext" checked="checked"> <label>มีแฟนแล้วจ๊ะ อย่าคิดจีบ</label></li>
                                    <li><input type="radio" name="seltext"> <label>โสดและสดโดยเฉพาะปาก</label></li>
                                    <li><input type="radio" name="seltext"> <label>โสดได้...อายอด</label></li>
                                    <li><input type="radio" name="seltext"> <label>โสด</label></li>
                                    <li><input type="radio" name="seltext" id="showtxt"> <label>หรือ พิมพ์ข้อความ</label>
                                    <div class="txt-msg">
                                        <textarea name="" id=""></textarea>
                                <span class="remark">*ความยาวไม่เกิน 200 ตัวอักษร</span>
                                    </div>
                                    </li>
                                </ul>
                            </div>
<!--
                            <div class="row-input">
                                <label for="">หรือ พิมพ์ข้อความ</label>
                                <textarea name="" id=""></textarea>
                                <span class="remark">*ความยาวไม่เกิน 200 ตัวอักษร</span>
                            </div>
-->
                        </div>
                        <div class="row-btn clearfix">
                            <a href="marking.php" class="btn btn-dir-left">ก่อนหน้า</a>
                            <a href="share.php" class="btn btn-dir-right">ถัดไป</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php';?>
        <script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
        <script src="assets/js/vendor/jqueryui.js"></script> 
	  	<!--[if lt IE 9]>
	  	<![endif]-->
	  	<script src="assets/js/plugins.js"></script>
	  	<script src="assets/js/main.js"></script>
	  	<script type="text/javascript">
            
            $(document).ready(function() {
                if (chkMobile.all()) {
                    $('.btn-menu').click(function(e){
                         e.preventDefault();
                         $(this).toggleClass('active');
                         $('.nav-m').toggleClass('active');
                     });
                    
                    
                    //newli.onclick=function(){alert('ddfs'); }
                    
                    
                    $(document).on("click", ".dropcontainer li a", function() {
                        var txtVal = $('#choose-txt').val();
                        if (txtVal=='showtxt') {
                            $('.txt-msg').addClass('active');
                        } else {
                            $('.txt-msg').removeClass('active');
                        }
                    });
                    
                } else {
                    $('.row-input label').click(function(e){
                         e.preventDefault();
                         $('.row-input li input[type="radio"]').removeAttr('Checked'); 
                         $(this).prev('input').attr('Checked','Checked');
                        if ($('#showtxt').is(':checked')) {
                            $('.txt-msg').addClass('active');
                        } else {
                            $('.txt-msg').removeClass('active');
                        }
                     });
                }
                
            });
            
            
            
            $(window).load(function() {
                //$("body").addClass("animate");
            });
        </script>
	  	
    </body>
</html>
