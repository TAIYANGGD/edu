<?php /* Smarty version Smarty-3.1.6, created on 2016-09-18 16:11:13
         compiled from "./Home/Tpl\Video\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:1645857de4c21dead66-45713143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a336d7eaaab39ab895bd7f0eec1d5f57dc02d2' => 
    array (
      0 => './Home/Tpl\\Video\\upload.html',
      1 => 1467992682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645857de4c21dead66-45713143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57de4c220c9e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57de4c220c9e7')) {function content_57de4c220c9e7($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>实验资源添加</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simple.css">
        <!--包含进uploadify上传的css和js文件-->
        <link rel="stylesheet" type="text/css" href='__PUBLIC__/uploadify/css/uploadify.css' />
        <script type="text/javascript" src="__PUBLIC__/uploadify/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/uploadify/js/jquery.uploadify-3.1.min.js"></script>

       
        <script language="JavaScript">
var img_id_upload=new Array();//初始化数组，存储已经上传的图片名
var i=0;//初始化数组下标
$(function() {
$('#file_upload').uploadify({
'auto'     : false,//关闭自动上传
'removeTimeout' : 60,//文件队列上传完成1秒后删除
'swf'      : '__PUBLIC__/uploadify/js/uploadify.swf',
'uploader' : '__URL__/fileupload',
'folder'    : '__PUBLIC__/Uploads/video/',//要上传到的服务器路径，默认‘/’
'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
//'formData':{'id':'6'},//在服务端使用$_POST['id']获取该数据,服务端代码上传成功后将在目录生成一个6.txt的文件
'buttonText' : '选择视频',//设置按钮文本
'multi'    : false,//不允许上传多个文件
'uploadLimit' : 1,//一次最多只允许上传一个视频
'fileTypeDesc' : 'ALL Files',//只允许上传视频
'fileTypeExts' : '*.swf',//限制允许上传的视频后缀
'fileSizeLimit' : '200000000000KB',//限制上传的视频大小
//每次成功上传后执行的回调函数，从服务端返回数据到前端\
'onUploadSuccess' : function(file, data, response) {
img_id_upload[i]=data;
i++;
//alert(data);//将返回的值添加到隐藏表单中然后让其提交 实现数据库的添加
var video = jQuery.parseJSON(data);
$("input[name='name']").val(video.name);
$("input[name='picname']").val(video.picname);
$("input[name='size']").val(video.size);
$("input[name='type']").val(video.type);
$("#addvideo").submit();//让表单提交
//alert("aaaaaaaaaa");
},

});
});
    </script>
    </head>
    <body>
    <div id="browser"></div>
 
    <?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<div id="sub-header" class="group_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="">视频库</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <li id="navbarli" class="active"><a href="__APP__/Video/index" class="videolist">视频精选</a></li>
                
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="navbar-left">
                <li id="usupload"><a href="__URL__/index/uid/<?php echo $_SESSION['user']['id'];?>
" ><i class="icon-list"></i> 我上传的</a></li>
                <li><a href="__URL__/index/collid/<?php echo $_SESSION['user']['id'];?>
"><i class="icon-list"></i> 我收藏的</a></li>
            </ul>
        </div>
    </div>
</div>



        
<div id="main">
    <div class="container">
        <div class="home_module m_movie">
            <div class="container">
                <!-- 左侧 -->
                <div class="col-md-8">

                    <!-- 我购买的 -->
                    <div class="tt col-sm-offset-3" style="margin:0 auto;padding-left:20%">
                        <h3>上传我的作品</h3>
                    </div>


                    <div class="ui three large steps col-md-offset-3 col-md-8 p0 mb20 row" style="float:none;margin:0 auto;">
                        <div class="ui active step">填写信息</div>
                        <div class="ui active step">上传视频</div>
                        <div class="ui disabled step">等待审核</div>
                    </div>
                    <!--定义隐藏表单域执行视频信息的添加-->
                    <form action="__APP__/Video/addvideo" id="addvideo" method="post">
                        <input type="hidden" name="uid" value="<?php echo $_SESSION['user']['id'];?>
">
                        <input type="hidden" name="tid" value="<?php echo $_SESSION['user']['video']['tid'];?>
">
                        <input type="hidden" name="videoname" value="<?php echo $_SESSION['user']['video']['videoname'];?>
">
                        <input type="hidden" name="descr" value="<?php echo $_SESSION['user']['video']['descr'];?>
">
                        <input type="hidden" name="name" value="">
                        <input type="hidden" name="picname" value="">
                        <input type="hidden" name="size" value="">
                        <input type="hidden" name="type" value="">
                    </form>
                    
                    <!--上传视频的模块-->
                    
                    <div id="film_upload" style="padding-left:35%;background-color:white;width:100%;padding-top:50px;margin:0 auto;">
                        <input type="file" name="file_upload" id="file_upload"/><span style="color:red">只支持swf格式</span>
                    </div>
                    <div class="form-group pt20">
                        <div class="tc" style="width:500px;margin:0 auto">
                            <a id="f_button" class="btn btn-primary btn-lg" href="javascript:$('#file_upload').uploadify('upload','*');">开始上传资源</a>&nbsp;&nbsp;&nbsp;
                            <a id="f_button" class="btn btn-primary btn-lg" href="javascript:$('#file_upload').uploadify('cancel','*')">重置资源</a>
                        </div>
                    </div>
                    
                    <!--上传视频的模块-->
                    
                </div>

                <!-- 右侧 -->
                <div class="col-md-4">
                    <div class="bg_f5 p20 mt40 f12">
                        上传资源，即表示您已同意<a data-toggle="modal" href="#myModal">上传服务条款</a>，请勿上传垃圾等不合理资源。
                        <br/>
                        <i>如资源上传失败,请与我们管理员联系 996204024@qq.com</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">上传服务条款</h4>
            </div>
            <div class="modal-body">
                在线物理实验平台郑重提醒您:<br><br>
                为响应国家九部委联合开展深入整治互联网和在线教学的号召，营造一个健康便捷的网络教学环境，给大家一个和谐的家园。<br>
                <ul class="list_pb5 f12 p10">
                    <li>不得上传任何有违国家法律法规的资源。</li>
                    <li>不得上传具有色情内容的资源。</li>
                    <li>不得上传内容低俗，格调不高的资源。</li>
                    <li>不得上传具有色情诱导性内容的资源。</li>
                    <li>不得在标题、简介和标签中出现任何具有低俗色情含义的字眼。</li>
                    <li>不含有涉及版权问题的资源。</li>
                </ul>
                如果您上传了这些内容，我们将一律予以删除，我们希望我们最珍贵的网友们，理解并监督我们。
            </div>
            
        </div>
    </div>
</div>
    

        <?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html>
<?php }} ?>