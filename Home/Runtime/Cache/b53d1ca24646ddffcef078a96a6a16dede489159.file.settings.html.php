<?php /* Smarty version Smarty-3.1.6, created on 2016-07-09 16:54:44
         compiled from "./Home/Tpl\Users\settings.html" */ ?>
<?php /*%%SmartyHeaderCode:22535780bbd44efcb7-24703039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53d1ca24646ddffcef078a96a6a16dede489159' => 
    array (
      0 => './Home/Tpl\\Users\\settings.html',
      1 => 1467964203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22535780bbd44efcb7-24703039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5780bbd488054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5780bbd488054')) {function content_5780bbd488054($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Public/head2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<div id="sub-header" class="settings_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="__APP__/Users/settings">设置</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <li class="active"><span id="mysetting"><a href="javascript:void(0)">个人资料设置</a></span></li>
                <li><span id="setpass"><a href="javascript:void(0)">密码设置</a></span></li>
                <li><a href="__APP__/Users/myedu">返回</a></span></li>
            </ul>
        </div>
    </div>
</div> 

<script>
	$(function (){
		$("#mysetting").click(function (){
			$("#mysetting").parent().addClass("active");
			$("#setpass").parent().removeClass("active");
			$("#setpassword").hide();
			$("#setting").show();
		});
		$("#setpass").click(function (){
			$("#mysetting").parent().removeClass("active");
			$("#setpass").parent().addClass("active");
			$("#setpassword").show();
			$("#setting").hide();
		});
	});
</script>




        
<div id="main">
    <div class="container">
        <div class="home_module">
            <div class="container">
                
                <div class="col-md-7" id="setting" style="display:block;">
                    
                    <div class="tt">
                        <h3>个人资料设置</h3>
                    </div>
                    <hr>
                    <form id="profile-form" name="myform" class="mt30 form-horizontal" autocomplete="off" action="__APP__/Users/updateset" onsubmit="return doCheck();" method="POST">
                        
					<input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'];?>
">

                        <div class="form-group clearfix">
                            <div style="margin-left:-10px;"><label class="control-label col-md-2">头像设置</label></div>
                            <div class="col-md-6 settings_avatar">
                                <div class="clearfix mb10">
                                    <div class="pull-left">
                                        <img height='85' width='85' alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" src="<?php if ($_SESSION['user']['picture']=='1.jpg'){?>__PUBLIC__/uploads/users/0/1.jpg<?php }else{ ?>__PUBLIC__/uploads/users/<?php echo $_SESSION['user']['username'];?>
/<?php echo $_SESSION['user']['picture'];?>
<?php }?>" class="avatar_bg">
                                    </div>
                                    <div class="t_ml_190">
                                        <img height='50' width='50' alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" src="<?php if ($_SESSION['user']['picture']=='1.jpg'){?>__PUBLIC__/uploads/users/0/1.jpg<?php }else{ ?>__PUBLIC__/uploads/users/<?php echo $_SESSION['user']['username'];?>
/<?php echo $_SESSION['user']['picture'];?>
<?php }?>" class="avatar_md">
                                    </div>
                                </div>
                                <a href="__APP__/Users/avatar" class="btn btn-default">更新头像</a>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <div style="margin-left:-10px;"><label class="control-label col-md-2">姓名</label></div>
							<span id="tishi1" style="margin-top:50px;" class="Validform_checktip">请输入你的名字</span>

                            <div class="col-md-6">
                                <input class="form-control input-lg" id="name" name="name" size="30" style="background:#fff;" type="text" onblur="checkName()" value="<?php echo $_SESSION['user']['name'];?>
">
                            </div>
                            <div class="col-md-4 f12"></div>
                        </div>
                        <div class="form-group clearfix">
                            <div style="margin-left:-10px;"><label class="control-label col-md-2">性别</label></div>

                            <div class="col-md-6">
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="sex" value="1" <?php if ($_SESSION['user']['sex']=='1'){?>checked<?php }?>>
                                        男
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="sex" value="2" <?php if ($_SESSION['user']['sex']=='2'){?>checked<?php }?>>
                                        女
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="sex" value="0" <?php if ($_SESSION['user']['sex']=='0'){?>checked<?php }?>>保密
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 f12">
                                
                            </div>
                        </div>
						
						
						
						<div class="form-group clearfix">
                            <div style="margin-left:-10px;"><label class="control-label col-md-2">年龄</label></div>
                            <div class="col-md-6">
                                <input class="form-control input-lg" id="age" name="age" class="age" style="background:#fff;" size="30" type="text" value="<?php echo $_SESSION['user']['age'];?>
" onblur="checkAge()" errormsg="1-100的整数">
								<span id="tishi2" class="Validform_checktip">1-100的整数</span>

                            </div>
                            <div class="col-md-4 f12"></div>
                        </div>
						
						
                        <div class="form-group clearfix">
                            <div style="margin-left:-10px;"><label class="control-label col-md-2">我的简介</label></div>
                            <div class="col-md-6">
                                <textarea id="profile_intro" class="form-control charsFrom" maxlength="200" name="introduce" rows="4"><?php echo $_SESSION['user']['introduce'];?>
</textarea>
                                <span class="Validform_checktip">不超过200字</span>
                            </div>
                            <div class="col-md-4 f12"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6  col-md-offset-2">
                                <button id="sub2" class="btn btn-primary btn-lg">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
				
				
				
				
				
				
				
           
			<div id="setpassword" style="display:none;">
					<div class="col-md-7">
                    
                    <div class="tt">
                        <h3>密码设置</h3>
                    </div>
                    <hr>
                    <form id="password-from" class="mt30 form-horizontal" autocomplete="off" action="__APP__/Users/updatepassword" method="POST" onsubmit="return checkPass();">
                        <div class="form-group">
                            <label class="control-label col-md-2">旧密码</label>

                            <div class="col-md-6">
                                <input class="form-control col-md-3 input-lg" id="pass" onblur="checkPass()" name="password" size="30" type="password" placeholder="旧密码" datatype="*6-16" nullmsg="请填写密码" errormsg="密码范围在6~16位之间" plugin="passwordStrength">
                                <span id="tishi6" class="Validform_checktip">请输入原密码</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">新密码</label>

                            <div class="col-md-6">
                                <input class="form-control col-md-3 input-lg" id="new_pass" onblur="checkNewpass()" name="new_password" size="30" type="password" placeholder="新密码" datatype="*6-16" nullmsg="请填写新密码" errormsg="密码范围在6~16位之间" plugin="passwordStrength">
                                <span id="tishi7" class="Validform_checktip">6-16个字符</span>
                                <div class="passwordStrength" style="display:none;"><b>密码强度：</b> <span>弱</span><span>中</span><span class="last">强</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">重复新密码</label>
                            <div class="col-md-6">
                                <input class="form-control input-lg col-md-3" id="re_new_pass" onblur="checkreNewpass()" name="re_new_password" size="30" type="password" placeholder="重复新密码" datatype="*6-16" recheck="new_password" nullmsg="请再输入一次密码" errormsg="两次输入的密码不一致" plugin="passwordStrength">
                                <span id="tishi8" class="Validform_checktip"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6  col-md-offset-2">
                                <input type="submit" id="sub" value="保存" class="btn btn-primary btn-lg">
                            </div>
                        </div>
                    </form>
                <div class="col-md-4 col-sm-offset-1"></div>
            </div></div>
			
			
	</div>		
			
		 </div>
		 </div>    	
			
			</div>
			
       
<script type="text/javascript">
			//表单验证函数
			function doCheck(){
				return checkName() && checkAge();
			}
			
			//验证姓名方法
			function checkName(){
				var name = document.myform.name.value;
				if(name.length==0 || name.trim()==''){
				//alert("姓名信息错误！");
					//document.myform.name.style.background="red';
					$("#name").css("background","#e76e66");
					$("#tishi1").text("姓名不能为空！");
					$("#tishi1").css("color","#e76e66");
					$("#sub2").attr("disabled",'1');
					return false;
				}else{
					$("#name").css("background","#fff");
					$("#tishi1").text("正确！");
					$("#tishi1").css("color","#999");
					$("#sub2").attr("disabled",null);
					return true;
				}
				return true;
			}
			
			//验证年龄方法
			function checkAge(){
				var age = document.myform.age.value;
				if(age.match(/^[1-9][0-9]*$/)==null || age>99){
					$("#age").css("background","#e76e66");
					$("#tishi2").text("年龄输入错误！");
					$("#tishi2").css("color","#e76e66");
					$("#sub2").attr("disabled",'1');
					return false;
				}else{
					$("#age").css("background","#fff");
					$("#tishi2").text("年龄输入正确！");
					$("#tishi2").css("color","#999");
					$("#sub2").attr("disabled",null);
					return true;
				}
				return true;
			}
		</script>
		
		
		<script type="text/javascript">
			//密码表单验证函数
			function checkPass(){
				return checkOldpass() && checkreNewpass() && checkNewpass();
			}
			
			//验证姓名方法
			function checkOldpass(){
				var pass = $("#pass").val();
				//alert(pass);
				$.ajax({
					data:{'pass':pass},
					dataType:'text',
					url:'__APP__/Users/editcheckpass',
					type:'post',
					success:function(res){
						if(res=='ok'){
							$("#pass").css("background","#fff");
							$("#tishi6").text("密码正确！");
							$("#tishi6").css("color","#999");
							$("#sub").attr("disabled",null);
							return 1;
						}else{
							$("#pass").css("background","#e76e66");
							$("#tishi6").text("原密码输入错误！");
							$("#tishi6").css("color","#e76e66");
							$("#sub").attr("disabled","1");
							return false;
						}
					},
				});
		
				if(pass.length==0 || pass.trim()==''){

					$("#pass").css("background","#e76e66");
					$("#tishi6").text("原密码输入错误！");
					$("#tishi6").css("color","#e76e66");
					$("#sub").attr("disabled","1");
					return false;
				}
				return true;
			}
			
			//验证新密码方法
			function checkNewpass(){
				var newpass = $("#new_pass").val();
			
				if(newpass.length==0 || newpass.trim()==''){

					$("#new_pass").css("background","#e76e66");
					$("#tishi7").text("新密码不能为空！");
					$("#tishi7").css("color","#e76e66");
					$("#sub").attr("disabled","1");
					return false;
				}
				if(newpass.match(/[a-zA-Z0-9]{6,16}$/)==null){
					$("#new_pass").css("background","#e76e66");
					$("#tishi7").text("新密码为6-16位！");
					$("#tishi7").css("color","#e76e66");
					$("#sub").attr("disabled","1");
					return false;
				}else{
					$("#new_pass").css("background","#fff");
					$("#tishi7").text("新密码格式正确！");
					$("#tishi7").css("color","#999");
					$("#sub").attr("disabled",null);
					return true;
				}
				
				return true;
			}
			function checkreNewpass(){
				var newpass = $("#new_pass").val();
				var renewpass = $("#re_new_pass").val();
				if(newpass.length==0 || newpass.trim()==''){

					$("#new_pass").css("background","#e76e66");
					$("#tishi7").text("新密码不能为空！");
					$("#tishi7").css("color","#e76e66");
					$("#sub").attr("disabled","1");
				}
				if(newpass.match(/[a-zA-Z0-9]{6,16}$/)==null){
					$("#new_pass").css("background","#e76e66");
					$("#tishi7").text("新密码为6-16位！");
					$("#tishi7").css("color","#e76e66");
					$("#sub").attr("disabled","1");
				}else{
					$("#new_pass").css("background","#fff");
					$("#tishi7").text("新密码格式正确！");
					$("#tishi7").css("color","#999");
					
					
					
					if(newpass==renewpass && renewpass.length!=0){
						$("#re_new_pass").css("background","#fff");
						$("#tishi8").text("重复密码正确！");
						$("#tishi8").css("color","#999");
						$("#sub").attr("disabled",null);

						return true;
					
					}else{
						$("#re_new_pass").css("background","#e76e66");
						$("#tishi8").text("重复密码错误！");
						$("#tishi8").css("color","#999");
						$("#sub").attr("disabled","1");

						return false;
					}
			
				}
				
				return true;
			}
			
			
		</script>




        <?php echo $_smarty_tpl->getSubTemplate ("../Public/foot2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<?php }} ?>