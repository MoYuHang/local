<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>拼图前端框架HTML模版</title>
    <meta name="keywords" content="关键词" />
    <meta name="description" content="描述" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/student/Public/Styles/css/pintuer.css">
    <link rel="stylesheet" href="/student/Public/Styles/css/admin.css">
    <link rel="stylesheet" href="/student/Public/Styles/css/page.css">
    <script src="/student/Public/Styles/js/jquery.js"></script>
    <script src="/student/Public/Styles/js/pintuer.js"></script>
    <script src="/student/Public/Styles/js/respond.js"></script>

    <style>
        body{padding-top: 48px;}
        .bg22{background-color: #222222;}
        header > .layout_top{height: 48px; z-index: 9999;}
        .layout_top .nav-p{color: #bcbcbc; display: inline-block; float: right; margin-top: 20px; margin-right: 60px;}
        .layout_top .nav-p a{color: #bcbcbc;}
        .layout_top .nav-p a:hover{color: #ffffff;}
        
        section > .line .contBox{min-height: 600px;}
        .contBox .lls{height: 50px; line-height: 50px; width: 100%; display: block; color: #9C9895; text-indent: 20px; border-top: 1px solid #080808;}
        .contBox .lls:hover, .contBox .active{background-color: #080808; color: #ffffff;}
        .contBox .bread-me{}
        .contBox .adminme{padding: 20px;}
        section .lineme{min-width: 100%;}
        .lineme .xm2me{width: 16.6667%; position: absolute; top: 48px; left: -16.6667%; z-index: 100;}
        .lineme .xm10me{width: 80%; min-width: 800px; margin: 0px auto; padding: 0px 8px; }
    </style>

</head>
<body>
    <header>
        <div class="layout layout_top bg22 fixed-top">
            <p class="nav-p">
                欢迎您，<?php echo ($usrName); ?>
                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Student/loginout');?>">注销</a>
                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Student/index');?>">首页</a>
            </p>
        </div>
    </header>

    <section>
        <div class="lineme">
            <div class="xm2me bg22 contBox" style="height:100%;">
                <aside>
                <ul class="nav">
                    <li><a href="<?php echo U('Student/index');?>" class="lls">登录信息</a></li>
                    <li><a href="<?php echo U('Student/person');?>" class="lls">个人管理</a></li>
                    <li><a href="<?php echo U('Student/bslist');?>" class="lls">毕设列表</a></li>
                    <li><a href="<?php echo U('Student/detail');?>" class="lls">毕设详情</a></li>
                    <li><a href="<?php echo U('Student/msg');?>" class="lls">消息管理</a></li>
                    <li><a href="<?php echo U('Student/plan');?>" class="lls">毕设进度</a></li>
                    <li><a href="<?php echo U('Student/choose');?>" class="lls active">毕设选题</a></li>
                </ul>
                </aside>
            </div>
            <div class="xm10me contBox">
                <div class="bread-me">
                    <ul class="bread bg">
                      <li><a href="<?php echo U('Student/index');?>" class="icon-home"> 首页</a></li>
                      <li><?php echo ($title); ?></li>
                    </ul>
                </div>
                <div class="admin-me">
                    <div class="panel admin-panel">
                        <div class="panel-head">
                            <form action="#" class="form-inline">
                                <div class="form-group">
                                    <div class="label"><label for="GPName">课题检索</label></div>
                                    <div class="field">
                                        <input type="text" class="input" id="GPName" name="GPName" size="12" value="<?php echo isset($seachData['GPName']) && !empty($seachData['GPName']) ? $seachData['GPName'] : '';?>" placeholder="课题名称" />
                                    </div>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <div class="label"><label for="GPKey">关键字</label></div>
                                    <div class="field">
                                        <input type="text" class="input" id="GPKey" name="GPKey" size="12" value="<?php echo isset($seachData['GPKey']) && !empty($seachData['GPKey']) ? $seachData['GPKey'] : '';?>" placeholder="关键字" />
                                    </div>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <div class="label"><label for="GPThrName">指导教师</label></div>
                                    <div class="field">
                                        <select class="input" name="GPThrName" id="GPThrName">
                                            <option value="">请选择</option> 
                                            <?php if(is_array($thrList)): $i = 0; $__LIST__ = $thrList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><option value="<?php echo ($index["gpThrId"]); ?>" <?php echo $index['gpThrId'] == $seachData['GPThrName'] ? "selected='selected'" : "";?>><?php echo ($index["thrRealName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <div class="label"><label for="GPState">课题状态</label></div>
                                    <div class="field">
                                        <select class="input" name="GPState" id="GPState">
                                            <option value="">请选择</option> 
                                            <option <?php echo $seachData['GPState'] == 1 ? 'selected="selected"' : '' ;?> value="1">未选定</option>
                                            <option <?php echo $seachData['GPState'] == 2 ? 'selected="selected"' : '' ;?> value="2">已确定</option>
                                        </select>
                                    </div>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <div class="label"><label for="GPSH">课题方向</label></div>
                                    <div class="field">
                                        <select class="input" name="GPSH" id="GPSH">
                                            <option value="">请选择</option> 
                                            <option <?php echo $seachData['GPSH'] == 1 ? 'selected="selected"' : '' ;?> value="1">软件方向</option>
                                            <option <?php echo $seachData['GPSH'] == 2 ? 'selected="selected"' : '' ;?> value="2">硬件方向</option>
                                        </select>
                                    </div>
                                </div>
                                &nbsp;
                                &nbsp;
                                <div class="form-button">
                                    <button class="button bg-green" type="submit">检索</button>
                                </div>
                            </form>
                        </div>
                        <br />
                        <br />
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th width="60">编号</th>
                                <th width="120">课题方向</th>
                                <th width="140">课题标题</th>
                                <th width="*">课题内容</th>
                                <th width="80">课题方向</th>
                                <th width="80">指导老师</th>
                                <th width="120">操作</th>
                            </tr>
                            <?php if(is_array($gpList)): $i = 0; $__LIST__ = $gpList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($index["gpId"]); ?></td>
                                <td>
                                    <?php echo $index['gpSHState'] == 1 ? '软件方向' : '硬件方向'; ?>
                                </td>
                                <td><?php echo ($index["gpTitle"]); ?></td>
                                <td><?php echo ($index["gpContent"]); ?></td>
                                <td>
                                    <?php if($index["gpSHState"] == 1): ?>软件方向
                                    <?php else: ?>
                                        硬件方向<?php endif; ?>
                                </td>
                                <td><?php echo ($index["thrRealName"]); ?></td>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo ($index["gpId"]); ?>"/>
                                    <input type="hidden" name="thrId" value="<?php echo ($index["gpThrId"]); ?>"/>
                                    <a class="button border-yellow button-little dialogs" name="check" href="#" data-toggle="click" data-target="#checkdialog" data-mask="1" data-width="60%">查看</a>
                                    <?php
 $Fflag = false; for($i = 0; $i < count($choseIds); $i++){ if($choseIds[$i]['stlSpId'] == $index['gpId']){ $Fflag = true; } } ?>
                                    <?php if($Fflag == true): ?><!-- <a class="button border-black button-little">已选择</a> -->
                                    <?php else: ?>
                                    <?php if($FF == false): ?><a class="button border-green button-little dialogs" name="choose" href="#" data-toggle="click" data-target="#mydialog" data-mask="1" data-width="30%">选题</a><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                            </tr>
                            </volist>
                            </table>
                        <div class="panel-foot text-center">
                            <div class ="green-black"><?php echo ($page); ?></div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
    <div id="checkdialog"> 
        <div class="dialog"> 
            <div class="dialog-head"> 
                <span class="close rotate-hover"></span> 
                <strong>学生详情</strong> 
            </div> 
            <div class="dialog-body">
                <div class="form-group form-group-me">
                    <p>课题编号：  <a class="gpId" href="#"></a></p>
                    <p>课题标题：  <a class="gpTitle" href="#"></a></p>
                    <p>课题方向：  <a class="gpSHState" href="#"></a></p>
                    <p>课题内容：  <a class="gpContent" href="#"></a></p>
                    <p>课题目的：  <a class="gpAim" href="#"></a></p>
                    <p>课题要求：  <a class="gpRequest" href="#"></a></p>
                    <p>必备知识：  <a class="gpMust" href="#"></a></p>
                    <p>提交形式：  <a class="gpFormal" href="#"></a></p>
                    <p>其　　他：  <a class="gpOthers" href="#"></a></p>
                    <p>指导老师：  <a class="thrRealName" href="#"></a></p>
                    <p>研究方向：  <a class="thrStudy" href="#"></a></p>
                    <p>联系方式：  <a class="thrPhone" href="#"></a></p>
                    <p>邮件地址：  <a class="thrEmail" href="#"></a></p>
                    <p>办公地址：  <a class="thrAddress" href="#"></a></p>
                </div>
                <style>
                    .form-group-me p{margin-bottom: 5px;}
                </style>
            </div> 
        </div> 
    </div>

    <div id="mydialog"> 
        <div class="dialog"> 
            <div class="dialog-head"> 
                <span class="close rotate-hover"></span> 
                <strong>课题操作</strong> 
            </div> 
            <div class="dialog-body">
                <div class="form-group">
                    <p>是否确认要选择该课题？</p>
                    <p>O(∩_∩)O~~</p>
                </div>
                <input type="button" class="button bg-main" value="果断的选择" onclick="javascript:choose();" />
                <button class="button bg-yellow" type="reset">再考虑考虑</button>
            </div> 
        </div> 
    </div>
    


    <script>
        var ID = null;
        var ThrId = null;
        function choose(){
            window.location.href = "<?php echo U('Student/chooseGP/id/" + ID +"/thrid/" + ThrId + "');?>";
        }
        $(function(){
            $(".table a[name='check']").click(function(){
                ID = $(this).parent().find("input[name='id']").val();
               
                $.ajax({
                    url: "<?php echo U('Student/checkGPDetail');?>",
                    data: {
                        id: ID,
                    },
                    type: 'post',
                    dataType: 'json',
                    success: function(data){
                        if(data.state == true){
                            for(var x in data.detail){
                                if(x == 'gpSHState'){
                                    $(".dialog ." + x + "").html(data.detail[x] == 1 ? '软件方向' : '硬件方向');
                                }else{
                                    $(".dialog ." + x + "").html(data.detail[x]);
                                }
                            }
                        }else{
                            return ;
                        }
                    }
                }); 
            });

            $(".table a[name='choose']").click(function(){
                ID = $(this).parent().find("input[name='id']").val();
                ThrId = $(this).parent().find("input[name='thrId']").val();
            });

        });


        $(function(){

            $(document).mousemove(function(e){
                var screen_X = $(window).width();
                var screen_Y = $(window).height();

                var mouse_x = e.pageX;
                if(mouse_x >= 0 && mouse_x <= screen_X * 0.166667){
                    $(".xm2me").css('left', 0);
                }else{
                    $(".xm2me").css('left', -screen_X * 0.166667);
                }
            });
        });
    </script>
</body>
</html>