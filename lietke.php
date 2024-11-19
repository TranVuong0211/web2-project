<?php
session_start();
include("connect.php");
include("csdl.php");
$p = new csdl();
?>
<?php
  $sql_lietkesp="SELECT * FROM product";
  $query_lietkesp= mysqli_query($conn,$sql_lietkesp);
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/mello/mauve.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:56:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/css/style-main.css"/>
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
						<dt id="tab11" class="tab-accordion accordion-close">Danh mục sản phẩm</dt>
						<dd class="tabcontent11">
						<ol>
					  		<li ><a  href="list.php">Category List</a></li>
						</ol>
					  	</dd>
						<dd class="tabcontent12" style="display:none;">
						</dd>
						<dt id="tab13" class="tab-accordion accordion-close">Giỏ Hàng</dt>
						<dd class="tabcontent13" style="display:none;">
						</dd>
					</dl>
				</div>	
			</div>
		</div>
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
				<br>
				<ol class="products-list"> 
					<div class="button_themsp">
						<a href="them.php">Liệt kê sản phẩm</a> 
						</div>
					<?php
					$i=0;
					  while($row= mysqli_fetch_array($query_lietkesp)){
					$i++;
  					?>
						<form method="post" enctype="multipart/form-data">
							<h3>&nbsp;</h3>
							<table width="600" border="1">
								<tr>
									<td><?php echo $i; ?></td>
								</tr>
								<tr>
								<td width="97">ID sản phẩm</td>
								<td width="87"><?php echo $row['id_product'] ?></td>
							  </tr>
							  <tr>
								<td width="97">Tên sản phẩm</td>
								<td width="87"><?php echo $row['name_pro'] ?></td>
							  </tr>
							  <tr>
								<td>Mã sản phẩm</td>
								<td><?php echo $row['ma_pro'];?></td>
							  </tr>
							  <tr>
								<td>Hình ảnh</td>
								<td><?php echo $row['image']; ?>
									<!--<img src="" width="80" height="80">-->
								  </td>
							  </tr>
							  <tr>
								<td>Giá đề xuất</td>
								<td><?php echo $row['gia_pro']; ?></td>
							  </tr>
							  <tr>
								<td>Giá giảm</td>
								<td><?php echo $row['giafake_pro']; ?></td>
							  </tr>
							  <tr>
								<td>Nội dung</td>
								<td><?php echo $row['noidung']; ?></td>
							  </tr>
							  <tr>
								<td>Số lượng</td>
								<td><?php echo $row['qty']; ?></td>
							  </tr>
								 <tr>
								<td colspan="2">
								<div align="center">
								  <a href="sua.php?id=<?php echo $row['id_product']; ?>">Sửa sản phẩm </a>
								  <a href="xoa.php?id=<?php echo $row['id_product']; ?>"> Xóa sản phẩm</a>
								</div>
								</td>
							  </tr>
							</table>
						</form>
					<?php
					  }
						?>
					</ol>
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