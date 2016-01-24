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
            .viewer {
                width: 100%;
                height: 100%;
                /*                border: 8px solid #fff;*/
                position: relative;
            }
            
        </style>
    </head>
    <body>
        <?php include 'inc/header.php';?>
        <div class="main-wrapper">
            <div class="main-container">
                <div class="block-content block-bg acen">
                    <?php if($detect->isMobile()) { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp.png" alt=""></div>
                    <?php } else { ?>
                    <div class="logo-camp"><img src="assets/img/logo-camp-lg2.png" alt=""></div>
                    <?php } ?>
                    <header>
                        <h1 class="hpage hpage-customize"><span class="hstep visible-dt">Step 2</span><span>ปรับแต่งรูปภาพของคุณ</span></h1>
                    </header>
                    <div class="content">
                        <div class="row-frame">
                            <div class="frame">
                                <div id="pic-frame" class="pic-upload viewer">
                                    <span class="logo-in"></span>
                                    <div class="color-title"><img src="assets/img/color-title-01.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-control clearfix">
                            <div class="change-pic">
                                <a href="#"><span>เปลี่ยนภาพใหม่</span></a>
                                <input name="fileupload" id="fileupload" type="file" accept="image/*">
                            </div>
                            <div class="zoom">
                                <a href="#" id="in" class="btn-zoom zoom-in fa fa-plus"></a>
                                <a href="#" id="out" class="btn-zoom zoom-out fa fa-minus"></a>
                            </div>
                        </div>
                        <div class="row-btn clearfix">
                            <a href="upload.php" class="btn btn-dir-left">ก่อนหน้า</a>
                            <?php if($detect->isMobile()) { ?>
                            <a href="#marking" id="show-marking" class="btn btn-dir-right">ถัดไป</a>
                            <?php } else { ?>
                            <a href="marking.php" id="show-marking" class="btn btn-dir-right">ถัดไป</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php';?>
        <div class="box-modal" id="marking">
            <header>
                <h1>กำหนดจุดที่ริมฝีปาก</h1>
            </header>
            <div class="modal-content">
                <h2>ริมฝีปากในรูปของคุณเปิดอยู่หรือไม่?</h2>
                <div class="marking-area">
                    <div id="open" class="marking-sample active"><img src="assets/img/pic-modal.jpg" alt=""></div>
                    <div id="close" class="marking-sample"><img src="assets/img/pic-modal2.jpg" alt=""></div>
                </div>
                <div class="row-btn btn-tab clearfix">
                    <a href="#open" class="btn btn-border active">เปิด</a>
                    <a href="#close" class="btn btn-border">ปิด</a>
                </div>
                <p>กำหนดจุดตามตัวอย่าง โดยให้จุดสีขาวอยู่ที่ขอบของริมฝีปาก</p>
                <a href="marking.php" class="btn">ตกลง</a>
            </div>
        </div>
        <script src="assets/js/vendor/jquery.js"></script>
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
            var $ = jQuery;
            $(document).ready(function() {
                //
                var _pic = null;
                function setCPOS(){
                    //setCookie("zapx",_pic[0].offsetLeft,1/12/60/12);
                    //setCookie("zapy",_pic[0].offsetTop,1/12/60/12);
                    //setCookie("zapw",_pic[0].clientWidth,1/12/60/12);
                    sessionStorage.zaPx = _pic[0].offsetLeft;
                    sessionStorage.zaPy = _pic[0].offsetTop;
                    sessionStorage.zaWd = _pic[0].clientWidth;
                }
                //
                var iv2 = $("#pic-frame").iviewer({
                        src: "assets/img/pic.jpg",
                              zoom: 200,
                              zoom_min: 100,
                        zoom_max: 400,
                        zoom_delta: 1.4,
                        mousewheel: false,
                        ui_disabled: true,
                        onFinishLoad: function(ev, src) {
                            iv2.iviewer('center');
                            _pic = $(ev.target).find(">img");
                            setCPOS();
                        },
                        onAfterZoom: function(){
                            setCPOS();
                        },
                        onStopDrag: function(){
                            setCPOS();
                        }

                  });


                  $("#in").click(function(e){ e.preventDefault();iv2.iviewer('zoom_by', 1); }); 
                  $("#out").click(function(e){ e.preventDefault();iv2.iviewer('zoom_by', -1); });
                
                if (chkMobile.all()) {
                    $('.btn-menu').click(function(e){
                         e.preventDefault();
                         $(this).toggleClass('active');
                         $('.nav-m').toggleClass('active');
                     });

                    $('#show-marking').click(function(e){
                         e.preventDefault();
                         $('#marking').addClass('active');
                     });
                    
                    $(".btn-tab a").click(function(e) {
                        e.preventDefault();
                        $(this).addClass("active");
                        $(this).siblings().removeClass("active");
                        var tab = $(this).attr("href");
                        $(".marking-sample").not(tab).css("display", "none");
                        $(tab).fadeIn();
                    });
                }
                
            });
            
            
            
            $(window).load(function() {
                //$("body").addClass("animate");
            });
            
            
        </script>
	  	
    </body>
</html>
