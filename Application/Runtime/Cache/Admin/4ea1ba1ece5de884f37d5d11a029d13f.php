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
            <h3 class="gbas-dp-h3 am-fl" id="gbas-orbit-sect-1" style="width:100%">实时轨道、钟差SSR产品</h3>
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">实时数据</a></li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <div class="am-cf">
                            <form class="am-form" action="upload" method="post" enctype="multipart/form-data">
                                <div class="am-form-group am-form-file">
                                    <button type="button" class="am-btn am-btn-default am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                                    <input type="file" name="rtstream" multiple> <span style="color: red;font-size: 15px;">*只支持上传 .xls、.xlsx的文档</span>
                                </div>
                                <button type="submit" class="am-btn am-btn-default am-radius">上传</button>
                            </form>
                            <hr>
                            <table class="gbas-legend-table am-table am-table-bordered">
                                <thead>
                                <tr>
                                    <td width="110px;">导航系统</td>
                                    <td>数据项目</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <?php if(is_array($navsys)): $i = 0; $__LIST__ = $navsys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="float:left; width:100px;">
                                                <input class="gbas-rtstm-filter" checked type="checkbox" name="<?php echo ($vo); ?>" value="<?php echo ($vo); ?>"><?php echo ($vo); ?>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </td>
                                    <td>
                                        <?php if(is_array($fields)): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="float:left; width:105px;">
                                                <input class="chk-fields" checked type="checkbox" name="<?php echo ($vo); ?>" value="<?php echo ($i); ?>"><?php echo ($vo); ?>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>

                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            <table id="gbas_orbit_list_tbl" class="am-table am-table-bordered am-table-hover am-table-centered"  style="font-size: 10px">
                                <thead>
                                    <tr style="height: 31px;" role="row">
                                        <th colspan="14" style="text-align: right; padding-right: 5px;" rowspan="1">最新历元: <span id="gbas-orbit-last-epoch">2017-06-08 09:18:10</span></th>
                                    </tr>
                                    <tr class="tr-end" style="height: 48px;" role="row">
                                        <th>SAT</th>
                                        <th>Status</th>
                                        <th>FRE</th>
                                        <th>Datum</th>
                                        <th>IODE</th>
                                        <th>D0-A (m)</th>
                                        <th>D0-C (m)</th>
                                        <th>D0-R (m)</th>
                                        <th>D1-A (m/s)</th>
                                        <th>D1-C (m/s)</th>
                                        <th>D1-R (m/s)</th>
                                        <th>C0 (m)</th>
                                        <th>C1 (m/s)</th>
                                        <th>C2 (m/s2)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($i); ?>">
                                            <td class="gbas-orbit-sat"><?php echo ($vo["A"]); ?></td>
                                            <td class="gbas-orbit-sta"><?php echo ($vo["B"]); ?></td>
                                            <td class="gbas-orbit-fre"><?php echo ($vo["C"]); ?></td>
                                            <td class="gbas-orbit-dat"><?php echo ($vo["D"]); ?></td>
                                            <td class="gbas-orbit-iode"><?php echo ($vo["E"]); ?></td>
                                            <td class="gbas-orbit-d0a"><?php echo ($vo["F"]); ?></td>
                                            <td class="gbas-orbit-d0c"><?php echo ($vo["G"]); ?></td>
                                            <td class="gbas-orbit-d0r"><?php echo ($vo["H"]); ?></td>
                                            <td class="gbas-orbit-d1a"><?php echo ($vo["I"]); ?></td>
                                            <td class="gbas-orbit-d1c"><?php echo ($vo["J"]); ?></td>
                                            <td class="gbas-orbit-d1r"><?php echo ($vo["K"]); ?></td>
                                            <td class="gbas-orbit-c0"><?php echo ($vo["L"]); ?></td>
                                            <td class="gbas-orbit-c1"><?php echo ($vo["M"]); ?></td>
                                            <td class="gbas-orbit-c2"><?php echo ($vo["N"]); ?></td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tpl-alert"><?php echo ($ale); ?></div>
        </div>


    </div>
</div>
<script src="/Public/Admin/js/jquery.min.js"></script>
<script src="/Public/Admin/js/amazeui.min.js"></script>
<script src="/Public/Admin/js/iscroll.js"></script>
<script src="/Public/Admin/js/app.js"></script>
<script src="/Public/Admin/js/datatable/js/jquery.dataTables.min.js"></script>
<script>
    var table = $("#gbas_orbit_list_tbl").DataTable({
        "bInfo": false,//页脚信息
        "bAutoWidth": false//自动宽度
    });
    //显示、隐藏字段
    $(".chk-fields").click(function () {
        var $this = $(this);
        var idx = $this.val() - 1;
        if ($this.is(":checked")) {
            $this.attr("checked", true);
            table.column( idx ).visible(true);
        } else {
            $this.attr("checked", false);
            table.column( idx ).visible(false);
        }
    });
</script>
</body>
</html>