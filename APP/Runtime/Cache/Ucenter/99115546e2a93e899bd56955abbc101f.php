<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>用户登录</title>
    <meta name="keywords" content="关键词" />
    <meta name="description" content="描述" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/student/Public/Styles/css/pintuer.css">
    <script src="/student/Public/Styles/js/jquery.js"></script>
    <script src="/student/Public/Styles/js/pintuer.js"></script>
    <script src="/student/Public/Styles/js/respond.js"></script>

    <style>
        body{background-image: url("/student/Public/Images/ubg.jpg");}
        .loginBox {
    width: 380px;
    position: absolute;
    left: 50%;
    top: 50%;
    border: 1px dotted #bcbcbc;
    padding: 16px 0px 16px 32px;
    background-color: #ffffff;
    border-radius: 5px;
    transform: translate(-50%, -50%);
}

        .loginBox > h2{text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <div class="loginBox">
            <h2>毕设选题系统登录</h2>
            <br>
            <form action="<?php echo U('Index/doLogin');?>"  class="form-x" method="post">
                <div class="form-group">
                    <label class="label">账户：</label>
                    <div class="field field-icon">
                        <span class="icon icon-user"></span>
                        <input type="text" class="input input-auto" id="usrname" name="usrname" size="30" placeholder="登陆账号" data-validate="required:请填写登陆账号" /> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="label">密码：</label>
                    <div class="field field-icon">
                        <span class="icon icon-key"></span>
                        <input type="password" class="input input-auto" id="usrpwd" name="usrpwd" size="30" placeholder="登录密码" data-validate="required:请填写登录密码,length#>4:密码最少不得小于4位" /> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="label">类型：</label>
                    <div class="button-group radio">
                        <label class="button active">
                            <input name="flag" value="s" checked="checked" type="radio">
                            <span class="icon icon-check text-green"></span> 学生
                        </label> 
                        <label class="button">
                            <input name="flag" value="t" type="radio">
                            <span class="icon icon-check text-blue"></span> 老师
                        </label> 
                    </div>
                </div>
                <div class="form-button">
                    <button type="submit" class="button bg-green">登录</button>
                    &nbsp;&nbsp;
                    <button type="reset" class="button bg-mix">重置</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>