<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="__PUBLIC__/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="__PUBLIC__/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="__PUBLIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- add user -->
    <script type="text/javascript">

        function jumpnewsadd(){
            window.location="__URL__/newsadd";
        }
    </script>
    <!-- add user -->

</head>
<body>
	<div id="page-wrapper">
        <div class="container-fluid">
            <!-- /.row -->
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <h1>用户登录页面</h1> 
                        <a href="<?php echo U('Index/index');?>"><input class="btn btn-info btn-sm" type="button"  value="返回首页"></a><br/><br/>
                        <form action='__URL__/do_login' method='post' name='myForm'>
                            <div class="form-group">
                              <label for="username">用户名</label>
                              <input type="text" class="form-control" name="username" placeholder="username">
                            </div>
                            <div class="form-group" >
                              <label for="exampleInputPassword1">密码</label>
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="row">
                              <div class="col-lg-8">
                                  <div class="form-group" >
                                    <label for="exampleInputPassword1">验证码</label>
                                    <input type="text" class="form-control" name="verify">
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="form-group" style="margin-top:20px;">
                                    <!-- <Message:verify width='90px' height='40px' /> -->
                                     <img src="__APP__/Public/verify" onclick='this.src=this.src+"?"+Math.random()' width="90" height="40"/> 
                                  </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-default">登陆</button>
                            <a href="__APP__/Register/register.html"><button type="button" class="btn btn-default">注册</button></a>
                        </form>
                                
                    </div>
                </div>
    	      <!-- /.row -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="__PUBLIC__/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="__PUBLIC__/js/plugins/morris/raphael.min.js"></script>
    <script src="__PUBLIC__/js/plugins/morris/morris.min.js"></script>
    <script src="__PUBLIC__/js/plugins/morris/morris-data.js"></script>

</body>

</html>