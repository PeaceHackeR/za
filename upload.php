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
                <div class="block-content block-bg block-upload acen">
                    <?php if($detect->isMobile()) { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp.png" alt=""></div>
                    <?php } else { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg2.png" alt=""></div>
                    <?php } ?>
                    <header>
                        <h1 class="hpage hpage-upload"><span class="hstep visible-dt">Step 2</span><span>อัพโหลดรูปภาพของคุณ</span></h1>
                    </header>
                    <div class="content">
                        <div class="row-frame">
                            <div class="frame">
                                <div class="btn-file-upload">
                                    <a href="#">อัพโหลดรูป</a>
                                    <input name="fileupload" id="fileupload" type="file" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row-btn clearfix">
                            <a href="index.php" class="btn btn-dark visible-dt">หน้าแรก</a>
                            <a href="choose-color.php" class="btn btn-dir-left">ก่อนหน้า</a>
                            <a href="customize.php" class="btn btn-dir-right disabled">ถัดไป</a>
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
                if (chkMobile.all()) {
                    $('.btn-menu').click(function(e){
                         e.preventDefault();
                         $(this).toggleClass('active');
                         $('.nav-m').toggleClass('active');
                     });
                }
            });
            
            
            
            $(window).load(function() {
                //$("body").addClass("animate");
            });
        </script>
	  	
    </body>
</html>
