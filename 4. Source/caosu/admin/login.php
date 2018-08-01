<?php 
	@session_start();
	require_once("controllers/c_user.php");
	$c_user = new C_user();
	if(isset($_SESSION['user']))
		header('location: index.php');
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c_user->Xu_ly_login($username,$password);
	}	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='public/layout/assets/css/jquery-ui.css'>
    <link rel='stylesheet' href='public/layout/assets/css/bootstrap.css'>
    <link rel='stylesheet' href='public/layout/assets/css/font-awesome.css'>
    <link rel='stylesheet' href='public/layout/assets/css/main.css'>

    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href="public/layout/assets/favicon.ico" rel="shortcut icon">
    <link href="public/layout/assets/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      @javascript html5shiv respond.min
    <![endif]-->
    <title>Admin</title>
</head>
<body>
    <div class="all-wrapper no-menu-wrapper">
        <div class="login-logo-w" style="margin-top: 3em">
            <a href="login.php" class="logo">
                <i><img src="../public/layout/images/logo.png" /></i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="content-wrapper bold-shadow">
                    <div class="content-inner">
                        <div class="main-content main-content-grey-gradient no-page-header">
                            <div class="main-content-inner">
                                <form action="login.php" method="post" role="form">
                                    <h3 class="form-title form-title-first"><i class="icon-lock"></i> QUẢN LÝ ĐĂNG NHẬP</h3>
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" name="username" class="form-control" placeholder="Nhập tên đăng nhập ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu ....">
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input type="checkbox"> Remember me-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <input type="submit" name="login" class="btn btn-primary btn-lg" value="ĐĂNG NHẬP" />
                                    <a href="../index.php" class="btn btn-link">Quay lại</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="public/layout/assets/js/jquery.min.js"></script>
    <script src="public/layout/assets/js/jquery-ui.min.js"></script>
    <script src='public/layout/assets/js/bootstrap.min.js'></script>
    <script src='public/layout/assets/js/custom.js'></script>
</body>
</html>