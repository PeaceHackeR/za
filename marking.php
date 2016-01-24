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
                        <h1 class="hpage hpage-marking"><span class="hstep visible-dt">Step 3</span><span class="txt-title1 fx-step01">กำหนดริมฝีปาก</span><span class="txt-title2 fx-step02 px-hide">กำหนดจุดที่ริมฝีปาก</span></h1>
                    </header>
                    <div class="content clearfix">
                        <div class="visible-dt marking fx-step01">
                            <h2>ริมฝีปากอยู่ในกรอบรูปหรือไม่?</h2>
                            <div class="marking-area">
                                <img src="assets/img/pic-modal.jpg" alt="">
                            </div>
                            <p>คุณสามารถย่อขยายหรือเลื่อนภาพ<br>เพื่อกำหนดริมฝีปาก</p>
                        </div>
                        <div class="visible-dt marking fx-step02 px-hide">
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
                        <style>
                            .content {
                                position: relative;
                            }
                            .box-control {
                                display: inline-block;
                                position: relative;
                                left: -20px;
                            }
                            .px-zoom {
                                display: inline-block;
                            }
                            .px-hide {
                                display: none !important;
                            }
                        </style>
                        <div class="row-frame">
                            <div class="frame">
                                <div id="pic-frame" class="pic-upload viewer fx-step01">
                                    <span class="logo-in"></span>
                                    <div class="color-title" style="display:none;"><img id="prop-overlay" src="assets/img/color-title-01.png" alt=""></div>
                                </div>
                                <div class="pic-upload fx-step02 px-hide">
                                    <canvas id="myStage" width="260" height="260"></canvas>
                                    <div style="display:none;" id="faceUser" class="picture" data-src="assets/img/pic.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="box-control clearfix fx-step01">
                            <div class="zoom px-zoom">
                                <a href="#" id="in" class="btn-zoom zoom-in fa fa-plus"></a>
                                <a href="#" id="out" class="btn-zoom zoom-out fa fa-minus"></a>
                                <a href="#" id="px-next" class="btn-zoom zoom-out">ตกลง</a>
                            </div>
                        </div>
                        <div class="row-btn clearfix">
                            <a href="customize.php" class="btn btn-dir-left fx-step01">ก่อนหน้า</a>
                            <a id="px-prev" href="#" class="btn btn-dir-left fx-step02 px-hide">แก้ไข</a>
                            <a href="status.php" class="btn btn-dir-right fx-step02 px-hide">ถัดไป</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php';?>
        <script src="assets/js/vendor/jquery.js"></script>
        <script src="assets/js/vendor/jqueryui.js"></script> 
	  	<!--[if lt IE 9]>
	  	<![endif]-->
	  	<script src="assets/js/easeljs/easeljs-NEXT.combined.js"></script>
	  	<script src="assets/js/easeljs/tweenjs-NEXT.combined.js"></script>
	  	<script src="assets/js/plugins.js"></script>
	  	<script src="assets/js/main.js"></script>
	  	<script src="assets/js/script.js"></script>
	  	<script type="text/javascript">
            //
            var $ = jQuery;
            $(function(){
                //
                var _pic = null;
                function setCPOS(){
                    sessionStorage.zaPx = _pic[0].offsetLeft;
                    sessionStorage.zaPy = _pic[0].offsetTop;
                    sessionStorage.zaWd = _pic[0].clientWidth;
                }
                //
                var iv2 = $("#pic-frame").iviewer({
                        src: document.getElementById("faceUser").dataset.src,
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
                //
                var _nxStep = $(".fx-step01"),
                    _nxPage = $(".fx-step02"),
                    _next = $("#px-next"),
                    _prev = $("#px-prev");
                
                _next.click(function(e){
                    e.preventDefault();
                    _nxStep.addClass("px-hide");
                    _nxPage.removeClass("px-hide");
                    _pic.addClass("px-hide");
                    init();
                });
                _prev.click(function(e){
                    e.preventDefault();
                    _nxStep.removeClass("px-hide");
                    _nxPage.addClass("px-hide");
                    _pic.removeClass("px-hide");
                })
                    
            });
            
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
            //document.body.onload = init;
        </script>
	  	
    </body>
</html>
