<?php /* Smarty version Smarty-3.1.6, created on 2016-07-08 23:53:28
         compiled from "D:\wamp\www\edu\Home\Tpl\Public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:19628577fcc78b342e7-45164007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d203b819ba70cf17f46031d2daefdeaa5fc4f8' => 
    array (
      0 => 'D:\\wamp\\www\\edu\\Home\\Tpl\\Public\\head.html',
      1 => 1467967327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19628577fcc78b342e7-45164007',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_577fcc78c3187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577fcc78c3187')) {function content_577fcc78c3187($_smarty_tpl) {?>        <div id="header" style="font-family:'Microsoft Yahei';">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="__APP__/Index/index">在线物理实验平台</a>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <ul class="nav navbar-nav g_nav">
                            <li><a href="__APP__/Video/index">视频</a></li>
                            <li><a href="__APP__/Note/index">手记</a></li>
                            <li><a href="__APP__/Library/index">文库</a></li>
                            <li><a href="__APP__/Message/index">贴吧</a></li>
                            <?php if ($_SESSION['user']){?>
                            <li><a href="__APP__/Test/index">测验</a></li>
                            <?php }else{ ?>
                            <li><a href="javascript:alert('请先登录！')">测验</a></li>
                            <?php }?>
                        </ul>

                        <form class="navbar-form navbar-right" role="search" action="__APP__/Cat/show" method="GET" autocompelte="off">
                            <div class="form-group">
                                <input type="text" name="q" class="form-control" placeholder="搜索">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="icon-search">搜索</i></button>
                        </form>

                        <ul class="nav navbar-nav navbar-right" id="userinfo">

                            <?php if ($_SESSION['user']){?>
                            <li><a href="__APP__/Message/mynews">提醒(<?php if ($_SESSION['user']['hfnum']){?><?php echo $_SESSION['user']['hfnum'];?>
<?php }else{ ?>0<?php }?>)</a></li>
                            <li class="navbar-nav-user">
                                <a class="user-avatar" href="__APP__/Users/myedu">
                                    <img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" <?php if ($_SESSION['user']['picture']=='1.jpg'){?>src="__PUBLIC__/Uploads/users/0/0.jpg"<?php }else{ ?>src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/s_<?php echo $_SESSION['user']['picture'];?>
"<?php }?> class="avatar_sm">　<?php echo $_SESSION['user']['username'];?>
</a>
                                </a>
                                <div class="dropdown">
                                    <a href="__APP__/Users/settings"><i class="icon-wrench"></i> 设置</a>
                                    <a href="__APP__/Users/loginout"><i class="icon-signout"></i> 退出</a>
                                </div>
                            </li>
                            <?php }else{ ?>
                            <li><a href="__APP__/Index/index">首页</a></li>
                            <li><a href="__APP__/Users/login">登录</a></li>
                            <li><a href="__APP__/Users/index">注册</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         <script type="text/javascript">
            $(function(){
                // 导航搜索框
                $('#header .navbar-form input').focus(function(){
                    $(this).attr('placeholder', '视频、资源、手记、帖子')
                    //$(this).parents('.navbar-form').eq(0).addClass('search_opend')
                    $(this).animate({width: '+250px'}, "fast");
                    $("#userinfo").fadeOut("fast");
                }).blur(function(){
                    $(this).attr('placeholder', '搜索')
                    //$(this).parents('.navbar-form').eq(0).removeClass('search_opend')
                    $(this).animate({width: '70px'}, "fast");
                    $("#userinfo").show(1000);
                })       
                //设置头部的图片滚动
                
            })
        </script>
<?php }} ?>