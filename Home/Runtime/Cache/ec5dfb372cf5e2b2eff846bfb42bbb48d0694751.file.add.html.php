<?php /* Smarty version Smarty-3.1.6, created on 2016-09-18 16:03:27
         compiled from "./Home/Tpl\Library\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1842157de4a4f5e9c88-40810397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5dfb372cf5e2b2eff846bfb42bbb48d0694751' => 
    array (
      0 => './Home/Tpl\\Library\\add.html',
      1 => 1467964996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842157de4a4f5e9c88-40810397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust_ids' => 0,
    'cust_names' => 0,
    'mySelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57de4a4f8b969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57de4a4f8b969')) {function content_57de4a4f8b969($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\edu\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>添加军火</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simple.css">
        
        
        <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
        
    </head>
    <body>
    <div id="browser"></div>
 
        <?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<div id="sub-header" class="group_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="">资源库</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <li><a href="__URL__/index">资源浏览</a></li>
                <li class="active"><a href="__URL__/add">添加资源</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="navbar-left">
                <li><a href="__URL__/index/uid/<?php echo $_SESSION['user']['id'];?>
"><i class="icon-list"></i> 我上传的</a></li>
                <li><a href="__URL__/index/collid/<?php echo $_SESSION['user']['id'];?>
"><i class="icon-list"></i> 我收藏的</a></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
    //设置添加资源表单的焦点事件
    $(function(){
        //添加表单的焦点事件
        $("#f_name,#libtype,#lib_file").focus(function(){
            $(this).next("span").remove();
            doFocusInfo(this);
        }).blur(function(){				//移除当前input后多余的span节点
            $(this).next("span").remove();
            //执行验证
            doCheck(this);
        });        
    });
    //失去焦点的验证提醒
    function doCheck(ob){
        switch($(ob).attr("name")){
            case "title":
                if($(ob).val().length==0 || !$(ob).val().trim()){
                    $(ob).after('<span style="color:red">你的军火无名么？</span>');
                    return false;
                }else{
                    $(ob).after('<span style="color:green">√</span>');
                    return true;
                }
                break;
            case "tid":
                if($(ob).val()==0){
                    $(ob).after('<span style="color:red;height:40px;line-height:40px">亲~军火没有分类喔、</span>');
                    return false;
                }else{
                    $(ob).after('<span style="color:green;height:40px;line-height:40px">√</span>');
                    return true;
                }
                break;
            case "lib":
                var filename = $(ob).val();//获取所选资源的值
                $.ajax({
                    url:"__URL__/checktype",
                    type:"post",
                    async:true,
                    data:"filename="+filename,
                    dataType:"text",
                    success:function(data){
                        if (data == "yes") {
                            $(ob).after('<span style="color:green">√</span>');
                            return true;
                        }else{
                            $(ob).after('<span style="color:red">军火型号不正确！</span>');
                            return false;   
                        }
                    },
                    error:function(){
                        alert("ajax请求失败！");
                    }
                });
               
                break;
        }
        return false;
    }   
    //获取焦点提醒的函数
    function doFocusInfo(ob){
        switch($(ob).attr("name")){
            case "title":
                $(ob).after('<span style="color:blue">军火名要响亮...</span>');
                break;
            case "tid":
                $(ob).after('<span style="color:blue;height:40px;line-height:40px">军火也是要分类的</span>');
                break;
            case "lib":
                $(ob).after('<span style="color:blue">军火只要PDF型号哟</span>');
                break;
        }
    }
    //表单提交的验证函数
    function doChec(){
        //if(!$("#f_name,#libtype,#lib_file").val()){return false};
        if (!$("#f_name").val().trim()) {
            $("#f_name").next("span").remove();
            $("#f_name").after('<span style="color:red">你的军火无名么？</span>');
            return false;
        }
        if ($("#libtype").val()==0) {
            $("#libtype").next("span").remove();
            $("#libtype").after('<span style="color:red;height:40px;line-height:40px">亲~军火没有分类喔、</span>');
            return false;
        }
        
        if ($("#lib_file").val() == 0) {
            $("#lib_file").next("span").remove();
            $("#lib_file").after('<span style="color:red">军火呢？别这么小气嘛！</span>');
            return false;
        }
        if ($("#f_name").val().trim() && $("#libtype").val() && $("#lib_file").val()) {
            return true;
        };
        return false;
    }
</script>


        
<div id="main">
    <div class="container">
        <div class="home_module m_movie">
            <div class="container">
                <!-- 左侧 -->
                <div class="col-md-8">

                    <div class="ui three large steps col-md-offset-3 col-md-8 p0 mb20 row" style="float:none">
                        <div class="ui  active step">填写信息</div>
                        <div class="ui disabled step">等待审核</div>
                        <div class="ui active step">√</div>
                    </div>

                    
                    <form class="mt30 form-horizontal" autocomplete="off" action="__URL__/insert" method="POST" enctype="multipart/form-data" onsubmit="return doChec()">
                        <input type="hidden" name="uid" value="<?php echo $_SESSION['user']['id'];?>
">
                        <div class="form-group">
                            <label class="control-label col-md-3">资源名称</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-3 input-lg" id="f_name" name="title" size="30" type="text" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">选择文档类型</label>
                            <div class="col-md-8">
                                <select name="tid" id="libtype" style="width:200px;height:35px;font-size:18px;">
                                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">选择上传资源</label>
                            <div class="col-md-8">
                                <input name="lib" id="lib_file" type="file" />
                            </div>
                        </div>
                        
                        <div class="form-group pt20">
                            <div class="col-md-8  col-md-offset-3">
                                <hr>
                            </div>
                        </div>
                        <div class="form-group pt20">
                            <div class="col-md-8  col-md-offset-3 tc">
                                <button type="submit" style="width:150px;margin:0 auto" class="btn btn-primary btn-lg btn-block">提 交</button>
                            </div>
                        </div>
                    </form>

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

    
</body></html>
<?php }} ?>