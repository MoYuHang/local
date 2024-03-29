<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title><?php echo ($title); ?></title>
    <meta name="keywords" content="关键词" />
    <meta name="description" content="描述" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/student/Public/Styles/css/pintuer.css">
    <link rel="stylesheet" href="/student/Public/Styles/css/admin.css">
    <link rel="stylesheet" href="/student/Public/Styles/css/page.css">
    <link rel="stylesheet" href="/student/Public/Styles/css/adminme.css">
    <script src="/student/Public/Styles/js/jquery.js"></script>
    <script src="/student/Public/Styles/js/pintuer.js"></script>
    <script src="/student/Public/Styles/js/respond.js"></script>

    <style>
        
    </style>

</head>
<body>
    <header>
        <div class="layout layout_top bg22 fixed-top">
            <div class="navbar navbar-big radius navbarme">
                <div class="navbar-head">
                </div>
                <div class="navbar-body">
                    <ul class="nav nav-inline nav-menu nav-tabs nav-big">
                        <li><a href="<?php echo U('Teacher/index');?>" class="lls <?php echo $state == 'index' ? 'active' : '';?>">登录信息</a></li>
                        <li><a href="<?php echo U('Teacher/person');?>" class="lls <?php echo $state == 'person' ? 'active' : '';?>">个人管理</a></li>
                        <li><a href="<?php echo U('Teacher/add');?>" class="lls <?php echo $state == 'add' ? 'active' : '';?>">新增毕设</a></li>
                        <li><a href="<?php echo U('Teacher/bslist');?>" class="lls <?php echo $state == 'bslist' ? 'active' : '';?>">毕设列表</a></li>
                        <li><a href="<?php echo U('Teacher/msg');?>" class="lls <?php echo $state == 'msg' ? 'active' : '';?>">消息管理</a></li>
                        <li><a href="<?php echo U('Teacher/plan');?>" class="lls <?php echo $state == 'plan' ? 'active' : '';?>">进度管理</a></li>
                    </ul>
                </div>
            </div>
            <p class="nav-p">
                欢迎您，<?php echo ($usrName); ?>
                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Teacher/loginout');?>">注销</a>
                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Teacher/index');?>">首页</a>
            </p>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="bread-me">
                <ul class="bread bg-green bg-inverse">
                    <li><a href="<?php echo U('Teacher/index');?>" class="icon-home"> 首页</a></li>
                    <li><?php echo ($title); ?></li>
                </ul>
            </div>
 
<div class="adminme">
    <form method="post" class="form-x" action="<?php echo U('Teacher/addDesign');?>">
         <div class="form-group">
            <div class="label"><label for="title">毕设题目</label></div>
            <div class="field">
                <input type="text" class="input" name="title" size="50" placeholder="毕设题目" data-validate="required:请填写毕设题目" value="" />
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="aim">毕设目的</label></div>
            <div class="field">
                <textarea class="input" name="aim" rows="3" cols="30" placeholder="毕设目的" data-validate="required:请填写毕设题目" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="content">毕设内容</label></div>
            <div class="field">
                <textarea class="input" name="content" rows="3" cols="30" placeholder="毕设内容" data-validate="required:请填写毕设题目" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="request">毕设要求</label></div>
            <div class="field">
                <textarea class="input" name="request" rows="3" cols="30" placeholder="毕设要求" data-validate="required:请填写毕设题目" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="must">必备知识</label></div>
            <div class="field">
                <textarea class="input" name="must" rows="3" cols="30" placeholder="必备知识" data-validate="required:请填写毕设题目" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="formal">提交形式</label></div>
            <div class="field">
                <input type="text" class="input" name="formal" size="50" placeholder="提交形式" data-validate="required:请填写提交形式"  />
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="other">其他</label></div>
            <div class="field">
                <textarea class="input" name="other" rows="3" cols="30" placeholder="其他"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label>课题方向</label></div>
            <div class="field">
                <div class="button-group radio"> 
                    <label class="button active">
                        <input name="SHState" value="1" type="radio"><span class="icon icon-check"></span> 软件方向
                    </label> 
                    <label class="button ">
                        <input name="SHState" value="2" type="radio"><span class="icon icon-check"></span> 硬件方向
                    </label> 
                </div>
            </div>
        </div>
        <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
            <button class="button bg-yellow form-reset " type="reset">后退</button>  
        </div>                
    </form>   
    
</div>
    
 </div>
    </section>

    <footer>
        
    </footer>
</body>
</html>