<?php
session_start();
include("connect.php");
include("csdl.php");
?>
<?php
  $sql_suasp="SELECT * FROM product WHERE id_product='$_GET[id]' LIMIT 1";
  $query_suasp= mysqli_query($conn,$sql_suasp);
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
					<div class="button_themsp">
						<a href="suaxoa.php">Sửa sản phẩm</a>
						</div>
						<?php
							while($row=mysqli_fetch_array($query_suasp)){
						?>
						<form method="post" enctype="multipart/form-data">
							<h3>&nbsp;</h3>
							<table width="600" border="1">
							  <tr>
								<td colspan="2" style="text-align:center;font-size:25px;">Sửa - Xóa sản phẩm</td>
							  </tr>
								<div>
								<tr>
					<select name="danhmuc" id="danhmuc">				
                    <?php
                        $sql_danhmuc="SELECT * FROM category_list ORDER BY id_cate ASC";
                        $query_danhmuc=mysqli_query($conn,$sql_danhmuc);
                        	while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                    ?>
                        <option value="<?php echo $row_danhmuc['id_cate']; ?>"><?php echo $row_danhmuc['name'] ?></option>

                    <?php
                    	}
                    ?>
					</select>
							  </tr>
								</div>
							  <tr>
								<td width="97">Tên sản phẩm</td>
								<td width="87"><input type="text" name="tensp" value="<?php echo $row['name_pro'] ?>"></td>
							  </tr>
							  <tr>
								<td>Mã sản phẩm</td>
								<td><input type="text" name="masp" value="<?php echo $row['ma_pro']; ?>"></td>
							  </tr>
							  <tr>
								<td>Hình ảnh</td>
								<td><input type="file" name="image" value="<?php echo $row['image']; ?>"/>
									<!--<img src="" width="80" height="80">-->
								  </td>
							  </tr>
							  <tr>
								<td>Giá đề xuất</td>
								<td><input type="text" name="giasp" value="<?php echo $row['gia_pro']; ?>"></td>
							  </tr>
							  <tr>
								<td>Giá giảm</td>
								<td><input type="text" name="giafakesp" value="<?php echo $row['giafake_pro']; ?>"></td>
							  </tr>
							  <tr>
								<td>Nội dung</td>
								<td><textarea name="noidung" cols="40" rows="10"><?php echo $row['noidung']; ?></textarea></td>
							  </tr>
							  <tr>
								<td>Số lượng</td>
								<td><input type="text" name="soluong" value="<?php echo $row['qty']; ?>"></td>
							  </tr>
							  <tr>
								<td colspan="2">
								<div align="center">
								  <input type="submit" name="suasanpham" value="Sửa sản phẩm">
								</div>
								</td>
							  </tr>
							</table>
						</form>
					<?php }?>
					<?php
						if($_SERVER['REQUEST_METHOD'] == "POST"){
							$id=$_REQUEST['$id'];
							$tensp= $_REQUEST['tensp'];
							$masp=$_REQUEST['masp'];
							$giasp=$_REQUEST['giasp'];
							$giafakesp=$_REQUEST['giafakesp'];
							$soluong=$_REQUEST['soluong'];
							$hinhanh= $_FILES['image']['name'];
							$noidung=$_REQUEST['noidung'];
							$id_danhmuc=$_REQUEST['danhmuc'];
							
							$error=false;
							$id=$_GET['id'];
							$sql_update="UPDATE product SET name_pro = '$tensp', ma_pro = '$masp', gia_pro = '$giasp', giafake_pro = '$giafakesp', qty = '$soluong', image = '$hinhanh', noidung = '$noidung', id_cate = '$danhmuc' WHERE id_product='$id'";
							$query= mysqli_query($conn,$sql_update);
								if(!$query){
									$error="Không thể update sản phẩm.";
								}
								 elseif($error!==false){
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
									<h2>Update sản phẩm thành công.</h2>
									<a href="lietke.php">Danh sách sản phẩm</a>
								</div>
					<?php } 
						}
					$conn->close();
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