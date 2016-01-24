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
                <div class="block-content block-bg block-marking acen">
                    <?php if($detect->isMobile()) { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp.png" alt=""></div>
                    <?php } else { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg2.png" alt=""></div>
                    <?php } ?>
                    <header>
                        <h1 class="hpage hpage-marking"><span class="hstep visible-dt">Step 3</span><span>กำหนดริมฝีปาก</span></h1>
                    </header>
                    <div class="content clearfix">
                        <div class="visible-dt marking">
                            <h2>ริมฝีปากในรูปของคุณเปิดอยู่หรือไม่?</h2>
                            <div class="marking-area">
                                <div id="open" class="marking-sample active"><img src="assets/img/pic-modal.jpg" alt=""></div>
                                <div id="close" class="marking-sample"><img src="assets/img/pic-modal2.jpg" alt=""></div>
                            </div>
                            <div class="row-btn btn-tab clearfix">
                                <a href="#open" class="btn btn-border active">เปิด</a>
                                <a href="#close" class="btn btn-border">ปิด</a>
                            </div>
                            <p>กำหนดจุดตามตัวอย่าง <br>โดยให้จุดสีขาวอยู่ที่ขอบของริมฝีปาก</p>
                        </div>
                        </style>
                        <div class="row-frame">
                            <div class="frame">
                                <div class="pic-upload">
                                    <span class="logo-in"></span>
                                    <div class="color-title" style="display:none;"><img id="prop-overlay" src="assets/img/color-title-01.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="box-control clearfix">
                            <div class="zoom px-zoom">
                                <a href="#" id="in" class="btn-zoom zoom-in fa fa-plus"></a>
                                <a href="#" id="out" class="btn-zoom zoom-out fa fa-minus"></a>
                            </div>
                        </div>
                        <div class="row-btn clearfix">
                            <a href="customize.php" class="btn btn-dir-left">ก่อนหน้า</a>
                            <a href="marking.php" class="btn btn-dir-right">ถัดไป</a>
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
            // Cookie //
            function setCookie(name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                } else var expires = "";
                document.cookie = name + "=" + value + expires + "; path=/";
            }

            function readCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
            function deleteCookie(name){
                setCookie(name,"",-1);
            }
            //
            $(document).ready(function() {
                /*
                if (chkMobile.all()) {
                    $('.btn-menu').click(function(e){
                         e.preventDefault();
                         $(this).toggleClass('active');
                         $('.nav-m').toggleClass('active');
                     });
                } 
                */
                $(".btn-tab a").click(function(e) {
                    e.preventDefault();
                    $(this).addClass("active");
                    $(this).siblings().removeClass("active");
                    var tab = $(this).attr("href");
                    $(".marking-sample").not(tab).css("display", "none");
                    $(tab).fadeIn();
                });
                
            });
            
            
            
            $(window).load(function() {
                //$("body").addClass("animate");
            });
            
            //
            document.body.onload = init;
        </script>
	  	
    </body>
</html>
