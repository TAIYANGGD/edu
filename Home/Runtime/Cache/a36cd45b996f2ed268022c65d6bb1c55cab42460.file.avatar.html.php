<?php /* Smarty version Smarty-3.1.6, created on 2016-07-10 17:57:47
         compiled from "./Home/Tpl\Users\avatar.html" */ ?>
<?php /*%%SmartyHeaderCode:2637357821c1b8e6e40-77301673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36cd45b996f2ed268022c65d6bb1c55cab42460' => 
    array (
      0 => './Home/Tpl\\Users\\avatar.html',
      1 => 1467963654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2637357821c1b8e6e40-77301673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57821c1bb7d43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57821c1bb7d43')) {function content_57821c1bb7d43($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="__PUBLIC__/jcrop_zh/css/common.css" type="text/css" />
		<link rel="stylesheet" href="__PUBLIC__/jcrop_zh/css/jquery.Jcrop.css" type="text/css" />
		<script type="text/javascript" src="__PUBLIC__/jcrop_zh/js/jquery-1.3.2-min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/jcrop_zh/js/jquery.Jcrop.js"></script>

 




        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simple.css">
        <style type="text/css">
        /*ipad fix*/
        @media (min-width:992px){
            .home_module .m_cover_list li:nth-last-child(-n+3) {
                display: none;
            }
            .col-md-4{
                /*display: none;*/
            }
        }
        @media (min-width:1200px){
            .home_module .m_cover_list li:nth-last-child(-n+3) {
                *display: inline;
                display: inline-block;
                zoom:1;
            }
        }

        .content_list{
            overflow: hidden;
        }
        .content_list li img{
            height: 140px;
            width: 100px;
        }
        .content_list li{
            float: left;
            width: 100px;
            text-align: center;
            margin-right: 19px;
            margin-bottom: 20px;
        }
        .c_rating i{
            font-style: normal;
            font-size: 12px;
            vertical-align: top;
            line-height: 18px;
            /*padding-left: 10px;*/
            color: #d7b120;
        }
        .content_load{
            display: none;
            text-align: center;
        }
        .ml10{
            margin-left:100px;
        }
        </style>
        
        
      
       
        
    </head>
    <body>
    <div id="browser"></div>
 
        <div id="header">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="__APP__/Index/index">E-Sch</a>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <ul class="nav navbar-nav g_nav">

                            <li><a href="__APP__/Video/index" class="animated">视频库</a></li>
                            <li><a href="__APP__/Note/index" class="animated">手记</a></li>
                            <li><a href="__APP__/Library/index" class="animated">军火库</a></li>
                            <li><a href="__APP__/Message/index" class="animated">贴吧</a></li>
                            <li><a href="__APP__/Test/index" class="animated">考试</a></li>
                        </ul>

                        <form class="navbar-form navbar-right" role="search" action="" method="GET" autocompelte="off">
                            <div class="form-group">
                                <input type="text" name="q" class="form-control" placeholder="搜索">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                        </form>

                         <ul class="nav navbar-nav navbar-right">
                            

                            <li><a href="">提醒(0)</a></li>
                            <li class="navbar-nav-user">
                                <a class="user-avatar" href="__APP__/Users/myedu">
                                    <img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" <?php if ($_SESSION['user']['picture']=='1.jpg'){?>src="__PUBLIC__/Uploads/users/0/0.jpg"<?php }else{ ?>src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/s_<?php echo $_SESSION['user']['picture'];?>
"<?php }?> class="avatar_sm">　<?php echo $_SESSION['user']['username'];?>
</a>
                                    <span><?php echo $_SESSION['user']['username'];?>
</span>
                                </a>
                                <div class="dropdown">
                                    <a href="__APP__/Users/account"><i class="icon-user"></i> 账户</a>
                                    <a href="__APP__/Users/settings"><i class="icon-wrench"></i> 设置</a>
                                    <a href="__APP__/Users/loginout"><i class="icon-signout"></i> 退出</a>
                                </div>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

       
<div id="sub-header" class="settings_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="__APP__/Users/settings">设置</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <li><a href="__APP__/Users/settings">个人资料设置</a></li>
                <li><a href="__APP__/Users/settings/password">密码设置</a></li>
                
                
            </ul>
        </div>
    </div>
</div>



        
<div id="main">
    <div class="container">
        <div class="home_module">
            <div class="container">
                
                <div class="col-md-7">
                    
                    <div class="tt">
                        <a href="__APP__/Users/settings">取消</a>
                        <h3>更新头像</h3>
                    </div>
                    <hr>

			<iframe name="myframe" style="display:none" border="0" ></iframe>
                    

                    <form enctype="multipart/form-data" target="myframe" method="POST" action="__APP__/Users/uploadpic" class="pt30" id="avatar_form">
                        <input type="hidden" name='picfile' value="<?php echo $_SESSION['user']['username'];?>
">
                        <div class="user_avatar_upload clearfix pb30">



                                <div class="pull-left" id="did">
                                    <img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" src="<?php if ($_SESSION['user']['picture']=='1.jpg'){?>__PUBLIC__/uploads/users/0/1.jpg<?php }else{ ?>__PUBLIC__/uploads/users/<?php echo $_SESSION['user']['username'];?>
/<?php echo $_SESSION['user']['picture'];?>
<?php }?>" id="target" class="avatar_bg">
                                </div>
                                <div class="t_ml_190">
                                    从电脑中选择你喜欢的图片：
                                    <p class="c999 f12 pt10 pb10">
                                        你可以上传JPG、JPEG、GIF、PNG或BMP文件。 
                                        </p>









                                    <input type="file" accept="image/jpg, image/jpeg, image/gif, image/png, image/bmp" name="uploadImg" id="uploadImg">
                                    <div class="pt20">
                                        <button class="btn btn-default" id="-&quot;avatar_submit&quot;" type="submit">更新头像</button>
                                    </div>






                                </div>
                            </div>
                        </form>

                    

                </div>
                
                <div class="col-md-4 col-sm-offset-1">
                    <p class="c999 f12 mt50">
                        上传你喜欢的照片，随意拖拽或调整大图中的虚线方格，预览的小图即为保存后的头像图标。
                        <br><br>
                        建议上传近距离的照片（比如大头照、特写），这样经过编辑后的头像会很清楚。
                        <br><br>
                        保存成功后如果图标不更新，你可以用浏览器多刷新几次。
                    </p>
                </div>
            </div>
        </div>
    </div>
	<button style="float:left;margin-top:-590px;margin-left:270px;" class="btn btn-default mt10" onclick="doJcrop()">确定裁剪</button>

	<form action="__APP__/Users/update" method="post">
		<input type="hidden" value="" name="picture" id="picid">
		<input type="hidden" value="<?php echo $_SESSION['user']['id'];?>
" name="id">
		<input style="float:left;margin-top:-290px;margin-left:50px;" type="submit" value="保存头像设置" class="btn btn-default mt10">
	</form>
</div>
	
						
        <a id="goTop" href="javascript:void(0)" title="返回顶部"><i class="icon-angle-up"></i></a>
        <div id="footer">
            <div class="container">
                <div class="col-md-7">
                    <a href="">关于我们</a>
                    <a href="">联系我们</a>
                    <a href="">免责声明</a>
                    <a href="">作品授权</a>
                    <a href="">意见反馈</a>
                </div>


            </div>
        </div>

        <div class="modal fade" id="sys-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
    
	
	
<script type="text/javascript">
    $(function($) {

        $('#avatar_form').submit(function(){
            if(!$('#uploadImg').val()){
                alert('还没有选择图片呢')
                return false;
            }
        })

        
})
</script>
</body></html>

 <script type="text/javascript">
           
			var pic=null;
			var x=0,y=0,w=0,h=0;
			function showpic(picname){
				//alert('上传成功！文件名：'+picname);
				pic=picname;
				
				$("#picid").val(pic);
				
				$("#did").empty();
                $('<img width="140" src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/'+picname+'?id='+Math.random()+'"/>')
				.appendTo('#did')
				.Jcrop({
						onChange:showCoords,
						onSelect:showCoords,
						aspectRatio: 1, //高宽比

					});
				
			}
			
			
			//简单的事件处理程序，响应自onChange,onSelect事件，按照上面的Jcrop调用
			function showCoords(obj){
				x=obj.x; //起始位置x
				y=obj.y; //起始位置y
				w=obj.w; //宽度
				h=obj.w; //高度
			}
			
			//确定裁剪
			function doJcrop(){
				//alert(pic+"="+x+":"+y+","+w+":"+h);
				//此处ajax提交
				$.ajax({
					url:'__APP__/Users/doJcrop',
					type:'post',
					data:{'pic':pic,'x':x,'y':y,'w':w,'h':h},
					dataType:'text',
					success:function(res){
						//alert(res);
						if(res=='ok'){
							showpic(pic);
						}
					},
				});
			}
		</script>
<?php }} ?>