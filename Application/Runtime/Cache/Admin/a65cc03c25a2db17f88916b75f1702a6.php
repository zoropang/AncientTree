<?php if (!defined('THINK_PATH')) exit();?>

  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>后台管理~</title>
    <link href="/AncientTree/Public/Default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/AncientTree/Public/Default/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/AncientTree/Public/Default/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/AncientTree/Public/Default/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/AncientTree/Public/Default/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/AncientTree/Public/Default/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/AncientTree/Public/Default/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/AncientTree/Public/Default/css/animate.css" rel="stylesheet">
    <link href="/AncientTree/Public/Default/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

        <!-- start left -->
               
      <nav class="navbar-default navbar-static-side" role="navigation" id = "navs">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="text-align:center;">
                        <div class="dropdown profile-element"> <span>
                        </span>
                        <span class="clear"> <span class="block m-t-xs" style = "color:#fff;"> <strong class="font-bold">管理员您好</strong>
                        </span> <span class="text-muted text-xs block">欢迎回来~~   </span> </span>
                    </div>
                    <div class="logo-element">
                        里程密
                    </div>
                </li>
                    <li class="active">
                <a href="<?php echo U('Index/index');?>"><i class="fa fa-diamond"></i> <span class="nav-label">后台首页</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
                    <li>
                        <a href="index.html"><i class="fa fa-gear"></i> <span class="nav-label">网站设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Site/index');?>">网站管理</a></li>
                            <li ><a href="<?php echo U('Email/index');?>">网站邮件设置</a></li>
                            <li ><a href="<?php echo U('Adminer/index');?>">管理员修改</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Category/index');?>">查看分类</a></li>
                            <li ><a href="<?php echo U('Category/add');?>">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-file-image-o"></i> <span class="nav-label">幻灯片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Slides/index');?>">查看幻灯片</a></li>
                            <li ><a href="<?php echo U('Slides/add');?>">添加幻灯片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-sitemap"></i> <span class="nav-label">邀请码管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Yaoqing/index');?>">查看邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/add');?>">添加邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/production');?>">生成邀请码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-clipboard"></i> <span class="nav-label">文章管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Article/add');?>">添加文章</a></li>
                            <li><a href="<?php echo U('Article/index');?>">查看文章</a></li>
                            <li><a href="<?php echo U('Article/recovery');?>">文章回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-users"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('User/index');?>">会员查看</a></li>
                            <li><a href="<?php echo U('User/recovery');?>">会员回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bank"></i> <span class="nav-label">主题管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Theme/index');?>">主题查看</a></li>
                            <li><a href="<?php echo U('Theme/down');?>" onclick="alert('静静等待 暂未开放');return false;">主题下载</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bug"></i> <span class="nav-label">插件管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Plugs/index');?>" onclick="alert('静静等待 暂未开放');return false;">插件浏览</a></li>
                            <li><a href="<?php echo U('Plugs/recovery');?>" onclick="alert('静静等待 暂未开放');return false;">插件下载</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-key"></i> <span class="nav-label">网站维护</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Maintain/index');?>">缓存清理</a></li>
                            <li><a href="<?php echo U('Maintain/databackups');?>">备份还原数据库</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bookmark"></i> <span class="nav-label">友情链接</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Friendlink/index');?>">查看友链</a></li>
                            <li><a href="<?php echo U('Friendlink/add');?>">添加友链</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="<?php echo U('Login/logout');?>">
                        <i class="fa fa-sign-out"></i><span class="nav-label">退出登录</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <div id="page-wrapper" class="gray-bg" style="overflow: hidden;">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="人痛苦的本质都是对自己无能的愤怒" class="form-control" style="width: 500px;" disabled="">
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">每一个你不满意的现在,都有一个你不努力的曾经.</span>
                            </li>
                        <li>欢迎你，<?php echo (session('username')); ?></li>
                            <li>
                                <a data-toggle="modal" href="#myModal6">Good Luck</a>
                            </li>
                        </ul>

                    </nav>
                </div>

         <!-- end left -->
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                <div class="row">
                <center><h1>主题</h1></center>
                <div class="col-lg-4">
                        <div class="ibox-content text-center">
                                <h1>默认主题</h1>
                                <div class="m-b-sm">
                                    <img alt="image" src="./Application/Home/View/Default/preview.jpg" width="100%;">
                                </div>
                                <p class="font-bold"><span class="label label-info">版本：2.2</span>
                                    <span class="label label-success">作者：MonkeyCode</span></p>
                                <div class="text-center">
                                            <a href="http://default.lcm.wang/" target="_blank"><button type="button" class="btn btn-primary">演示</button></a>
                                            <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-placement="bottom" data-content="这是里程密博客程序自带的默认主题">说明</button>
                                             <button type="button" class="btn btn-w-m btn-warning" onclick="alert('此主题无设置方法')">设置</button>
                                            <button type="button" class="btn btn-w-m btn-danger" disabled="">卸载</button>
                                            <?php if($now_them == 'Default'): ?><button type="button" class="btn btn-w-m btn-default" style="width: 100%;margin-top: 10px;" disabled="">当前已启用</button>
                                            <?php else: ?>
                                                <a href="<?php echo U('Theme/change_them',array('them'=>'Default'));?>"><button type="button" class="btn btn-w-m btn-info" style="width: 100%;margin-top: 10px;">启用</button></a><?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php if(is_array($them_list)): foreach($them_list as $key=>$vo): ?><div class="col-lg-4">
                        <div class="ibox-content text-center">
                                <h1><?php echo ($vo["title"]); ?></h1>
                                <div class="m-b-sm">
                                    <img alt="image" src="<?php echo ($vo["root_dir"]); echo ($vo["preview_file"]); ?>" width="100%;">
                                </div>
                                <p class="font-bold"><span class="label label-info">版本：<?php echo ($vo["versions"]); ?></span>
                                    <span class="label label-success">作者：<?php echo ($vo["author"]); ?></span></p>
                                <div class="text-center">
                                            <a href="<?php echo ($vo["demo_url"]); ?>" target="_blank"><button type="button" class="btn btn-primary">演示</button></a>
                                            <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo ($vo["info_file"]); ?>">说明</button>
                                             <a href="<?php echo ($vo["root_dir"]); echo ($vo["set_file"]); ?>" target="_blank"><button type="button" class="btn btn-w-m btn-warning">设置</button></a>
                                            <a href="<?php echo U('Theme/del_them',array('dir_str'=>$vo['remove_file']));?>" onclick="return shifou()"><button type="button" class="btn btn-w-m btn-danger">卸载</button></a>
                                            <?php if($now_them == $vo['dir_name']): ?><button type="button" class="btn btn-w-m btn-default" style="width: 100%;margin-top: 10px;" disabled="">当前已启用</button>
                                            <?php else: ?>
                                                <a href="<?php echo U('Theme/change_them',array('them'=>$vo['dir_name']));?>"><button type="button" class="btn btn-w-m btn-info" style="width: 100%;margin-top: 10px;">启用</button></a><?php endif; ?>

                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </div>
                </div>
                </div>
            <!-- start footer -->
                    
<div class="footer">
    <div class="pull-right">
        <a href="http://www.lcm.wang/">里程密开源博客系统</a>
    </div>
    <div>
        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/AncientTree/Public/Default/js/jquery-2.1.1.js"></script>
    <script src="/AncientTree/Public/Default/js/jquery.cookie.js"></script>
    <script src="/AncientTree/Public/Default/js/inspinia.js"></script>
    <script src="/AncientTree/Public/Default/js/bootstrap.min.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/AncientTree/Public/Default/js/plugins/flot/jquery.flot.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/AncientTree/Public/Default/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/AncientTree/Public/Default/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/AncientTree/Public/Default/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- 消息通知 -->
    <script src="/AncientTree/Public/Default/js/plugins/gritter/jquery.gritter.min.js"></script>

<script>
    $(function(){
        $("#navs a").click(function(){
            $.cookie('click_url',$(this).attr('href'));
        })
        if($.cookie('click_url') != undefined){
            var s_url=$.cookie('click_url');
            var now_url = '';
            for(var i = 0;i<$("#side-menu li").length;i++){
                now_url=$("#side-menu li a").eq(i).attr("href");
                if(now_url == s_url){
                    $("#side-menu a").eq(i).parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().addClass("in");
                }else{
                    $("#side-menu a").eq(i).parent().removeClass("active");
                }
            }
        }
    })


        </script>
    <!-- Toastr -->

            <!-- end footer -->
            </div>
        </div>

        </div>

    </div>
</body>
</html>