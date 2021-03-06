<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/data/www/default/bysj/public/../application/index/view/applys/applyToJoin.html";i:1525581165;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
    <link href="/static/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="/static/admin/css/style.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="/static/admin/assets/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/static/admin/assets/js/html5shiv.js"></script>
    <script src="/static/admin/assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="/static/admin/js/jquery-1.9.1.min.js"></script>
    <script src="/static/admin/assets/layer/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/admin/js/H-ui.js"></script>
    <script type="text/javascript" src="/static/admin/js/H-ui.admin.js"></script>
    <script src="/static/js/jquery.md5.js"></script>
    <title>申请加入</title>
</head>

<body class="login-layout Reg_log_style ">
    <div class="">
        <div class="" >
            <div id="login-box" class="" >
                <div class="widget-body" >
                    <div class="" style="height:800px;">
                        <form class="" style="height: 100%;">
                            <fieldset style="text-align: center;margin: 0 auto;width:50%;padding-top: 20px;">
                                <ul style="margin:0 auto;width:350px;text-align: center;">

                                    <li class="frame_style form_error"><label class="user_icon"></label><input
                                            name="学号" type="text" id="userno"/><i>学号</i></li>
                                    <li class="frame_style form_error"><label class="password_icon"></label><input
                                            name="密码" type="password" id="userpwd"/><i>密码</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="学院" type="text" id="usercol"/><i>学院</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="专业" type="text" id="userpro"/><i>专业</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="班级" type="text" id="usercls"/><i>班级</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="姓名" type="text" id="username"/><i>姓名</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="手机" type="text" id="userpho"/><i>手机</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                            name="验证码" type="text" id="Codes_text"/><i>验证码</i>
                                        <div class="Codes_region" >
                                            <img style="margin-top: 0px;padding-top: 0px;vertical-align: top;" id="code_png"
                                                 src="/index.php/index/getCaptcha/123" width="100%" height="100%" alt="captcha"/>
                                        </div>
                                    </li>

                                </ul>
                                <div class="space"></div>

                                <div class="clearfix" style="margin:0 auto;width:350px;text-align: left;">
                                    <button onclick="layer_close();" type="button" class="width-35 btn btn-sm"
                                            id="cancel_btn">
                                        <i class=""></i>
                                        取消
                                    </button>

                                    <button type="button" class="width-35 btn btn-sm btn-primary"
                                            id="login_btn">
                                        <i class=""></i>
                                        提交
                                    </button>
                                </div>

                                <div class="space-4"></div>
                            </fieldset>
                        </form>

                    </div><!-- /widget-main -->

                </div><!-- /widget-body -->
            </div><!-- /login-box -->
        </div><!-- /position-relative -->
    </div>
</div>
<strong></strong>
</body>
</html>
<script>
    $("input[type$='text'],input[type$='password']").each(function (n) {
        $(this).on('focus',function () {
            $(this).parent().css("border-color",'#1db5e1');
        })
    })

    $("input[type$='text'],input[type$='password']").each(function (n) {
        $(this).on('blur',function () {
            $(this).parent().css("border-color",'#ddd');
        })
    })

    $('#login_btn').on('click', function () {
        var num = 0;
        var str = "";
        $("input[type$='text'],input[type$='password']").each(function (n) {
            if ($(this).val() == "") {
                layer.alert(str += "" + $(this).attr("name") + "不能为空！\r\n", {
                    title: '提示框',
                    icon: 0,
                });
                $(this).parent().css("border",'1px red solid');
                num++;
                return false;
            }
            if ($(this).attr("name") == '学号') {
                if(!(/^[1-9]\d{4}[a-zA-Z0-9]\d{4}$/.test($(this).val()))){
                    layer.alert(str += "请输入正确的" + $(this).attr("name") + "！\r\n", {
                        title: '提示框',
                        icon: 0,
                    });
                    $(this).parent().css("border",'1px red solid');
                    num++;
                    return false;
                }

            }

            if ($(this).attr("name") == '班级') {
                if(!(/^[1-9]\d{4}[a-zA-Z0-9]\d{2}$/.test($(this).val()))){
                    layer.alert(str += "请输入正确的" + $(this).attr("name") + "编号！\r\n", {
                        title: '提示框',
                        icon: 0,
                    });
                    $(this).parent().css("border",'1px red solid');
                    num++;
                    return false;
                }

            }

            if ($(this).attr("name") == '手机') {
                if(!(/^1[3|4|5|8][0-9]\d{8}$/.test($(this).val()))){
                    layer.alert(str += "请输入正确的" + $(this).attr("name") + "！\r\n", {
                        title: '提示框',
                        icon: 0,
                    });
                    $(this).parent().css("border",'1px red solid');
                    num++;
                    return false;
                }
            }
        });
        if (num > 0) {
            return false;
        } else {

            $.ajax({
                url:'/index.php/index/submitApply',
                type:'POST',
                dataType:'json',
                data:'userno='+$("#userno").val()+ //学号
                '&userpwd='+$("#userpwd").val()+ //密码
                '&ident='+$("#Codes_text").val()+ //验证码
                '&usercol='+$("#usercol").val()+ //学院
                '&userpro='+$("#userpro").val()+ //专业
                '&usercls='+$("#usercls").val()+ //班级
                '&userpho='+$("#userpho").val()+ //手机号
                '&username='+$("#username").val(), //姓名
                success:function (val) {
                    if (val.errorcode == 1) {
                        layer.alert(val.errormsg, {
                            title: '提示框',
                            icon: 1,
                        });
                        setTimeout(function(){
                            layer_close();
                        },2000);

                    } else {
                        layer.alert(val.errormsg, {
                            title: '提示框',
                            icon: 2,
                        });
                    }
                },
                error:function (e) {
                    layer.alert('服务器错误！', {
                        title: '提示框',
                        icon: 0,
                    });
                }

            })
        }

    });
    $(document).ready(function () {
        $("input[type='text'],input[type='password']").blur(function () {
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class', 'frame_style').removeClass(' form_error');
            if ($el.val() == '') {
                $parent.attr('class', 'frame_style').addClass(' form_error');
            }
        });
        $("input[type='text'],input[type='password']").focus(function () {
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class', 'frame_style').removeClass(' form_errors');
            if ($el.val() == '') {
                $parent.attr('class', 'frame_style').addClass(' form_errors');
            } else {
                $parent.attr('class', 'frame_style').removeClass(' form_errors');
            }
        });
    })
    $('#code_png').on('click', function () {
        $('#code_png').attr('src','/index.php/index/getCaptcha/'+new Date().getTime());
    })
</script>