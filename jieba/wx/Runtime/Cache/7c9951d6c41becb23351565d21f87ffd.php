<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content="telephone=no,email=no" name="format-detection">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="viewport" content="width=device-width,height=device-heght,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="_STATIC_/2015/css/yydai/index.css">
    <link rel="stylesheet" type="text/css" href="_STATIC_/2015/css/yydai/style.css">
    <title><?php echo ($pageseo["title"]); ?></title>
        <script type="text/javascript" src="_STATIC_/2015/index/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript"> 
        $(function(){            
            if(isWeixin()) {
                $(".headers").css("display","block");
            }
        })
        //判断是否在微信中打开
        function isWeixin() {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                return true;
            } else {
                return false;
            }
        }
    </script>  
    <style type="text/css">     
    .center{width:100%;height:auto;overflow: hidden;}
    .center img{width: 100%; display: block; overflow: hidden;}
    .applyImg{background: #5495e6; color: #fff; font-size: 16px; width: 40%; height: 35px; position: fixed; left: 50%; margin-left: -20%; bottom: 5%; display: block; border-radius: 5px; line-height: 35px; text-align: center; font-family: "微软雅黑"; letter-spacing: 2px;}
    </style>
</head>
<body bgcolor="#efefef">
<header class="headers" style="display: none;">
    <a href="javascript:history.back();" class="btn_back">
        <img src="_STATIC_/2015/member/image/register/return.png">
        <font class="fl">返回</font>
    </a>
    <h1>车租宝流程</h1>    
</header>

<!--头结束-->
<div class="center">
    <img src="_STATIC_/2015/buy/image/1.jpg">
    <img src="_STATIC_/2015/buy/image/2.jpg">
    <img src="_STATIC_/2015/buy/image/3.jpg">
    <img src="_STATIC_/2015/buy/image/4.jpg">
    <img src="_STATIC_/2015/buy/image/5.jpg">
    <img src="_STATIC_/2015/buy/image/6.jpg">
    <img src="_STATIC_/2015/buy/image/7.jpg">
    <span class="applyImg">立即申请</span>
</div> 
</body>
<script type="text/javascript">
    $(".applyImg").click(function(){
        window.location.href="/buy/index?jieba=czb";
    });
</script>
</html>