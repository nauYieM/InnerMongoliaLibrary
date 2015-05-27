<?
require_once "jssdk.php";
$jssdk = new JSSDK("wx0b97c4ea54268a70","497e00f489a5513ebb705baa4a01b948");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>二十二世纪-限时GO-母亲节诚献</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Link Swiper's CSS -->
         <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.3.0/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.my22cn.com/Swiper-3.0.7/dist/css/swiper.min.css">
       <link rel="stylesheet" href="http://www.my22cn.com/Swiper-3.0.7/dist/css/animate.min.css">

    <!-- Demo styles -->
   
    <style>
    /* GPU加速*/
    * {
    -webkit-transform: translatez(0);
    -moz-transform: translatez(0);
    -ms-transform: translatez(0);
    -o-transform: translatez(0);
    transform: translatez(0);

}
.swiper-button-next{background:none;position:absolute;top:98%;left:49%;right:49%;}
.jbtn{color:#ffffff;background-color:#782d00;border-color:#782d00;}
  .jbtn:hover{color:#ffffff;background-color:#853301;border-color:#782d00;}
    html, body {
        position: relative;
        height: 100%;
    }
   .pos
{
  position:fixed;
  right:0;
  top:0; z-index: 999; display:none;

  }
  #share{ 
     width:100%; height:200%; background-color:#000000; opacity:0.8; -moz-opacity:0.8; filter:alpha(opacity=80);}

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
        font-family:"Microsoft YaHei";
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
   
.warp{
  width:100%;
  height:100%; 
  overflow:hidden;
}
.page{
  width:640px;
  height:100%; 
  overflow:hidden; 
  position:relative;
}
#pageload{
  width:100%;
  height:100%;
  position:fixed;
  top:0;
  left:0; 
  z-index:999; 
  background:url(./img/swiper1/logo.png) no-repeat center center #444444;
}

    </style>
    <!--移动端版本兼容 -->
<script type="text/javascript">

    var phoneWidth =  parseInt(window.screen.width);
    var phoneScale = phoneWidth/640;
    var ua = navigator.userAgent;
    if (/Android (\d+\.\d+)/.test(ua)){
        var version = parseFloat(RegExp.$1);
        if(version>2.3){
            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
        }else{
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        }
    } else {
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
    }
</script>
<!--移动端版本兼容 end -->
</head>
<body style="background:#262521">
    <div id="pageload"></div>
    <!-- Swiper -->
    <div class="warp swiper-container swiper-container-h">
      
        <div class="swiper-wrapper">
          
           <div class="swiper-slide">
          
            <div class="page swiper-slide " style="background:#ffffff;background:url(./img/huodong4/bg1.jpg) no-repeat left top;background-size:100% 100%;">
                
                <!--Slide 1-->
                <img class="ani" swiper-animate-effect="pulse" swiper-animate-duration="0.5s" swiper-animate-delay="1.6s" style="position:absolute;left:5%;top:4%;width:40%;" src="./img/swiper1/logo.png"/>
                <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="1.6s" style="position:absolute;left:20%;top:11%;width:70%;" src="./img/huodong4/bt1.2.png"/>
                <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="1.8s" style="position:absolute;left:1%;top:13%;width:99%;" src="./img/huodong4/bt1.1.png"/>
                <img class="ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="1.8s" style="position:absolute;bottom:28%;left:0px;width:100%;" src="./img/huodong4/bt2.png"/>
                <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="2s" style="position:absolute;bottom:22%;left:31%;right:31%;color:#ffffff;font-size:30px;">马来西亚沉香手珠</div>
                <img class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="2.2s" style="position:absolute;bottom:4%;right:0px;width:71%;" src="./img/huodong4/bt3.1.png"/>
                <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2.4s" style="position:absolute;bottom:15%;right:5%;width:20%;" src="./img/huodong4/bt3.2.1.png"/>
                <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2.6s" style="position:absolute;bottom:15%;right:5%;width:20%;" src="./img/huodong4/bt3.2.2.png"/>
                <a class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2.8s" style="position:absolute;bottom:9%;right:1%;" target="_blank" href="http://zc.my22cn.com/index.php?ctl=deal&act=show&id=136">
                <img style="width:87%"  src="./img/huodong4/bt3.3.png"/>
                </a>
                <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="2.2s" style="position:absolute;bottom:5%;right:5%;color:#ffffff;font-size:22px;">活动时间5月9日~5月12日</div>
                <i class="swiper-button-next am-icon-angle-down am-icon-lg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="2.4s" style="color:#ffffff;"></i>
            </div> 
            
            </div> 
             <div class="swiper-slide">
              <!--<div class="am-show-landscape swiper-slide" style="font-size:26px;color:#ffffff;width:100%;height:100%;">
             请换成竖屏观看哦！
            </div>-->
            <div class="page swiper-slide " style="background:#ffffff;background:url(./img/huodong4/bg2.jpg) no-repeat left top;background-size:100% 100%;">
                <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.2s" swiper-animate-delay="0.3s" style="position:absolute;left:2%;top:5%;width:80%;" src="./img/huodong4/nr1.png"/>
               <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.8s" style="position:absolute;right:10%;top:5%;width:12%;" src="./img/huodong4/nr2.png"/>
               <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.8s" style="position:absolute;right:5%;bottom:6%;width:35%;" src="./img/huodong4/nr2.1.png"/>
               

               <i class="swiper-button-next am-icon-angle-down am-icon-lg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1s" style="color:#ffffff;"></i>
            </div>
           
            </div>
             <div class="swiper-slide">
          
            <div class="page swiper-slide " style="background:#ffffff;background:url(./img/huodong4/bg3.jpg) no-repeat left top;background-size:100% 100%;">
                <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s" style="position:absolute;left:0px;top:10px;width:100%;" src="./img/huodong4/nr3.png"/>
              <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.6s" style="position:absolute;left:7%;top:5%;width:10%;" src="./img/huodong4/nr3.1.png"/>
               <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.6s" style="position:absolute;right:7%;bottom:8%;width:29%;" src="./img/huodong4/nr3.2.png"/>
                <i class="swiper-button-next am-icon-angle-down am-icon-lg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.5s" style="color:#ffffff;"></i>
            </div>
           
            </div>
             <div class="swiper-slide">
          
            <div class="page swiper-slide " style="background:#ffffff;background:url(./img/huodong4/bg5.jpg) no-repeat left top;background-size:100% 100%;">
                <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s" style="position:absolute;right:20%;top:20%;width:7%;" src="./img/huodong4/nr5.1.png"/>
              <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="0.6s" style="position:absolute;right:38%;top:20%;width:35%;" src="./img/huodong4/nr5.2.png"/>
              
                <i class="swiper-button-next am-icon-angle-down am-icon-lg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.5s" style="color:#ffffff;"></i>
            </div>
           
            </div>
           
             <div class="swiper-slide">
              
             <div class="page swiper-slide " style="background:#ffffff;background:url(./img/huodong4/bg4.jpg) no-repeat left top;background-size:100% 100%;">
               <div class="pos"id="share" onclick="hid()"><img src="./img/share.png"width="100%"/></div>
                <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="0.1s" style="position:absolute;left:0px;top:0px;width:100%;" src="./img/huodong4/nr4.jpg"/>
               <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.6s" style="position:absolute;right:5%;top:3%;width:8%;" src="./img/huodong4/nr4.1.png"/>
              <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="1.1s" style="position:absolute;right:16%;top:3%;width:36%;" src="./img/huodong4/nr4.2.png"/>
            <img class="ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="1.5s" style="position:absolute;right:0px;bottom:20%;width:100%;" src="./img/huodong4/buybg.jpg"/>
             <img class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s" swiper-animate-delay="1.8s" style="position:absolute;left:3%;bottom:22%;width:30%;" src="./img/huodong4/GOlogo.png"/>
             <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2s" style="position:absolute;left:40%;bottom:26%;width:25%;" src="./img/huodong4/buy1.png"/>
             <img class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2s" style="position:absolute;left:48%;bottom:22%;width:18%;" src="./img/huodong4/buy2.png"/>
           <a class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.5s" swiper-animate-delay="2.4s" style="position:absolute;right:2%;bottom:20%;" target="_blank" href="http://zc.my22cn.com/index.php?ctl=deal&act=show&id=136">
            <img style="width:92%;"  src="./img/huodong4/buybg2.png"/>
             
            <a class="ani" swiper-animate-effect="bounceIn" swiper-animate-duration="2s" swiper-animate-delay="2.6s" style="position:absolute;right:11%;bottom:22%;" target="_blank" href="http://zc.my22cn.com/index.php?ctl=deal&act=show&id=136">
            <img style="width:100%;"  src="./img/huodong4/buy3.png"/>
             </a>
    <a target="_blank"  href="http://zc.my22cn.com/" class="ani" swiper-animate-effect="zoomInDown" swiper-animate-duration="0.5s" swiper-animate-delay="2.8s" style="position:absolute;right:10%;bottom:8%;">
      <img style="width:90%"  src="./img/huodong4/btn2.png"/>
    </a>
  
    <a onclick="show_tip();" id="fx" href="javascript:" class="ani" swiper-animate-effect="zoomInDown" swiper-animate-duration="0.5s" swiper-animate-delay="2.8s" style="position:absolute;left:10%;bottom:8%;"  >
    <img style="width:90%" src="./img/huodong4/btn1.png"/>
    </a>
 <div style="position:absolute;color:#5c4949;font-size:18px;bottom:3px;right:30%;left:30%;">www.my22cn.com</div>
            </div>
           
            </div>
        </div>
     
             
        <!-- Add Pagination 
        <div class="swiper-pagination"></div>-->
    </div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>



<script>

function show_tip()
{
  $("#share").show();
}
function hid(){$("#share").hide()}
wx.config(
  {
    appId:'<?php echo $signPackage["appId"];?>',
    timestamp:<?php echo $signPackage["timestamp"];?>,
    nonceStr:'<?php echo $signPackage["nonceStr"];?>',
    signature:'<?php echo $signPackage["signature"];?>',
    jsApiList:["onMenuShareTimeline","onMenuShareAppMessage"]
  }
  );
wx.ready(function(){
  
    wx.onMenuShareTimeline(
      { imgUrl:'http://www.my22cn.com/zxzt/fp/img/huodong4/aaa.jpg',
      title:'二十二世纪-限时GO-母亲节诚献',
      link:'http://www.my22cn.com/zxzt/fp/mothersDay.php',
      
      trigger:function(res){},
      success:function(res){hid();},
      cancel:function(res){hid();},
      fail:function(res){}
      }
      );

wx.onMenuShareAppMessage({
   imgUrl:'http://www.my22cn.com/zxzt/fp/img/huodong4/aaa.jpg',
    desc: '母亲节送什么？答案都在这里啦！', 
    title:'二十二世纪-限时GO-母亲节诚献',
    link:'http://www.my22cn.com/zxzt/fp/mothersDay.php',
  
    type: '', // 分享类型,music、video或link，不填默认为link
    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
    success: function () { 
      hid();

        // 用户确认分享后执行的回调函数
    },
    cancel: function () { 
      hid();
        // 用户取消分享后执行的回调函数
    }
});
});

function is_weixn(){  
    var ua = navigator.userAgent.toLowerCase();  
    if(ua.match(/MicroMessenger/i)=="micromessenger") {  
        return true;  
    } else {  
        return false;  
    }  
};

</script>

    <!-- Swiper JS -->
   <script src="http://www.my22cn.com/Swiper-3.0.7/dist/js/swiper.min.js"></script>
    <script src="http://www.my22cn.com/Swiper-3.0.7/dist/js/swiper.animate.min.js"></script>

   
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://cdn.amazeui.org/amazeui/2.3.0/js/amazeui.min.js"></script>

<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
    <!-- Initialize Swiper -->
    <script>
$(function(){

  setTimeout(function(){
    $("#pageload").fadeOut();
  },1500);

 var swiperH = new Swiper('.swiper-container-h', {
        pagination: '.swiper-pagination-h',
        paginationClickable: true,
        direction: 'vertical',
        nextButton: '.swiper-button-next',
        spaceBetween: 50,
        //初始化时隐藏元素并在需要的时刻开始动画。
  onInit: function(swiper){
   swiperAnimateCache(swiper);
   swiperAnimate(swiper);

      },
   onSlideChangeEnd: function(swiper){
    swiperAnimate(swiper);
    }, 
    });
    var swiperV = new Swiper('.swiper-container-v', {
        pagination: '.swiper-pagination-v',
        paginationClickable: true,
        
        spaceBetween: 50
    });


});

/*
     var mySwiper = new Swiper ('.swiper-container', {
   nextButton: '.swiper-button-next',
   paginationClickable: true,
   direction : 'vertical',
    mousewheelControl: true,
*/

   //初始化时隐藏元素并在需要的时刻开始动画。
  /* onInit: function(swiper){
   swiperAnimateCache(swiper);
   swiperAnimate(swiper);

      },
   onSlideChangeEnd: function(swiper){
    swiperAnimate(swiper);
    },    
  

       })         
*/
    </script>
</body>
</html> 
