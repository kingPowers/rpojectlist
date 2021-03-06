<include file="Public:accountMenu"/>
<link rel="stylesheet" href="_STATIC_/2015/member/css/bankacc.css">
<style type="text/css">
 #preview, .img
 {  
 width:80px;  
 height:80px; 
float:left;
margin:0px 5px;
 }  

.fileCls{position:relative;top:28px;left:-130px;z-index:1;filter: alpha(opacity=0);opacity: 0;}
.c_lefts{width:500px;height:30px;border:1px solid red;}
.checkboxs{width:20px;height:20px;float:left;}
</style>
<div class="rec_t">
    <h1 style="font-size:28px;font-family:黑体;">修改注册手机号码申请</h1> 
</div>
<form id="form_logo" action="/Member/dochangemobile" target="doingframe" method="post" enctype="multipart/form-data">
	<ul class="bank_ul">
	    <li><span class="bank_sp_l"><em>*</em> 真实姓名：</span><span>{$member['memberInfo']['names']}</span></li>
	    <li><span class="bank_sp_l"><em>*</em>原注册手机号：</span><span>{$member.mobile}</span></li>
	    <li><span class="bank_sp_l"><em>*</em> 新手机号码：</span><input type="text" autocomplete="off"  name="new_mobile" id="new_mobile" value=""></li>
	    <li id="sinacode" ><span class="bank_sp_l"><em>*</em> 获取验证码：</span>
	        <input type="text" style="width:125px;" class="zh_input" name="valid_code" id="valid_code"  autocomplete="off">
	        <button type="button" class="button sina_btn" id='smsbutton'>获取验证码</button>
	    </li>
	    <li><span class="bank_sp_l"><em>*</em> 身份证号码：</span><input type="text" name="cer_id" id="cer_id" value=""   autocomplete="off"></li>
	    <li><span class="bank_sp_l"><em>*</em> 手持身份证照片：</span>
	        <div id="preview"><img src="_STATIC_/2015//member/image/sc.jpg" alt=""/> </div>
	        <input type="file" name="logo" id="logo"  style="border-style:none;width:50px;"  onchange="preview(this)" class="fileCls"/>
	        <span style="float:left;line-height:80px;">添加图片</span>
	    </li>
	    <li  style="line-height:55px;clear:both;">
	            <input type="checkbox"  style="margin-left:130px;margin-right:5px;float:left;width:20px;margin-top:12px;" name="changemobileagree"  value="1"></input>本人同意并已确认更换注册手机号码
	    </li>
	    <li class="bank_last"><span class="bank_sp_l"></span><button type="button" class="button" id="banksubmit">提交</button></li>
	</ul>
	<input name='_change_mobile_' type="hidden" value='{$_change_mobile_}' id='_change_mobile_'/>
</form>

<div class="bank_b">
    <p>* 温馨提示：</p>
    <p>1、验证码将发送到您要更换的新手机号码上，请注意查收；</p>
    <p>2、注册手机号更改审核工作时间为3个工作日内，修改完成后，客服将电话通知用户；</p>
    <p>3、如审核未通过申请，客服将电话通知用户更改失败；</p>
</div>
<script type="text/javascript" src="_STATIC_/2015/js/jquery.form.js"></script>
<script>
    var sendtimmer = null;
    var sendsecond = 120;
    var smsbutton = $('.sina_btn');

    $(function(){
        var options;
        
        $(".sina_btn").click(function(){
            var data = {};
            $(data).attr('_change_mobile_', $("#_change_mobile_").val());
            $(data).attr('new_mobile',$("#new_mobile").val());
            if(!$("#new_mobile").val()){
                $('#new_mobile').focus();
                return top.jdbox.alert(0,'请输入新手机号码');
            }
            $.post('/Member/sendSmsChangeMobileCode.html',data,function(F){
                var F = eval(F);
                console.log(F);
                if(F.status==0){
                    return top.jdbox.alert(F.status,F.info);
                }else{
                    $("#smsbutton").attr('disabled',"disabled");
                    sendtimmer = setInterval('showTimemer()', 1000);
                    return top.jdbox.alert(F.status,F.data.msg);
                }
            },'json');
        });

        $("#banksubmit").click(function(){
            if(!$("input[name='changemobileagree']:checked").val()){
                return top.jdbox.alert(0,'请先同意更换注册手机号码');
            }
            if(!$("#valid_code").val()){
                return top.jdbox.alert(0,'请输入手机验证码');
            }
            if(!$("#cer_id").val()){
                return top.jdbox.alert(0,'请输入身份证号码');
            }
            if(!$("#new_mobile").val()){
                return top.jdbox.alert(0,'请输入新手机号码');
            }
            //var data = {};
            //$(data).attr('valid_code', $("#valid_code").val());
            //$(data).attr('cer_id', $("#cer_id").val());
            //$(data).attr('invite_mobile', $("#invite_mobile").val());
            var options = {
                url: "/Member/dochangemobile",
                type: "post",
                dataType: "json",
                success: function(o) {
                    if (o.status == 0) {
                        return top.jdbox.alert(0, o.info);
                    } else {
                        return top.jdbox.alert(1, o.info,'window.reload()');
                    }
                }
            };
            $("#form_logo").ajaxSubmit(options);
        });
        
    })

    var showTimemer = function() {
        if (sendsecond > 0) {
            smsbutton.html('重新发送 ' + sendsecond + '');
            sendsecond -= 1;
        } else {
            smsbutton.html('获取验证码');
            clearInterval(sendtimmer);
            sendtimmer = null;
            sendsecond = 119;
            smsbutton.removeAttr('disabled');
        }
    }

	//上传图片部分
    function preview(file){  
         if(!file.value==""){
            var prevDiv = document.getElementById('preview');  
            if (file.files && file.files[0]){  
	            var reader = new FileReader();  
	            reader.onload = function(evt){  
	            prevDiv.innerHTML = '<img src="' + evt.target.result + '" style="width:80px;height:80px;"/>';  
        		}
     		}    
         	reader.readAsDataURL(file.files[0]);  
	    }else{  
	      prevDiv.innerHTML = '<div class="imgs" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
	     }  
    }  
</script>
<include file="Public:accountFooter"/>