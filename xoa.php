<?php
session_start();
include("connect.php");
include("csdl.php");
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/Sketch!`/mauve.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:56:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/css/style-main.css"/>
<link rel="stylesheet" type="text/css" href="xuli.php"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
<title>Sketch!`</title>
</head>
<body>
<body class="category">
<!--begin header-->
<?php include("header.php"); ?>
<!--end header-->
	
<!--begin content-->
<div class="content">
	<div class="breadcrumbs">    
		<div class="container">
			<div class="row">
				<ul>
					<li class="home">
						<a href="home.php" title="Go to Home Page">Home</a>
						<span>|</span>
					 </li>
					<li class="category3">
					<strong>Admin</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="block block-layered-nav">
				<div class="block-title">
					<strong><span>Quản lí sản phẩm</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
					   <dt id="tab1" class="tab-accordion accordion-close">Chức năng</dt>
					   <dd class="tabcontent1" style="display:none;">
					   <ol>
						<li ><a  href="lietke.php">Liệt kê sản phẩm</a></li>
						<li ><a  href="them.php">Thêm sản phẩm</a></li>
						</ol>
						</dd>
						<dt id="tab11" class="tab-accordion accordion-close">Quản lí User</dt>
						<dd class="tabcontent11">
						<ol>
					  		<li ><a  href=""></a></li>
						</ol>
					  	</dd>
						<dd class="tabcontent12" style="display:none;">
						</dd>
						<dt id="tab13" class="tab-accordion accordion-close">Quản lí giỏ Hàng</dt>
						<dd class="tabcontent13" style="display:none;">
						</dd>
					</dl>
				</div>	
			</div>
		</div>
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
				<br>
				<ol class="products-list"> 
					
	<?php
		$error=false;
		$id=$_GET['id'];
		$sql_delete= "DELETE FROM product WHERE id_product ='$id' LIMIT 1";
		$query= mysqli_query($conn,$sql_delete);
		if(!$query){
			$error="Không thể xóa sản phẩm.";
		}
	$conn->close();
		if($error!==false){
			?>
		<div class="product-list">
			<h2>Thông báo</h2>
			<h2><?= $error; ?></h2>
			<a href="lietke.php">Danh sách sản phẩm</a>
		</div>
	<?php	
		}
		else{
		?>
		<div class="product-list">
			<h2>Xóa sản phẩm thành công.</h2>
			<a href="lietke.php">Danh sách sản phẩm</a>
		</div>
		<?php } ?>
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