<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="sliou">
    <title>广域分差实时产品精度评估监控</title>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=t4gDuIRGGhc1DlzpEuW7mLl19vWwkgNG"></script>
    <script src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <!-- Bootstrap core CSS -->
<link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/Home/css/theme.css" rel="stylesheet">
<link href="/Public/Home/css/bootstrap-reset.css" rel="stylesheet">
<!--external css-->
<link href="/Public/Home/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/Home/css/flexslider.css"/>
<link href="/Public/Home/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/Home/css/animate.css">
<link rel="stylesheet" href="/Public/Home/assets/owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="/Public/Home/assets/owlcarousel/owl.theme.css">
<link rel="stylesheet" href="/Public/Home/css/seq-slider/sequencejs-theme.sliding-horizontal-parallax.css" />
<link href="/Public/Home/css/superfish.css" rel="stylesheet" media="screen">
<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="/Public/Home/css/component.css">
<link href="/Public/Home/css/style.css" rel="stylesheet">
<link href="/Public/Home/css/style-responsive.css" rel="stylesheet" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->


<script src="/Public/Home/js/html5shiv.js"></script>
<script src="/Public/Home/js/respond.min.js"></script>

<script src="/Public/Home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/hover-dropdown.js"></script>
<script defer src="/Public/Home/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/Public/Home/assets/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="/Public/Home/js/jquery.parallax-1.1.3.js"></script>
<script src="/Public/Home/js/wow.min.js"></script>
<script src="/Public/Home/assets/owlcarousel/owl.carousel.js"></script>

<script src="/Public/Home/js/jquery.easing.min.js"></script>
<script src="/Public/Home/js/link-hover.js"></script>
<script src="/Public/Home/js/superfish.js"></script>

<!--common script for all pages-->
<script src="/Public/Home/js/common-scripts.js"></script>

<!-- Sequence Moder -slider js -->
<script src="/Public/Home/js/seq-slider/jquery.sequence-min.js"></script>
<script src="/Public/Home/js/seq-slider/sequencejs-options.sliding-horizontal-parallax.js"></script>


</head>

<body>
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="<?php echo U('index');?>"><img src="/Public/Home/img/logo.png" alt="广域差分实时产品精度评估监控"></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" href="<?php echo U('Home/Index/index');?>">首页</a>
                </li>

                <?php if(is_array($topname)): $i = 0; $__LIST__ = $topname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top): $mod = ($i % 2 );++$i;?><li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="false" data-delay="0" <?php if($top["enname"] == ''): ?>data-hover=
                        "dropdown" data-toggle="dropdown" href="javascript:;"<?php else: ?>href="/Home/<?php echo ($top["enname"]); ?>/index/cateid/<?php echo ($top["id"]); ?>"<?php endif; ?>><?php echo ($top["name"]); if($top["id"] != 3): ?><i class="fa fa-angle-down"></i><?php endif; ?></a>

                        <ul class="dropdown-menu">
                            <?php $_result=SidType($top['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <a href="/Home/<?php echo ($vo["enname"]); ?>/index/cateid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>


                <li class="dropdown">
                    <?php if($_SESSION['id']== 1 ): ?><a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown" data-toggle="dropdown" href="#">管理员：<?php echo (session('username')); ?><i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo U('Admin/Index/index');?>" target="_blank">管理</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Index/logout');?>">退出</a>
                            </li>
                        </ul>
                        <?php else: ?> <a class="dropdown-toggle" href="<?php echo U('Admin/Login/index');?>">登录</a><?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end-->

<!-- Sequence Modern Slider -->
<div id="sequence-theme" class="sequence-inner">
    <div id="sequence">
        <img class="sequence-prev" src="/Public/Home/img/seq-slider/bt-prev.png" alt="Previous" style="display: inline;">
        <img class="sequence-next" src="/Public/Home/img/seq-slider/bt-next.png" alt="Next" style="display: inline;">

        <ul class="sequence-canvas">
            <li class="animate-out" style="display: list-item; z-index: 1;">
                <div class="info" style="">
                    <h2>
                        Built using Sequence.js
                    </h2>
                    <p>
                        The Responsive Slider with Advanced CSS3 Transitions
                    </p>
                </div>
                <img class="sky" src="/Public/Home/img/seq-slider/bg-clouds.png" alt="Blue Sky" style="">
                <img class="balloon" src="/Public/Home/img/seq-slider/balloon.png" alt="Balloon" style="">
            </li>
            <li class="animate-in" style="display: list-item; z-index: 3;">
                <div class="info" style="">
                    <h2>
                        Creative Control
                    </h2>
                    <p>
                        Create Acme sliders using CSS3 transitions -- no jQuery knowledge required!
                    </p>
                </div>
                <img class="sky" src="/Public/Home/img/seq-slider/bg-clouds.png" alt="Blue Sky" style="">
                <img class="aeroplane" src="/Public/Home/img/seq-slider/aeroplane.png" alt="Aeroplane" style="">
            </li>
            <li class="animate-out" style="display: list-item; z-index: 1;">
                <div class="info" style="">
                    <h2>
                        Cutting Edge
                    </h2>
                    <p>
                        Supports modern browsers, old browsers (IE7+), touch devices and responsive designs
                    </p>
                </div>
                <img class="sky" src="/Public/Home/img/seq-slider/bg-clouds.png" alt="Blue Sky" style="">
                <img class="kite" src="/Public/Home/img/seq-slider/kite.png" alt="Kite" style="">
            </li>
        </ul>
    </div>
</div>
<!--/sequence-theme-->
<!-- End of Sequence Modern Slider -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center feature-head wow fadeInDown">
                <h2>实时轨迹</h2>
            </div>
            <div class="feature-box">
                <div class="col-md-12 col-sm-12 text-center wow fadeInUp">
                    <div class="h-service">
                        <div id="allmap" style="width: 100%;height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--property start-->
<div class="property gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
                <img src="/Public/Home/img/tab1.png" alt="">
            </div>
            <div class="col-lg-6 col-sm-6 wow fadeInRight">
                <h1>
                    Mobile ready
                </h1>
                <hr>
                <p>
                    <i class="fa fa-check fa-lg pr-10">
                    </i>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
                </p>
                <p>
                    <i class="fa fa-check fa-lg pr-10">
                    </i>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
                </p>
                <p>
                    <i class="fa fa-check fa-lg pr-10">
                    </i>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
                </p>
                <hr>
            </div>
        </div>
    </div>
</div>
<!--property end-->

<div class="container">

    <div class="row mar-b-60">
        <div class="col-lg-12">
            <!--tab start-->
            <section class="tab wow fadeInLeft">
                <header class="panel-heading tab-bg-dark-navy-blue">
                    <ul class="nav nav-tabs nav-justified ">
                        <li class="active">
                            <a data-toggle="tab" href="#news">
                                轨道SSR时序图
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#events">
                                钟差SSR时序图
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content tasi-tab gbas-rtorbit">
                        <div id="news" class="tab-pane fade in active">
                            <table class="table table-bordered gbas-table-sat-selecter">
    <tr>
        <td width="80px">GPS</td>
        <td class="noborder">
            <?php $__FOR_START_61808954__=1;$__FOR_END_61808954__=33;for($i=$__FOR_START_61808954__;$i < $__FOR_END_61808954__;$i+=1){ ?><a href="javascript:;" onclick="changeSat('<?php echo echoSat($i);?>')" class="am-margin-right-xs">
                    <span id="gbas_udre_sat_<?php echo echoSat($i);?>" class="am-badge" style="width:40px;"><?php echo echoSat($i);?></span>
                </a><?php } ?>
        </td>
    </tr>
    <tr class="noborder">
        <td>BDS</td>
        <td class="noborder">
            <?php $__FOR_START_1487197072__=33;$__FOR_END_1487197072__=48;for($i=$__FOR_START_1487197072__;$i < $__FOR_END_1487197072__;$i+=1){ ?><a href="javascript:;" onclick="changeSat('<?php echo echoSat($i);?>')" class="am-margin-right-xs">
                    <span id="gbas_udre_sat_<?php echo echoSat($i);?>" class="am-badge" style="width:40px;"><?php echo echoSat($i);?></span>
                </a><?php } ?>
        </td>
    </tr>
</table>
                            <div class="media-body b-btm" id="gbas-rtorbit_sq_1" style="min-width:400px;height:400px">
                                数据加载中...
                            </div>
                        </div>
                        <div id="events" class="tab-pane fade">
                            <table class="table table-bordered gbas-table-sat-selecter">
    <tr>
        <td width="80px">GPS</td>
        <td class="noborder">
            <?php $__FOR_START_241035846__=1;$__FOR_END_241035846__=33;for($i=$__FOR_START_241035846__;$i < $__FOR_END_241035846__;$i+=1){ ?><a href="javascript:;" onclick="changeSat('<?php echo echoSat($i);?>')" class="am-margin-right-xs">
                    <span id="gbas_udre_sat_<?php echo echoSat($i);?>" class="am-badge" style="width:40px;"><?php echo echoSat($i);?></span>
                </a><?php } ?>
        </td>
    </tr>
    <tr class="noborder">
        <td>BDS</td>
        <td class="noborder">
            <?php $__FOR_START_1240304676__=33;$__FOR_END_1240304676__=48;for($i=$__FOR_START_1240304676__;$i < $__FOR_END_1240304676__;$i+=1){ ?><a href="javascript:;" onclick="changeSat('<?php echo echoSat($i);?>')" class="am-margin-right-xs">
                    <span id="gbas_udre_sat_<?php echo echoSat($i);?>" class="am-badge" style="width:40px;"><?php echo echoSat($i);?></span>
                </a><?php } ?>
        </td>
    </tr>
</table>
                            <div class="media-body b-btm" id="gbas-rtorbit_sq_2" style="min-width:400px;height:400px">
                                数据加载中...
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--tab end-->
        </div>
    </div>
</div>

<!--recent work start-->
<div class="bg-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 recent">
                <h3 class="recent-work">
                    Recent Work
                </h3>
                <p>Some of our work we have done earlier</p>
                <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img8.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img9.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img10.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img11.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img12.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="/Public/Home/img/works/img13.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--recent work end-->
</div>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center feature-head wow fadeInDown">
                    <h2>实时测站</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="h-service">
                    <div id="RtStreammap" style="width:100%;height:580px;"></div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->


<!-- service end -->
<div class="hr">
    <span class="hr-inner"></span>
</div>


<div class="container">
    <div class="row mar-b-50 our-clients">
        <div class="col-md-3">
            <h2>
                Our Clients
            </h2>
            <p>
                Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.Margade sitede lametep eiusmod.
                lametep eiusmod psumquis dolore.
            </p>
        </div>
        <div class="col-md-9">
            <div class="outside">
                <p>
              <span id="slider-prev">
              </span>
                    |
                    <span id="slider-next">
              </span>
                </p>
            </div>

            <ul class="bxslider1 clients-list">
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/img/clients/graylogo6.png" alt="" />

                        <img src="/Public/Home/img/clients/newlogo6.png" class="color-img" alt="" />
                    </a>
                </li>

            </ul>


        </div>
    </div>
    <!-- END CLIENTS -->
</div>
<!--container end-->

<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    contact info
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i>Address: <?php echo (C("ADDRESS")); ?></p>
                    <p><i class="fa fa-globe pr-10"></i>Contact: <?php echo (C("CONTACT")); ?> </p>
                    <p><i class="fa fa-mobile pr-10"></i>Phone : <?php echo (C("PHONE")); ?> </p>
                    <p><i class="fa fa-phone pr-10"></i>FAX : <?php echo (C("FAX")); ?> </p>
                    <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;"><?php echo (C("EMAIL")); ?></a></p>
                </address>
            </div>
            <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                <h1>latest tweet</h1>
                <div class="tweet-box">
                    <i class="fa fa-twitter"></i>
                    <em>
                        Please follow
                        <a href="javascript:;">@example</a>
                        for all future updates of us!
                        <a href="javascript:;">twitter.com/acme</a>
                    </em>
                </div>
                <div class="tweet-box">
                    <i class="fa fa-twitter"></i>
                    <em>
                        Please follow
                        <a href="javascript:;">@example</a>
                        for all future updates of us!
                        <a href="javascript:;">twitter.com/acme</a>
                    </em>
                </div>
                <div class="tweet-box">
                    <i class="fa fa-twitter"></i>
                    <em>
                        Please follow
                        <a href="javascript:;">@example</a>
                        for all future updates of us!
                        <a href="javascript:;">twitter.com/acme</a>
                    </em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        Our Company
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="faq.html">Support</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="service.html">Service</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="career.html">We are Hiring</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="terms.html">Term & condition</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    <h1>
                        Text Widget
                    </h1>
                    <p>
                        This is a text widget.Lorem ipsum dolor sit amet.
                        This is a text widget.Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright"> <p class="text-center">&copy; Copyright -  武汉大学导航定位中心 </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--轨道钟差SSR产品实时监控（gbas-rtstream）-->
<script src="/Public/Home/js/highstock/highstock.js"></script>
<script src="/Public/Home/js/highchart/modules/exporting.js"></script>
<script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
<script src="/Public/Home/js/gbas-rtorbit.js"></script>

<!--small footer end-->
<script type="text/javascript">
    // 百度地图API功能
    RtSmap = new BMap.Map("RtStreammap");
    RtSmap.enableScrollWheelZoom();
    RtSmap.enableContinuousZoom();
    RtSmap.addControl(new BMap.NavigationControl());
    RtSmap.centerAndZoom(new BMap.Point(112.516043,39.525037), 5);

    var data_info = [[116.417854,39.921988,"Ntrip Client",'A'],
        [116.406605,39.921585,"Tcp Client",'B'],
        [116.412222,39.912345,"Tcp Server",'C'],
        [117.233495,27.006364,"Tcp Server",'D'],
        [121.593655,31.174201,"上海",'E'],
        [121.538463,25.011498,"台北",'F']
    ];
    var opts = {
        width : 180,     // 信息窗口宽度
        height: 50,     // 信息窗口高度
        //title : "站名：", // 信息窗口标题
        enableMessage:true//设置允许信息窗发送短息
    };
    for(var i=0;i<data_info.length;i++){
        var marker = new BMap.Marker(new BMap.Point(data_info[i][0],data_info[i][1]));  // 创建标注
        var content = "<div style='border-bottom: 1px seagreen solid;'>测站名："+data_info[i][3]+"</div>接收类型："+data_info[i][2];
        RtSmap.addOverlay(marker);               // 将标注添加到地图中
        addClickHandler(content,marker);
    }
    function addClickHandler(content,marker){
        marker.addEventListener("click",function(e){
            openInfo(content,e)}
        );
    }
    function openInfo(content,e){
        var p = e.target;
        var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
        var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象
        RtSmap.openInfoWindow(infoWindow,point); //开启信息窗口
    }
</script>

<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.enableScrollWheelZoom();
    map.enableContinuousZoom();
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 15);

    var myP1 = new BMap.Point(116.380967,39.913285);    //起点
    var myP2 = new BMap.Point(116.424374,39.914668);    //终点
    var myIcon = new BMap.Icon("http://webmap0.map.bdstatic.com/wolfman/static/common/images/us_cursor_9517a2b.png", new BMap.Size(10, 22), {    //小车图片
        //offset: new BMap.Size(0, -5),    //相当于CSS精灵
        imageOffset: new BMap.Size(0, 0)    //图片的偏移量。为了是图片底部中心对准坐标点。
    });
    var driving2 = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true}});    //驾车实例
    driving2.search(myP1, myP2);    //显示一条公交线路

    window.run = function (){
        var driving = new BMap.DrivingRoute(map);    //驾车实例
        driving.search(myP1, myP2);
        driving.setSearchCompleteCallback(function(){
            var pts = driving.getResults().getPlan(0).getRoute(0).getPath();    //通过驾车实例，获得一系列点的数组
            var paths = pts.length;    //获得有几个点

            var carMk = new BMap.Marker(pts[0],{icon:myIcon});
            map.addOverlay(carMk);
            i=0;
            function resetMkPoint(i){
                carMk.setPosition(pts[i]);
                if(i < paths){
                    setTimeout(function(){
                        i++;
                        resetMkPoint(i);
                    },100);
                }
            }
            setTimeout(function(){
                resetMkPoint(5);
            },100)

        });
    }

    setTimeout(function(){
        run();
    },1500);
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('.bxslider1').bxSlider({
            minSlides: 5,
            maxSlides: 6,
            slideWidth: 360,
            slideMargin: 2,
            moveSlides: 1,
            responsive: true,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: 'Onward →',
            prevText: '← Go back'
        });

    });

</script>
<script>
    $('a.info').tooltip();
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 4
        });
    });

    jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
    });
    new WOW().init();
</script>

</body>
</html>