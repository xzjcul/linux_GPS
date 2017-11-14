<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="sliou" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
        });
    </script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>站点后台管理系统</strong>
        <em>Management System</em>
    </dt>
    <form action="<?php echo U('index');?>" method="post">
        <dd class="user_icon">
            <input type="text" placeholder="账号" name="username" class="login_txtbx"/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="密码" name="password" class="login_txtbx"/>
        </dd>
        <dd class="val_icon">
            <div class="checkcode">
                <input type="text" name="verify" id="J_codetext" placeholder="验证码" class="login_txtbx">
            </div>
            <img src="/Admin/Login/verify" onclick="this.src='/Admin/Login/verify/'+Math.random();" style="width: 120px;height: 42px;display: block;float: right;">
        </dd>
        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
    </form>
    <dd>
        <p>© 2015-2016 武汉大学信息学部 版权所有</p>
        <p>┗━<a href="<?php echo U('Home/Index/index');?>" style="color: #000;">返回主页</a></p>
    </dd>
</dl>
</body>
</html>