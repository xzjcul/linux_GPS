<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台首页</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/Admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/app.css">
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
            实时电离层与DCB
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">实时数据</a></li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="tpl-block">
                <div class="am-u-sm-12">
                    <h3 class="gbas-dp-h3" id="gbas-iono-sect-1"><i class="am-icon-bar-chart"></i> DCB监控情况图</h3>
                    <span id="gbas_iono_dcb_rms" class="chart-label">RMS: -</span>
                    <div id="gbas_iono_dcb_chart" class="gbas-charts" style="min-width: 400px;height: 400px;"></div>
                </div>
            </div>
            <div class="tpl-alert"><?php echo ($ale); ?></div>
        </div>
        <div class="tpl-portlet-components">
            <div class="tpl-block">
                <div class="am-u-sm-12">
                    <h3 class="gbas-dp-h3" id="gbas-iono-sect-2"><i class="am-icon-bar-chart"></i> 电离层解算结果残差分布图</h3>
                    <span id="gbas_iono_resi_rms" class="chart-label">RMS: -</span>
                    <div id="gbas_iono_resi_chart" class="gbas-charts" style="min-width: 400px;height: 400px;"></div>
                </div>
            </div>
            <div class="tpl-alert"><?php echo ($ale); ?></div>
        </div>
    </div>
</div>
<script src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/js/amazeui.min.js"></script>
<script src="/Public/Admin/js/iscroll.js"></script>
<script src="/Public/Admin/js/highchart/highcharts.js"></script>
<script src="/Public/Admin/js/highchart/modules/exporting.js"></script>
<script src="/Public/Admin/js/highchart/themes/grid.js"></script>
<script src="/Public/Admin/js/highchart/highcharts-more.js"></script>
<script src="/Public/Admin/js/moment.min.js"></script>
<script src="/Public/Admin/js/gbas-iono.js"></script>
<script>

    function refreshIonoDcbChart() {
        $.get("<?php echo U('RtIono/refreshIonoDcbChart');?>", function (data) {
            updateIonoDcbChart($.parseJSON(data));
        });
    };

    function refreshIonoResiChart() {
        $.get("<?php echo U('RtIono/refreshIonoResiChart');?>", function (data) {
            updateIonoResiChart($.parseJSON(data));
        });
    }


    /*$(function(){
        initIonoDcbChart('gbas_iono_dcb_chart');
        initIonoResiChart('gbas_iono_resi_chart');
        updateIonoDcbChart($.parseJSON('<?php echo ($dcb); ?>'));
        /!*updateIonoResiChart($.parseJSON('<?php echo ($resi); ?>'));*!/
        setInterval(function () {
            refreshIonoDcbChart();
        }, 3000);

    });*/

    $(function(){
        initIonoDcbChart('gbas_iono_dcb_chart');
        initIonoResiChart('gbas_iono_resi_chart');
        updateIonoDcbChart($.parseJSON('<?php echo ($dcb); ?>'));
        //console.log($.parseJSON('<?php echo ($resi); ?>'));
        updateIonoResiChart($.parseJSON('<?php echo ($resi); ?>'));

        setInterval(function () {
            refreshIonoDcbChart();
            refreshIonoResiChart();
        }, 3000);
    });


</script>
</body>
</html>