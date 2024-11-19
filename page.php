<?php
session_start();
include("connect.php");
include("csdl.php");
$p= new csdl();
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
					<strong>Màu Vẽ</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
		$item_per=!empty($_GET['per_page'])?$_GET['per_page']:4;
		$page =!empty($_GET['page'])?$_GET['page']:1;
		$offset =($page-1)*$item_per;
		$total= mysqli_query($conn,"SELECT * FROM product");
		$total= mysqli_num_rows($total);
		$totalpage = ceil($total/$item_per);	
?>
	<div class="container">
		<div class="row">
		<div class="row">
			<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="block block-layered-nav">
				<div class="block-title">
					<strong><span>Màu Vẽ</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
					   <dt id="tab1" class="tab-accordion accordion-close">Màu Nước</dt>
					   <dd class="tabcontent1" style="display:none;">
					   <ol>
						<li ><a  href="gridb946.html?cat=5">Màu Nước White Nights</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Nước Paul Rubens</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Nước Gansai Tambi</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Nước Leningrad</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Nước Turner</a></li>
						</ol>
						</dd>
						<dt id="tab11" class="tab-accordion accordion-open">Màu Dạ-Marker</dt>
						<dd class="tabcontent11">
					   <ol>
						<li ><a  href="gridb946.html?cat=5">Màu Dạ Touchliit</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Dạ Giotto Decor</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Dạ ZIG Brushables</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Dạ Touch Soft Head</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Dạ Superior</a></li>
						</ol>
						</dd>
						<dt id="tab12" class="tab-accordion accordion-close">Màu Chì</dt>
						<dd class="tabcontent12" style="display:none;">
					    <ol>
						<li ><a  href="gridb946.html?cat=5">Màu chì Stabilo Carbothello</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu chì khô Marco Raffine</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu chì blend Prismacolor</a></li>	
						</ol>
						</dd>
						<dt id="tab13" class="tab-accordion accordion-close">Màu Poster-Gouache</dt>
						<dd class="tabcontent13" style="display:none;">
					    <ol>
						<li ><a  href="gridb946.html?cat=5">Màu thạch Himi Gouache</a></li>
						<li ><a  href="gridb0b7.html?cat=6">Màu Poster Nicker</a></li>
						<li ><a  href="gridb946.html?cat=5">Màu Gouache Marie's</a></li>
						</ol>
						</dd>
					  	<dt id="tab5" class="tab-accordion accordion-close">Màu Acrylic-Sơn Dầu</dt>
						<dd class="tabcontent5" style="display:none;">
					    <ol>
						<li ><a  href="gridb946.html?cat=5">Màu Acrylic Marie's</a></li>
						</ol>
						</dd>
					  <dt id="tab14" class="tab-accordion accordion-close">Màu Nhũ</dt>
						<dd class="tabcontent14" style="display:none;">
					    <ol>
						<li ><a  href="gridb946.html?cat=5">Màu Acrylic Marie's</a></li>
						</ol>
						</dd>
					</dl>
				</div>
				<div class="block-title-shop-by">
				<strong><span>Shop by</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
						<dt id="tab2" class="tab-accordion accordion-open"> Price</dt>
						<dd class="tabcontent2">
							<div class="price">
							<div class="range-wrap"><div id="slider-range"></div>
							</div>
							<div class="text-box"><div class="price-from">
								$ <input type="text" name="min" id="minPrice" class="priceTextBox" value="10.000"/></div><div class="price-to"> <input type="text" name="max" id="maxPrice" class="priceTextBox" value="3.000.000"/></div>					
								<a class="go" href="javascript:void(0)">Fillter</a>
								<input type="hidden" id="amount" readonly="readonly" style="background:none; border:none;" value="$10.00 - $3.000.000" />
							</div>
							</div>	
						</dd>
						<dt id="tab4" class="tab-accordion accordion-close">Color</dt>
							<dd class="tabcontent4" style="display:none;"><ol>
							<li class='licolor'><a  class='itemcolor colorwhite' href="gridead2.html?color=25">White_#ffffff</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#e66054' href="grid2397.html?color=8">Blue _#e66054</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d0b7cc' href="gridd37b.html?color=10">Green_#d0b7cc</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#107a8e' href="grid2686.html?color=9">Yellow _#107a8e</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#a7bc93' href="grid422e.html?color=24">Pink_#a7bc93</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d3b627' href="grid3060.html?color=23">Lightblue_#d3b627</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#b4b3ae' href="grid3e7c.html?color=22">Gray_#b4b3ae</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#502006' href="gridaa79.html?color=21">Red_#502006</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#311e21' href="gridc0d9.html?color=20">violet_#311e21</a></li>
							</ol>
							</dd>
						<dt id="tab3" class="tab-accordion accordion-open">Brand</dt>
						  <dd class="tabcontent3">
						  <ol>
							<li ><a  href="grid4b22.html?manufacturer=11"></a>White Nights(2)</li>
							<li > <a   href="grid57f6.html?manufacturer=13">Superior</a>(5) </li>
							<li ><a href="gridb84b.html?manufacturer=14">Gansai Tambi</a>(3) </li>
							<li ><a   href="grid238e.html?manufacturer=12">Holbein</a>(2) </li>
							</ol>
					  </dd>
						   </dl>
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
				<a class="gt-shop" href="detail.html">Shop Now</a>
			</div>
			<div class="item"><a href="detail.html"><img src="images/banner5.jpg" alt="banner" /></a>
				<div class="std">
				<span class="price">$25.000</span>
				<span class="t2">Bút đi nét Micron Pigma Manga</span>
				<span class="t3">Bút Viền Pigma Manga thuộc hãng Sakura nổi tiếng đến từ Nhật Bản. Sản phẩm không lem khi sử dụng với màu nước( kháng nước ). Thích hợp với ký hoạ, vẽ truyện tranh, vẽ màu nước, vẽ kỹ thuật, kiến trúc,...</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			
			</div>
			<div class="item"><a href="detail.html"><img src="images/banner3.jpg" alt="banner" /></a>
				<div class="std">
				<span class="price">$12.000</span>
				<span class="t2">Màu Mực Nhũ</span>
				<span class="t3">Màu gốc nhuộm. Sử dụng với bút máy hoặc pha loãng để phủ lên tranh như màu nước( loang kém hơn màu nước ). Màu có 24 màu lấp lánh.</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
			<div class="wrap-banner-cate">
			<a class="cate-img" href="#"><img src="images/banner.jpg" alt="" /></a>
			</div>
				<h3>Màu Vẽ</h3>
				<div id="catalog-listing">
					<div class="category-products page-product-list">
						<ul class="products-grid row">
							<?php 
								$item_per=!empty($_GET['per_page'])?$_GET['per_page']:4;
								$page =!empty($_GET['page'])?$_GET['page']:1;
								$offset =($page-1)*$item_per;
								$total= mysqli_query($conn,"SELECT * FROM product");
								$total= mysqli_num_rows($total);
								$totalpage = ceil($total/$item_per);
								
								
								$sql_page="SELECT * FROM product ORDER BY id_product ASC LIMIT ".$item_per." OFFSET ".$offset." ";
								$query_page= mysqli_query($conn,$sql_page);
								$i= mysqli_num_rows($query_page);
									while($row=mysqli_fetch_array($query_page)){
							?>
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
							  <div class="item-wrap">
								 <div class="item-image">
									<a class="product-image no-touch" href="#">
									<img class="first_image" src="images/position-10/<?php echo $row['image'];?>" alt="Product demo" /> 
									</a>
									<div class="item-btn">
									   <div class="box-inner">
										  <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
										  <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
										  <span class="qview"><a href="detail.php" ></a>
										  <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
										  </span>
									   </div>
									</div>
									<a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
								 </div>
								 <div class="pro-info">
									<div class="pro-inner">
									   <div class="pro-title product-name"><a href="detail.php?id=<?php echo $row['id_product']?>"><?php echo $row['name_pro']; ?></a></div>
									   <div class="pro-content">
										  <div class="wrap-price">
											 <div class="price-box">
												<span class="regular-price">
												<span class="price"><?php echo $row['gia_pro']; ?></span></span>
												 <p class="special-price">
 													<span class="price"><?php echo $row['giafake_pro'];?></span></p>
											 </div>
										  </div>
									</div>
								 </div>
							  </div>	
							  <!--end item wrap -->
						   </li>
							<?php } ?>
						</ul>
					
						<div class="toolbar-bottom">
						   <div class="toolbar">
							  <strong>Pages</strong>
							   	<div class="pager">
									<div class="pages">
					<?php
						if($page>3){
							$firstpage=1;
							echo '<a href="?per_page='.$item_per.'&page='.$firstpage.'">Fisrt</a> |';
						}
						if($page>1){
							$prev=$page-1;
							echo '<a href="?per_page='.$item_per.'&page='.$prev.'">Prev</a> |';
						}
						
							for($i=1;$i<=$totalpage;$i++){
                				if($i!=$page){
									if($i>$page-3 && $i<$page+3){
										echo '<a href="?per_page='.$item_per.'&page='.$i.'">'.$i.'</a> | ';
										}
									}else{
										?><strong><?= $i ?></strong>
							<?php } ?>
						<?php } ?>	
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