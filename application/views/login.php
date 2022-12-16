<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>LKCENTRIX SOLUTIONS - Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/LkCentrix.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">
    <link rel="icon" href="<?php echo base_url();?>dist/img/lk-Logo.png">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <h4><strong>LKCENTRIX SOLUTIONS </strong> </h4>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">LOGIN LKCENTRIX SOLUTIONS</p>
   <!-- Error Alert -->
		<?php if($errorSession != ""){?>
         <div class="alert alert-danger"  role="alert">
			<?php echo $errorSession; ?>
		 </div> <!-- th:if="${errorSession}" th:text="${errorSession}" -->
		<?php }?>
		
		<?php if($logoutSession != ""){?>
         <div class="alert alert-success"  role="alert">
			<?php echo $logoutSession; ?>
		 </div> <!-- th:if="${errorSession}" th:text="${errorSession}" -->
		<?php }?>
		
        <form method="post" action="<?php echo site_url();?>/user/login"> <!--th:action="@{/traceenquiry}" th:object="${signRequest}" --> 
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/> <!-- th:field="*{username}" --> 
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/> <!-- th:field="*{password}" --> 
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
