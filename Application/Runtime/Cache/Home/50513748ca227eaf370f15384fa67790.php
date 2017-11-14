<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>轨道钟差SSR产品实时监控</title>
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
<img src="/Public/Home/img/banner.jpg" class="img-responsive" alt="Cinque Terre">
<div class="container">
    <div class="row" >
        <p><h3 class="gbas-dp-h3" id="gbas-iono-sect-0"><i class="am-icon-bar-chart"></i> 轨道钟差SSR产品实时监控</h3></p>
        <div class="col-md-12 table-responsive">
            <table id="gbas_orbit_list_tbl" class="table table-bordered" style="font-size: 10px">
                <thead>
                <tr style="height: 31px;">
                    <th colspan="14" style="text-align: right; padding-right: 5px;">最新历元: <span
                            id="gbas-orbit-last-epoch">----</span>
                    </th>
                </tr>
                <tr class="tr-end" style="height: 48px;">
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
                <!--<?php $__FOR_START_940522117__=1;$__FOR_END_940522117__=48;for($i=$__FOR_START_940522117__;$i < $__FOR_END_940522117__;$i+=1){ ?><tr id="<?php echo getSatById($i);?>">
                        <td class="gbas-orbit-sat"><?php echo getSatById($i);?></td>
                        <td class="gbas-orbit-sta">-</td>
                        <td class="gbas-orbit-fre">-</td>
                        <td class="gbas-orbit-dat">-</td>
                        <td class="gbas-orbit-iode">-</td>
                        <td class="gbas-orbit-d0a">-</td>
                        <td class="gbas-orbit-d0c">-</td>
                        <td class="gbas-orbit-d0r">-</td>
                        <td class="gbas-orbit-d1a">-</td>
                        <td class="gbas-orbit-d1c">-</td>
                        <td class="gbas-orbit-d1r">-</td>
                        <td class="gbas-orbit-c0">-</td>
                        <td class="gbas-orbit-c1">-</td>
                        <td class="gbas-orbit-c2">-</td>
                    </tr><?php } ?>-->
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
<!--footer end-->
<script>

</script>
</body>
</html>