<?php
session_start();
include("connect.php");
include("csdl.php");
$p= new csdl();
?>
<?php
	$sql_pro="SELECT * FROM product WHERE id_product ='$_GET[id]' ";
	$query_pro= mysqli_query($conn,$sql_pro);
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/Sketch!`/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:49:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/css/style-main.css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
<title>Sketch!`</title>
</head>
<body class="product-view">
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
					<strong>Màu Nước</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div class="row">
			<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="block block-lastest-pro">
				<div class="block-title">
					<strong><span>Latest Products</span></strong>
				</div>
				<div class="block  vt-slider lastest-slider  row">
				   <div class="slider-inner">
					  <div class="container-slider">
						 <div class="products-grid">
							<?php
							 	$p->latest("SELECT * FROM best");
							 ?>
						 </div>
					  </div>
					  </div>
				</div>
			</div>
			<div class="block block-compare">
				<div class="block-title">
					<strong><span>COMPARE PRODUCTS (2)</span></strong>
				</div>
				<div class="content">
				<ul>
				<li><a href="detail.html">Màu Nước White Nights</a></li>
				<li><a href="detail.html">Màu Nước Leningrad</a></li>
					<div class="actions">
					<a class="go-compare" href="detail.html">
							Compare
					</a>
					</div>
				</ul>
				<div class="actions">
					<a class="btn-clear" href="detail.html">
							clear all
					</a>
				</div>
				</div>
			</div>
			<div class="block box-banner">	
			<div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500"><ol class="carousel-indicators">
			<li class="active" data-target="#box-banner" data-slide-to="0"></li>
			<li data-target="#box-banner" data-slide-to="1"></li>
			<li data-target="#box-banner" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<div class="item active"><a href="detail.html"><img src="images/banner1.jpg" alt="banner" /></a>
				<div class="std">
				<span class="price">$58.000</span>
				<span class="t2">Màu Poster Nicker</span>
				<span class="t3">Nicker là thương hiệu màu cao cấp đến từ Nhật Bản. Hãng nổi tiếng với các dòng màu poster chất lượng, có độ che phủ cao. Nicker Poster được sử dụng nhiều trong phim hoạt hình của hãng Ghibli đình đám.</span>
				</div>
				<a class="gt-shop" href="detail.php">Shop Now</a>
			</div>
			<div class="item"><a href="detail.html"><img src="images/banner5.jpg" alt="banner" /></a>
				<div class="std">
				<span class="price">$25.000</span>
				<span class="t2">Bút đi nét Micron Pigma Manga</span>
				<span class="t3">Bút Viền Pigma Manga thuộc hãng Sakura nổi tiếng đến từ Nhật Bản. Sản phẩm không lem khi sử dụng với màu nước( kháng nước ). Thích hợp với ký hoạ, vẽ truyện tranh, vẽ màu nước, vẽ kỹ thuật, kiến trúc,...</span>
				</div>
				<a class="gt-shop" href="detail.php">Shop Now</a>
			
			</div>
			<div class="item"><a href="detail.html"><img src="images/banner3.jpg" alt="banner" /></a>
				<div class="std">
				<span class="price">$12.000</span>
				<span class="t2">Màu Mực Nhũ</span>
				<span class="t3">Màu gốc nhuộm. Sử dụng với bút máy hoặc pha loãng để phủ lên tranh như màu nước( loang kém hơn màu nước ). Màu có 24 màu lấp lánh.</span>
				</div>
				<a class="gt-shop" href="detail.php">Shop Now</a>
			</div>
			</div>
			</div>
			</div>
			</div>
		
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
				
				<div class="product-essential">
				<div class="wrap">
				<form action="cart.php" method="post" id="product_addtocart_form">
					<?php
						$p->detail("SELECT * FROM product");
					?>
					</form>
				
					<div class="share-this" style="margin-top:18px;">
					<span class='st_sharethis_large' displayText='ShareThis'></span>
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_pinterest_large' displayText='Pinterest'></span>
					<span class='st_email_large' displayText='Email'></span>
					<script type="text/javascript">var switchTo5x=true;</script>
					<script type="text/javascript" src="../../../w.sharethis.com/button/buttons.js"></script>
					<script type="text/javascript">stLight.options({publisher: "6d56a077-95db-44a6-a019-d5a901534fea", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
					</div>
			
				<?php while($row=mysqli_fetch_array($query_pro)){ ?>
			<div class="tab-detail">
					<p>Đánh giá sản phẩm</p>
					<div class="form-add">
					<form action="#" method="post" id="review-form">
					   <input name="form_key" type="hidden" value="" />
					   <h3>Bạn đang đánh giá:            <span><?php echo $row['name_pro']; ?></span>
					   </h3>
					   <div class="fieldset">
						  <span id="input-message-box"></span>
						  <input type="hidden" name="validate_rating" class="validate-rating" value="" />
						  <ul class="form-list">
							 <li>
								<label for="review_field" class="required"><em>*</em>Hãy cho chúng tớ biết cảm nhận của cậu</label>
								<div class="input-box">
								   <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
								</div>
							 </li>
							 <li class="inline-label">
								<label for="summary_field" class="required"><em>*</em>Tóm tắt đánh giá của bạn</label>
								<div class="input-box">
								   <input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
								</div>
							 </li>
							 <li class="inline-label">
								<label for="nickname_field" class="required"><em>*</em>Tên của cậu là?</label>
								<div class="input-box">
								   <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
								</div>
							 </li>
						  </ul>
					   </div>
					   <div class="buttons-set">
						  <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
					   </div>
					</form>
				</div>
			 </div>
					<?php } ?>
				 	</div>
				</div>
			</div>
				
				<div id="upsell_pro" class="products-grid">
				<div class="inner">
					<div class="title">
						<span>Sản phẩm khác</span>            
					</div>
					<div class="block  vt-slider vt-slider5  row">
					   <div class="slider-inner">
						  <div class="container-slider">
							 <div class="products-grid">
								<?php
									$p->loaddeals("SELECT * FROM deals");	
								?>
								</div>
							 </div>
							
						  </div>
						</div>
						</div>
					</div>	 
				</div>
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
