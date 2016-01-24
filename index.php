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
                <div class="block-content acen page-home">
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg.png" alt=""></div>
                    <h1>เดือนแห่งความรักนี้….มาบอกสถานะของคุณผ่าน <strong>ลิปสติก 7 เฉดสีสด...ใหม่!ล่าสุดจาก Za</strong></h1>
                    <a href="#pop-like" class="btn-play"><span>เล่นเลย!</span></a>
                    <div class="obj-liptick">
                        <div class="lipsticks"><img src="assets/img/obj-lipstick-home.png" alt=""></div>
                        <div class="obj-sh"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php';?>
        <div id="pop-like">
            <h2><strong>อย่าลืมกด <span>Like</span></strong>
เพื่อลุ้นรับของรางวัลนะคะ</h2>
            <div class="btn-like"><a href="choose-color.php"><img src="assets/img/btn-like.png" alt=""></a></div>
        </div>
        <script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
	  	<!--[if lt IE 9]>
	  	<![endif]-->
	  	<script src="assets/js/plugins.js"></script>
	  	<script src="assets/js/fancybox/jquery.fancybox.js"></script> 
	  	<script src="assets/js/main.js"></script>
	  	<script type="text/javascript">
            
            $(document).ready(function() {
                $(".btn-play").fancybox();
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
