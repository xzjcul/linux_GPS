<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>修改栏目</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/Admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/app.css">
    <script src="/Public/Admin/js/echarts.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body data-type="index">

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="/Public/Admin/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-hide-sm-only">
                <a id="admin-fullscreen" class="tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-arrows-alt"></span>
                    <span class="admin-fullText">开启全屏</span>
                </a>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick"><?php echo (session('username')); ?></span><span class="tpl-header-list-user-ico"> <img src="/Public/Admin/img/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="<?php echo U('Pwd/index');?>"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?php echo U('Index/logout');?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Home/Index/index');?>" target="_blank" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>

<div class="tpl-page-container tpl-page-header-fixed">

    <div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        Amaze UI 列表
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="<?php echo U('Index/index');?>" class="nav-link active">
                    <i class="am-icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="<?php echo U('RtStream/index');?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bar-chart"></i>
                    <span>实时数据</span>
                    <i class="tpl-left-nav-content tpl-badge-danger"></i>
                </a>
            </li>

            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-table"></i>
                    <span>实时产品</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <a href="<?php echo U('RtOrbit/index');?>">
                            <i class="am-icon-angle-right"></i>
                            <span>轨道与钟差</span>
                            <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="<?php echo U('RtIono/index');?>">
                            <i class="am-icon-angle-right"></i>
                            <span>电离层</span>
                            <i class="tpl-left-nav-content tpl-badge-success"></i>
                        </a>
                        <a href="form-news.html">
                            <i class="am-icon-angle-right"></i>
                            <span>轨道精度</span>
                            <i class="tpl-left-nav-content tpl-badge-primary"></i>
                        </a>
                        <a href="form-news-list.html">
                            <i class="am-icon-angle-right"></i>
                            <span>卫星状态</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>质量评估</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <a href="form-amazeui.html">
                            <i class="am-icon-angle-right"></i>
                            <span>产品质量分析</span>
                            <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="form-line.html">
                            <i class="am-icon-angle-right"></i>
                            <span>实时定位分析</span>
                        </a>

                        <a href="form-line.html">
                            <i class="am-icon-angle-right"></i>
                            <span>文件更新监视</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>常规操作</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <a href="<?php echo U('Cate/lst');?>">
                            <i class="am-icon-angle-right"></i>
                            <span>栏目管理</span>
                            <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="<?php echo U('System/index');?>">
                            <i class="am-icon-angle-right"></i>
                            <span>系统参数</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <a href="<?php echo U('Pwd/index');?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-key"></i>
                    <span>密码修改</span>

                </a>
            </li>
        </ul>
    </div>
</div>

    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            添加栏目
        </div>
        <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>" class="am-icon-home">首页</a></li>
            <li><a href="lst">栏目管理</a></li>
            <li class="am-active">修改栏目</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="tpl-block">
                <div class="am-g">
                    <div class="tpl-form-body tpl-form-line">
                        <form class="am-form tpl-form-line-form" action="edit" method="post">
                            <input type="hidden" name="id" value="<?php echo ($msgcate["id"]); ?>">
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">栏目名称 <span class="tpl-form-line-small-title">Name</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name="name" class="tpl-form-input" id="user-name" value="<?php echo ($msgcate["name"]); ?>">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-phone" class="am-u-sm-3 am-form-label">上级分类 <span class="tpl-form-line-small-title">PrevCate</span></label>
                                <div class="am-u-sm-9">
                                    <select name="parentid" data-am-selected="">
                                        <option value="0">顶级栏目</option>
                                        <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == $msgcate['id']): ?>style="display:none;"<?php endif; ?> value="<?php echo ($vo["id"]); ?>"><?php echo str_repeat('-',$vo['level']*4); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">栏目类型 <span class="tpl-form-line-small-title">Type</span></label>
                                <div class="am-u-sm-9">
                                    <div style="padding-top: 5px;">
                                        <input class="common-text" name="type" size="50" value="1" <?php if($msgcate["type"] == 1): ?>checked<?php endif; ?> type="radio">列表
                                        <input class="common-text" name="type" size="50" value="2" <?php if($msgcate["type"] == 2): ?>checked<?php endif; ?> type="radio">单页
                                    </div>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">栏目级别 <span class="tpl-form-line-small-title">Class</span></label>
                                <div class="am-u-sm-9">
                                    <div style="padding-top: 5px;">
                                        <input class="common-text" name="class" size="50" value="1" <?php if($msgcate["class"] == 1): ?>checked<?php endif; ?> type="radio">顶级栏目
                                        <input class="common-text" name="class" size="50" value="2" <?php if($msgcate["class"] == 2): ?>checked<?php endif; ?> type="radio">二级栏目
                                    </div>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-intro" class="am-u-sm-3 am-form-label">栏目内容 <span class="tpl-form-line-small-title">Content</span></label>
                                <div class="am-u-sm-9">
                                    <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($msgcate["content"]); ?></textarea>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
<script src="/Public/Admin/js/jquery.min.js"></script>
<script src="/Public/Admin/js/amazeui.min.js"></script>
<script src="/Public/Admin/js/iscroll.js"></script>
<script src="/Public/Admin/js/app.js"></script>
<script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:400,});
</script>
</body>
</html>