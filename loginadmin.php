<?php
session_start();
include("connect.php");
include("csdl.php");
$p=new csdl();
 if(isset($_REQUEST['login'])){
	$taikhoan=$_REQUEST['user'];
	$matkhau=md5($_REQUEST['pass']);
	$sql="SELECT * FROM admin WHERE user = '$taikhoan' AND pass = '$matkhau' LIMIT 1";
	$row=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($row);
		if($count>0){
			$_SESSION['login']=$taikhoan;
			header("location:admin.php");
		}
		else{
			header("location:loginadmin.php?user=false");
		}
}
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/Sketch!`/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:49:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/css/style-main.css"/>
<link rel="stylesheet" type="text/css" href="style/css/loginmain.css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
<title>Sketch!`</title>
</head>
<body class="home">
<!--begin header-->
<?php include("header.php"); ?>
<!--end header-->
	
<!--begin content-->
<div id="box-content">
<div class="container">
		<div class="row">
			<div class="slide-show">
			  <div class="vt-slideshow">
				<ul>
				<?php
					$p->slideshow("SELECT * FROM slideshow ORDER BY name_slide DECS WHERE id_slide='1' ");
				?>
				</ul>
		  	  </div>
			</div>
		</div>
  </div>
</div>
<br>
<div class="container">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login Admin
					</span>
				<form method="post">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input name="user" type="text" class="input100" id="email">
						<span class="focus-input100"></span>
						<span class="label-input100">User</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input name="pass" type="password" class="input100" id="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			
					<div class="container-login100-form-btn">
						<button type="submit" name="login" value="Login" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>
				</form>
			</form>
				<div class="login100-more" style="background-image: url('images/claude.jpg');">
				</div>
			</div>
		</div>
	</div>
</div>
<!--end content-->

<!--begin footer-->
<?php include("footer.php"); ?>
<!--end footer-->	
</body>

<!-- Mirrored from demo.7uptheme.com/html/Sketch!`/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:51:47 GMT -->
</html>