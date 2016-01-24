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
                <div class="block-content block-bg block-share acen">
                    <?php if($detect->isMobile()) { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp.png" alt=""></div>
                    <?php } else { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg2.png" alt=""></div>
                    <?php } ?>
                    <header>
                        <h1 class="hpage hpage-share"><span class="hstep visible-dt">Step 4</span><span>แชร์ภาพของคุณ</span></h1>
                    </header>
                    <div class="content">
                        <div class="row-frame">
                            <div class="frame">
                                <div class="pic-upload"><img src="assets/img/pic.jpg" alt="" style="margin-top: -80px">
                                    <span class="logo-in"></span>
                                    <div class="color-title"><img src="assets/img/img-color-title-01.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="txt-box">
                            <h2>สวย เลิศ เชิด มั่นใจ......ใสๆๆ ^ ^  </h2>
                            <p>ลิปสติกเนื้อแมท 7 เฉดสีใหม่ล่าสุด จาก Za 
สดชัดยาวนาน 12 ช.ม. <span class="htag">#ZAThailand</span></p>
                        </div>
                        <div class="row-btn clearfix">
                            <a href="#" class="btn btn-full">Share</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php';?>
        <script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
	  	<!--[if lt IE 9]>
	  	<![endif]-->
	  	<script src="assets/js/plugins.js"></script>
	  	<script src="assets/js/main.js"></script>
	  	<script type="text/javascript">
            
            $(document).ready(function() {
                $('.btn-menu').click(function(e){
                     e.preventDefault();
                     $(this).toggleClass('active');
                     $('.nav-m').toggleClass('active');
                 });
                
            });
            
            
            
            $(window).load(function() {
                //$("body").addClass("animate");
            });
        </script>
	  	
    </body>
</html>
