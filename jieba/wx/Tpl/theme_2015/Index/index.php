<script type="text/javascript" src="_STATIC_/2015/newindex/js/touchslider.dev.js"></script>
<script type="text/javascript" src="_STATIC_/2015/index/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="_STATIC_/2015/newindex/js/fastclick.js"></script>
<script type="text/javascript" src="_STATIC_/2015/newindex/js/banner.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<link rel="stylesheet" type="text/css" href="_STATIC_/2015/css/yydai/style.css">
<link rel="stylesheet" href="_STATIC_/2015/newindex/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="_STATIC_/2015/newindex/css/index.css">
<header>
	<section class="header_div">
		<a class="btn_city fl">
			<font class="fl">上海</font>		
		</a>
    <eq name='isWeixin' value='1'>
		<a class="ico_sao">
			<img src="_STATIC_/2015/newindex/image/ico_sao.png">
		</a>
    </eq>
	</section>
</header>
<!--icon-->
<section class="swiper-container m40 bb1">
  <section class="swiper-wrapper">
    <ul class="swiper-slide">
      <li><a href="/member/jieba"><img src="_STATIC_/2015/newindex/image/jieba@2.png"></a></li>
      <li><a href="/Carinsurance/apply"><img src="_STATIC_/2015/newindex/image/chexian@2.jpg"></a></li>
      <li><a href="/credit/"><img src="_STATIC_/2015/newindex/image/xianjindai@2.png"></a></li>
      <li><a href="/borrow/borrow_flow"><img src="_STATIC_/2015/newindex/image/chedaibao@2.png"></a></li>
      <li><a href="/allot"><img src="_STATIC_/2015/newindex/image/chezubao@2.png"></a></li>  
      <li><a href="<eq name='islogin' value='1'>/member/customer_list<else/>tel:4006639066</eq>"><img src="_STATIC_/2015/newindex/image/lianxiwomen@2.png"></a></li>
      <li><a href="/pinggu/"><img src="_STATIC_/2015/newindex/image/aichegujia@2.png"></a></li>
      <li><a href="/index/zhao"><img src="_STATIC_/2015/newindex/image/zhaoshangjiamen@2.png"></a></li>     
    </ul>
    <ul class="swiper-slide">      
      <li><a href="/buy/buy_flow"><img src="_STATIC_/2015/newindex/image/czblc@2.jpg"></a></li>
      <li><a href="/credit/xjdlc"><img src="_STATIC_/2015/newindex/image/xjdlc@2.png"></a></li>
      <li><a href="/borrow/borrow_flow"><img src="_STATIC_/2015/newindex/image/cdblc@2.jpg"></a></li>
      <li><a href="/agent/order_process"><img src="_STATIC_/2015/newindex/image/sdlc@2.jpg"></a></li>
      <li><a href="/member/activity"><img src="_STATIC_/2015/newindex/image/huodong@2.png"></a></li>
      <li><a href="http://zxcf.imwork.net:86/M/login.aspx"><img src="_STATIC_/2015/newindex/image/ludan@2.png"></a></li>
      <li><a href="/member/more"><img src="_STATIC_/2015/newindex/image/gengduo@2.png"></a></li>
    </ul>  
  </section>
  <section class="swiper-pagination"></section>
</section>
<script type="text/javascript" src="_STATIC_/2015/newindex/js/swiper.min.js"></script>
<script>
     var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
$(function(){
  $("#agent_bord").click(function(){
    $order_id = $(this).attr("oid");
    window.location.href = "/agent/order_info/order_id/"+$order_id;
  })
})
</script>
<!--iconed-->
<!--news-->
<section class="tab_div news_div">
<foreach name="agent_order" item="vo">
  <section class="swiper-wrapper" id="agent_bord" onclick="javascript:return false;window.location.href='/agent/order_info/order_id/'+{$vo.id};" oid="{$vo.id}">
    <section class="swiper-slide">
      <section class="news-slide">     
        <img src="_STATIC_/2015/newindex/image/ico_sd.png" class="fl">
          <span class="fl">{$vo.remark}</span>     
        <img src="_STATIC_/2015/newindex/image/ico_blues.png" class="fl">      
      </section>   
    </section>
  </section> 
</foreach>
</section>
 <script>
    var swiper = new Swiper('.tab_div', {
        paginationClickable: true,
        direction: 'vertical',
        autoplay: 3000
    });
    </script>
<!--newed-->
<!--banner-->
<section id="wrapper">
  <section class="swipe">
    <ul id="slider">
        <foreach name="banner" item="bo">
           <li><a hr="{$bo['banner_url']}"><img class="img-banner" src="{$bo['banner']}" is_record="{$bo['record']}"/></a></li>
        </foreach>
    </ul>
    <section id="pagenavi"></section>
  </section>
</section>
<!--我与借吧-->
<section class="tab_div mb50">
	<section class="jb_head">
		<img src="_STATIC_/2015/newindex/image/ico_our.png">
		<a href="/Carlife/index">查看全部>></a>
	</section>
	<section class="jb_con">
           <input type="hidden" class="memberid" id="{$memberid}">
           <foreach name="car_list" item="vo">
              <section class="jb_one" style="position: relative;">
                 <a href="/Carlife/detail/id/{$vo['id']}" style="text-decoration:none;">
                   <img src="{$vo['images']['0']}" class="img_car">
                 </a>
                 <p><?php  
                      $contentLen = mb_strlen($vo['content'],'utf-8');
                      if($contentLen>50) $vo['content'] = mb_substr($vo['content'], 0,50,'utf-8')."......";
                      echo $vo['content'];
                 ?></p>
                 
                 <section class="jb_love" style=" position: absolute;right: 5px;bottom: 5px;width:30%;  ">
                    <font>{$vo['location']}</font>
                    <div class="clickDiv">
                      <input type="hidden" class="assed_id" value="{$vo['id']}">
                      <if condition="$vo['is_point'] eq 0">
                        <img style=" cursor: pointer; " src="_STATIC_/2015/newindex/image/ico_love.png" class="lovesImg" rel="like" id="pointClick">
                        <else/>
                        <img style=" cursor: pointer; " src="_STATIC_/2015/newindex/image/lovesBlue.png" alt="" class="lovesImg" rel="unlike" id="nopointClick"/>
                      </if>
                      <span class="clicknum sizeTwo" id="point_num">
                            <if condition="$vo['point_num'] neq null">
                                {$vo['point_num']}
                                <else/>
                                0
                            </if>
                      </span>
                    </div>
                 </section>
              </section>
           </foreach>
	</section>
</section>

<script type="text/javascript">
$(function(){
    $('.img-banner').click(function () {
      var is_record = $(this).attr('is_record');
      var url = $(this).parent("a").attr('hr');
      if (!is_record) {
          window.location.href = url;
      } else {
        $.post("/Index/bannerRecord",{'is_record':is_record},function (F) {
          window.location.href = url;
        },'json') 
      }
    })
       $('.clickDiv').on("click", ".lovesImg", function(){
              if($(".memberid").attr('id') == "null"){
                 if(confirm("需要登录才能点赞")){
                  location.href="/member/login?redirecturl=/Index/index";
                 }else{
                    return false;
                 }
              }
              var is_like = $(this).attr('rel'); 
              var mythis = $(this);
              if(is_like === 'like'){
                 var data = {};
                 $(data).attr('assed_id', $(this).prev('input').val());
                 $.post('/Index/goodpoint.html', data, function (F) 
                 {
                    var F = eval(F);
                    //alert(F.status);
                    if (F.status == 0) 
                    {
                    } else 
                    {
                      mythis.attr('src', '_STATIC_/2015/newindex/image/lovesBlue.png');
                      var befor_num = mythis.next('span').text();
                      //alert(befor_num);
                      var after_num = 1 + parseInt(befor_num);
                      mythis.next('span').html(after_num);
                      mythis.addClass("heartAnimation").attr("rel", "unlike");
                    }
                    alert(F.info);
                   }, 'json'); 
              }else{
                   var data = {};
                  $(data).attr('assed_id', $(this).prev('input').val());
                  $.post('/Index/canclepoint.html', data, function (F) 
                  {
                     var F = eval(F);
                     //alert(F.status);
                     if (F.status == 0)
                     {
                     } else 
                     {
                        mythis.attr('src', '_STATIC_/2015/newindex/image/ico_love.png');
                        var befor_num = mythis.next('span').text();
                        var after_num = parseInt(befor_num) - 1;
                        if(after_num<0)
                        {
                           after_num = 0;
                        }
                        mythis.next('span').html(after_num);
                        mythis.removeClass("heartAnimation").attr("rel", "like");
                     }
                      alert(F.info);
                   }, 'json'); 
                  
                }
      });
})
    // 注意：所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。 
    wx.config({
        debug: false,
        appId: '{$signPackage.appId}',
        timestamp: '{$signPackage.timestamp}',
        nonceStr: '{$signPackage.nonceStr}',
        signature: '{$signPackage.signature}',
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            'translateVoice',
            'startRecord',
            'stopRecord',
            'onRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'getNetworkType',
            'openLocation',
            'getLocation',
            'hideOptionMenu',
            'showOptionMenu',
            'closeWindow',
            'scanQRCode',
            'chooseWXPay',
            'openProductSpecificView',
            'addCard',
            'chooseCard',
            'openCard'
        ]
    });

    wx.error(function (res) {
        //alert(res);
    });
    var wx_location_config = function () {}
    wx_location_config.prototype.lat = '0';//维度
    wx_location_config.prototype.long = '0';//经度
    wx.ready(function () {
        wx.onMenuShareAppMessage({
            title: '借吧--注册', // 分享标题
            desc: '欢迎注册借吧-平台，快速借款给你', // 分享描述
            link: '_WWW_/member/register/recintcode/{$member_info.invitecode}', // 分享链接
            imgUrl: '_STATIC_/2015/member/image/account/heads.png', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

        wx.getLocation({
            type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {
                var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度
                wx_location_config.prototype.lat = latitude;
                wx_location_config.prototype.long = longitude;
                $.ajax({
                    'type': 'post',
                    'url': '/index/locationByGPS',
                    'dataType': 'json',
                    'data': {'lng': longitude, 'lat': latitude, 'is_ajax': 1},
                    success: function (json) {
                        if (json.status == 1)
                            $('.btn_city').html(json.data.pc);
                    }
                });
            }
        });
        $('.btn_city').click(function () {
            wx.openLocation({
                latitude: wx_location_config.prototype.lat, // 纬度，浮点数，范围为90 ~ -90
                longitude: wx_location_config.prototype.long, // 经度，浮点数，范围为180 ~ -180。
                name: '', // 位置名
                address: '', // 地址详情说明
                scale: 28, // 地图缩放级别,整形值,范围从1~28。默认为最大
                infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
            });
        });

        $('.ico_sao').click(function () {
            wx.scanQRCode({
                needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
                scanType: ["qrCode", "barCode"], // 可以指定扫二维码还是一维码，默认二者都有
                success: function (res) {
                    var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
                }
            });
        });

    });
</script>


<!-- 百度定位 -->
<eq name='isWeixin' value='0'>
<div id="allmap" style="width:400px; height:400px; overflow:hidden; margin:0;display:none"></div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4itF2ygdKkIfshFlQggs7DZA"></script>
<script type="text/javascript">
    var map = new BMap.Map('allmap');              //创建Map实例
    map.centerAndZoom("上海市", 12);              //初始化地图(设置城市名和地图缩放级别)
    map.addControl(new BMap.NavigationControl());  //添加平移缩放控件
    map.addControl(new BMap.ScaleControl());       //添加比例尺控件
    map.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件
    map.enableScrollWheelZoom();                   //启用滚轮放大缩小

    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function (r) {
        console.log('浏览器定位的状态码为：' + this.getStatus());
        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            $.ajax({
                'type': 'post',
                'url': '/index/locationByGPS',
                'dataType': 'json',
                'data': {'lng': r.point.lng, 'lat': r.point.lat, 'is_ajax': 1},
                success: function (json) {
                    if (json.status == 1)
                        $('.wxdw').html(json.data.pc);
                }
            });
            //document.getElementById('lnglat').innerHTML = '1当前坐标：' + r.point.lng + ", " + r.point.lat;
        } else {
            new BMap.LocalCity().get(function (result) {
                console.log('IP定位获取当前城市：' + result.name);
                map.setCenter(result.name);
            });
        }
    }, {enableHighAccuracy: true});



</script>
