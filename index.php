<?php
session_start();
include("connect.php");
include("csdl.php");
$p= new csdl();
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
		
	<div class="position-10">
		<div class="container">
			<div class="title">
			<h5>TOP SẢN PHẨM BÁN CHẠY</h5> 
			<h6> Một vài sản phẩm chất lượng mà giá hạt dẻ Bạn tham khảo nhá ^^</h6>
			<div class="content">
				<?php
					$p->selling("SELECT * FROM best ORDER BY name_best DECS WHERE id_best='1'")
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="position-03">
	<div class="container">
			<div class="row">
				<div class="box-1">
				 <h2>featured</h2>
				  <ul class="control">
					<li data-rel="0px" class="ct1 active">Màu Nước</li>
					<li data-rel="-852px" class="ct2">Giấy Vẽ</li>
					<li data-rel="-1704px" class="ct3">Bút-Cọ vẽ</li>
					<li data-rel="-2556px" class="ct4">Điện Tử</li>
					<li data-rel="-3408px" class="last ct5">Văn phòng Phẩm</li>
				  </ul>
				</div>
				<div class="box-2">
				<div class="slide">
				<div class="item">
					<div class="box-image"><a href="#"><img src="images/position-10/whitenights.jpg" alt=""/></a></div>
					  <div class="product-shop">
						<div class="pro-info">
							 <div class="pro-inner">
								<div class="pro-title product-name"><a href="detail.html">Màu nước White Nights</a></div>
								<div class="pro-content">
								   <div class="wrap-price">
									  <div class="price-box">
										 <span class="regular-price">
										 <span class="price">$550.000</span></span>
									  </div>
								   </div>
								   <div class="ratings">
									  <div class="rating-box">
										 <div class="rating" style="width:80%"></div>
									  </div>
									  <span class="amount"><a href="#">1(s)</a></span>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="std">
				Màu nước White Nights - set 12/24 màu là màu hạng họa sĩ vơi chất màu trong và tươi. White Nighst được nhiều họa sĩ tin dùng vì giá thành phải chăng và chất lượng. Màu có  độ loang tốt, dễ phối màu.Phù hợp với nhiều thể loại tranh như tranh phong cảnh, hoa lá, minh họa, hoạt hình,....
					  </div>
					  <div class="item-btn">
						<div class="box-inner">
						   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
						   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
						   <span class="qview">
							<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
						   </span>
						   <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
						</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box-image"><a href="#"><img src="images/product/larg/happy.jpg" alt=""/></a></div>
					  <div class="product-shop">
						<div class="pro-info">
							 <div class="pro-inner">
								<div class="pro-title product-name"><a href="detail.html">Giấy Happy</a></div>
								<div class="pro-content">
								   <div class="wrap-price">
									  <div class="price-box">
										 <span class="regular-price">
										 <span class="price">$25.000</span></span>
										 <p class="special-price">
										</p>
									  </div>
								   </div>
								   <div class="ratings">
									  <div class="rating-box">
										 <div class="rating" style="width:80%"></div>
									  </div>
									  <span class="amount"><a href="#">1(s)</a></span>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="std">
					  Giấy HAPPY 300gsm thuộc vân Cold, bề mặt nhám, có vân lưới, được sản xuất theo chất lượng công nghệ giấy của Ý. Giấy hoàn toàn không chứa axit, không có chất làm sáng quang học, thân thiện với môi trường, độ trắng hoàn toàn tự nhiên giúp tăng thời gian bảo quản và lưu trữ tác phẩm được lâu hơn mà không bị ố vàng.
					  </div>
					  <div class="item-btn">
						<div class="box-inner">
						   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
						   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
						   <span class="qview">
							<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
						   </span>
						   <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
						</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box-image"><a href="#"><img src="images/position-10/holic.jpg" alt=""/></a></div>
					  <div class="product-shop">
						<div class="pro-info">
							 <div class="pro-inner">
								<div class="pro-title product-name"><a href="detail.html">Cọ Holic</a></div>
								<div class="pro-content">
								   <div class="wrap-price">
									  <div class="price-box">
										 <span class="regular-price">
										 <span class="price">$105.000</span></span>
										 <p class="special-price">
										</p>
									  </div>
								   </div>
								   <div class="ratings">
									  <div class="rating-box">
										 <div class="rating" style="width:80%"></div>
									  </div>
									  <span class="amount"><a href="#">1(s)</a></span>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="std">
					 CỌ MOP HOLIC SNOW được gia công tại nhà máy làm cọ chuyên nghiệp có tiếng của Hàn Quốc. Lông cọ bao gồm lông sóc, lông dê và lông nhân tạo theo công thức độc quyền của Nabii( thương hiệu Việt Nam )với tỉ lệ được kiểm soát chặt chẽ giúp gia tăng tính đàn hồi, độ ngậm nước cao, khả năng giữ form cọ tốt với giá thành rất cạnh tranh.
					Cọ có 3 size S, M, L phù hợp với nhiều kỹ thuật và thể loại tranh.
					  </div>
					  <div class="item-btn">
						<div class="box-inner">
						   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
						   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
						   <span class="qview">
							<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
						   </span>
						   <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
						</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box-image"><a href="#"><img src="images/position-10/wacom.jpg" alt=""/></a></div>
					  <div class="product-shop">
						<div class="pro-info">
							 <div class="pro-inner">
								<div class="pro-title product-name">Wacom Intuos CTL-4100<a href="detail.html"></a></div>
								<div class="pro-content">
								   <div class="wrap-price">
									  <div class="price-box">
										 <span class="regular-price">
										 <span class="price">$2.050.000</span></span>
										 <p class="special-price">
											<span class="price">$2.650.000</span>
										</p>
									  </div>
								   </div>
								   <div class="ratings">
									  <div class="rating-box">
										 <div class="rating" style="width:80%"></div>
									  </div>
									  <span class="amount"><a href="#">1(s)</a></span>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="std">
					  Bảng vẽ Intuos CTL-4100, vùng hoạt động 6.0 x 3.7 in, độ phân giải 2540 lpi, độ phản hồi 133 pps, 4 phím tắt tùy biến, bút cảm ứng 4096 mức lực nhấn, kết nối USB, phần mềm Painter Essentials 6 hoặc Aftershot 3.
					  </div>
					  <div class="item-btn">
						<div class="box-inner">
						   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
						   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
						   <span class="qview">
							<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
						   </span>
						   <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
						</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box-image"><a href="#"><img src="images/position-10/thuoc.jpg" alt=""/></a></div>
					  <div class="product-shop">
						<div class="pro-info">
							 <div class="pro-inner">
								<div class="pro-title product-name"><a href="detail.html">Thước hình học</a></div>
								<div class="pro-content">
								   <div class="wrap-price">
									  <div class="price-box">
										 <span class="regular-price">
										 <span class="price">$12.000</span></span>
										 <p class="special-price">
										</p>
									  </div>
								   </div>
								   <div class="ratings">
									  <div class="rating-box">
										 <div class="rating" style="width:80%"></div>
									  </div>
									  <span class="amount"><a href="#">1(s)</a></span>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="std">
					 Tiện ích trong các môn toán hình học, hỗ trợ vẽ.
					  </div>
					  <div class="item-btn">
						<div class="box-inner">
						   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
						   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
						   <span class="qview">
							<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
						   </span>
						   <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
						</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="position-02">
	<div class="container">
			<div class="row">
			<div class="title-sp">
			NEWEST DEALS
			<div class="std">
			Các sản phẩm đều có tại cửa hàng.
			</div>
			</div>
			<div class="block vt-slider vt-slider3">
			   <div class="slider-inner">
				  <div class="container-slider">
					 <div class="products-grid">
						<?php
							$p->loaddeals("SELECT * FROM deals ORDER BY name_deals DECS WHERE id_deals='1'");
						?>
						</div>
					 </div>
					 <div class="navslider">
						<a class="prev" href="#">Prev</a>
						<a class="next" href="#">Next</a>
					</div>

				  </div>
			
				</div>
			</div>
		</div>
	</div>
	<div class="position-04">
		<div class="container">
		  <div class="row">
			<div class="title-sp">
			BEST SELLING
			<div class="std">
			Bạn cần nguồn cảm hứng mới? Ở đây chúng tớ có 1 vài gợi ý thú vị đây.
			</div>
			<ul class="view-more">
			<li><a href="#">Xem thêm Sổ Vẽ</a></li>
			<li><a href="#">Xem thêm Cọ Vẽ</a></li>
			</ul>
			</div>
			<div class="block vt-slider vt-slider4">
			   <div class="slider-inner">
				  <div class="container-slider">
					 <div class="products-grid">
						<div class="item">
						   <div class="item-wrap">
							      <div class="item-image">
									 <a class="product-image no-touch" href="#" title="Sổ Ima">
									 <img class="first_image" src="images/position-10/ima.jpg" alt="Product demo" /> 
									 </a>
								  </div>
								  <div class="product-shop">
									<div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Sổ Ima</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$75.000</span></span>
													 <p class="special-price">
														<span class="price">$90.000</span>
													</p>
												  </div>
											   </div>
											   	 <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div>
											</div>
										 </div>
									  </div>
									 <div class="item-btn">
									<div class="box-inner">
									   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
									   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
									   <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
									   </span>
									   <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									</div>
									</div>
								</div>
					      </div>
						   <!--end item wrap -->
						<div class="item-wrap">
						 <div class="item-image">
									 <a class="product-image no-touch" href="#" title="Sổ Sketch Nabii">
									 <img src="images/position-10/sketch.jpg" alt="Product demo" class="first_image" /> 
									 </a>
								  </div>
								    <div class="product-shop">
									<div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Sổ Sketch Nabii</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$100.000</span></span>
													 <p class="special-price">
												</p>
												  </div>
											   </div>
											   <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div>
											</div>
										 </div>
									  </div>
									 <div class="item-btn">
									<div class="box-inner">
									   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
									   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
									   <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
									   </span>
									   <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									</div>
									</div>
								</div>
					      </div>
					   <!--end item wrap -->
					   <div class="item-wrap">
						  <div class="item-image">
								 <a class="product-image no-touch" href="#" title="Người gỗ7">
								 <img class="first_image" src="images/position-10/nguoigo.jpg" alt="Product demo" /> 
								 </a>
							  </div>
							    <div class="product-shop">
									<div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Người gỗ</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$90.000</span></span>
												  </div>
											   </div>
											   <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="item-btn">
									<div class="box-inner">
									   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
									   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
									   <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
									   </span>
									   <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									</div>
									</div>
								</div>
						   </div>
					   <!--end item wrap -->
					  
					   <!--end item wrap -->
						</div>
						<div class="item">
						   <div class="item-wrap">
							  <div class="item-image">
									 <a class="product-image no-touch" href="#" title="Màu nước White Nights">
									 <img class="first_image" src="images/position-10/whitenights.jpg" alt="Product demo" /> 
									 </a>
								  </div>
							  <div class="product-shop">
									<div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Màu nước White Nights</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$350.000</span></span>
													 <p class="special-price">
													</p>
												  </div>
											   </div>
											   <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="item-btn">
										<div class="box-inner">
										   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
										   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
										   <span class="qview">
											<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
										   </span>
										   <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										</div>
										</div>
								</div>
						   </div>
						   <!--end item wrap -->
							</div>
						</div>
					 </div>
					 <div class="navslider">
						<a class="prev" href="#">Prev</a>
						<a class="next" href="#">Next</a>
					</div>

				  </div>
			</div>
			
		  </div>
	   </div>
	<div class="position-06">
	<div class="container">
		<div class="row">
			<div class="box-newletter">
				<div class="title">
				<span>NEWLETTERS</span>
				</div>
				<form action="#" method="post">
				<input type="text" name="newletter" placeholder="Enter email address..."/>
				<button><span>Subscribe</span></button>
				</form>
			</div>
		</div>
	</div>    
</div>
	<div class="position-08">
		<div class="container">
				<div class="title-sp">
					<h2>The Store</h2>
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#tab1">New arrivals</a></li>
					  <li><a data-toggle="tab" href="#tab2">POPULAR PRODUCTS</a></li>
					  <li><a data-toggle="tab" href="#tab3">Specail products</a></li>
					</ul>
				</div>
			  <div class="tab-content">
				<div id="tab1" class="tab-pane fade in active">
				<div class="block vt-slider vt-slider7">
				   <div class="slider-inner">
					  <div class="container-slider">
						 <div class="products-grid">
							<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
										 <a class="product-image no-touch" href="#" title="Bút gel Mura">
										 <img class="first_image" src="images/position-10/butmura.jpg" width="90px" alt="Product demo" /> 
										 </a>
										 <div class="item-btn">
											<div class="box-inner">
											   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
											   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
											   <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
											   </span>
											</div>
										 </div>
										 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									  </div>
									  <div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Bút gel Mura</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$75.000</span></span>
													 <p class="special-price">
													</p>
												  </div>
											   </div>
											   <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
											</div>
										 </div>
									  </div>
								   </div>
							   <!--end item wrap -->
								</div>
								<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
										 <a class="product-image no-touch" href="#" title="Bút dạ Giotto Decor">
										 <img class="first_image" src="images/position-10/giottole.jpg" alt="Product demo" /> 
										 </a>
										 <div class="item-btn">
											<div class="box-inner">
											   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
											   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
											   <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
											   </span>
											</div>
										 </div>
										 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									  </div>
									  <div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Bút dạ Giotto Decor</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$30.000</span></span>
													 <p class="special-price">
														<span class="price">$40.000</span>
													</p>
												</div>
											   </div>
											   <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
											</div>
										 </div>
									  </div>
								   </div>
							   <!--end item wrap -->
								</div>
								<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
										 <a class="product-image no-touch" href="#" title="Bút ZIG Brushables">
										 <img class="first_image" src="images/position-10/zig.jpeg" alt="Product demo" /> 
										 </a>
										 <div class="item-btn">
											<div class="box-inner">
											   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
											   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
											   <span class="qview">
											   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
											   </span>
											</div>
										 </div>
										 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									  </div>
									  <div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Bút ZIG Brushables</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$55.000</span></span>
													 <p class="special-price">
														<span class="price">$75.000</span>
													</p>
												  </div>
											   </div>
											   <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
											</div>
										 </div>
									  </div>
								   </div>
							   <!--end item wrap -->
								</div>
								<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
										 <a class="product-image no-touch" href="#" title="Bút đi nét Stabilo Point">
										 <img class="first_image" src="images/position-10/stabilo.jpg" alt="Product demo" /> 
										 </a>
										 <div class="item-btn">
											<div class="box-inner">
											   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
											   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
											   <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
											   </span>
											</div>
										 </div>
										 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									  </div>
									  <div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Bút đi nét Stabilo Point</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$28.000</span></span>
													 <p class="special-price">
													</p>
												  </div>
											   </div>
											   <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
											</div>
										 </div>
									  </div>
								   </div>
							   <!--end item wrap -->
								</div>
								<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
										 <a class="product-image no-touch" href="#" title="Bút Gelly Roll">
										 <img class="first_image" src="images/position-10/butgellyroll.jpeg" alt="Product demo" /> 
										 </a>
										 <div class="item-btn">
											<div class="box-inner">
											   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
											   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
											   <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
											   </span>
											</div>
										 </div>
										 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
									  </div>
									  <div class="pro-info">
										 <div class="pro-inner">
											<div class="pro-title product-name"><a href="detail.html">Bút Gelly Roll</a></div>
											<div class="pro-content">
											   <div class="wrap-price">
												  <div class="price-box">
													 <span class="regular-price">
													 <span class="price">$50.000</span></span>
													 <p class="special-price">
													</p>
												  </div>
											   </div>
											   <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
											</div>
										 </div>
									  </div>
								   </div>
							   <!--end item wrap -->
								</div>
							</div>
						 </div>
						 <div class="navslider">
							<a class="prev" href="#">Prev</a>
							<a class="next" href="#">Next</a>
						</div>

					  </div>
					</div>
				</div>
				<div id="tab2" class="tab-pane fade">
					<div class="block vt-slider vt-slider5">
					   <div class="slider-inner">
						  <div class="container-slider">
							 <div class="products-grid">
								<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Màu Mijello">
											 <img class="first_image" src="images/position-10/mijello.jpg" width="100px" height="110px" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Màu Mijello</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
															 <span class="price">$750.000</span></span>
													 <p class="special-price">
														 <span class="price">$990.000</span></p>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Màu Leningrad">
											 <img class="first_image" src="images/position-10/lenin.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Màu Leningrad</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$550.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Màu nước White Nights">
											 <img class="first_image" src="images/position-10/whitenights.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
												   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Màu nước Wjite Nights</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$550.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Màu nước Turner">
											 <img class="first_image" src="images/position-10/turner.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Màu nước Turner</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$485.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Màu Gouache Marie's">
											 <img class="first_image" src="images/position-10/gouachemaries.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Màu Gouache Marie's</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$1.950.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
								</div>
							 </div>
							 <div class="navslider">
								<a class="prev" href="#">Prev</a>
								<a class="next" href="#">Next</a>
							</div>

						  </div>
						
						</div>
				</div>
				<div id="tab3" class="tab-pane fade">
					<div class="block vt-slider vt-slider6">
					   <div class="slider-inner">
						  <div class="container-slider">
							 <div class="products-grid">
								<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Bảng hắt sáng A4">
											 <img class="first_image" src="images/position-10/bangsang.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Bảng hắt sáng A4</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$200.000</span></span>
														  <p class="special-price">
															  <span class="price">$260.000</span></p>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Người gỗ">
											 <img class="first_image" src="images/position-10/nguoigo.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Người gỗ</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$90.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Thước Hình học">
											 <img class="first_image" src="images/position-10/thuoc.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
												   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Thước Hình học</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$12.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Keo chặn màu Holbein Masking ink">
											 <img class="first_image" src="images/position-10/keo.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Keo chặn màu Holbein Masking ink</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$150.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
									<div class="item">
								   <div class="item-wrap">
									  <div class="item-image">
											 <a class="product-image no-touch" href="#" title="Tẩy Dust Free Faber Castell">
											 <img class="first_image" src="images/position-10/dustfree.jpg" alt="Product demo" /> 
											 </a>
											 <div class="item-btn">
												<div class="box-inner">
												   <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
												   <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
												   <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
												   </span>
												</div>
											 </div>
											 <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
										  </div>
										  <div class="pro-info">
											 <div class="pro-inner">
												<div class="pro-title product-name"><a href="detail.html">Tẩy Dust Free Faber Castell</a></div>
												<div class="pro-content">
												   <div class="wrap-price">
													  <div class="price-box">
														 <span class="regular-price">
														 <span class="price">$12.000</span></span>
													  </div>
												   </div>
												   <div class="ratings">
													  <div class="rating-box">
														 <div class="rating" style="width:80%"></div>
													  </div>
													  <span class="amount"><a href="#">1(s)</a></span>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
								   <!--end item wrap -->
									</div>
								</div>
							 </div>
							 <div class="navslider">
								<a class="prev" href="#">Prev</a>
								<a class="next" href="#">Next</a>
						   </div>
						  </div>
						</div>
					</div>
			 	</div>
			</div>
		</div>
	<div class="position-09">
		<div class="container">
			<div class="row">
			<div class="popular-cate">
				<div class="title-cate">
				Popular  Categories
				</div>
				<div class="content">
					<div class="item first">
						<div class="title">
						<a href="#">Màu Nước</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/4.jpg" width="100px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Gansai Tambi</a>,
						<a href="#">Superior</a>,
						<a href="#">Holbein</a>
						</div>
						<a class="view-all"  href="#">View all</a>
					</div>
					<div class="item">
						<div class="title">
						<a href="#">Giấy Vẽ</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/3.png" width="100px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Nabii Aqua Fat</a>,
						<a href="#" class="focus">Canson</a>,
						<a href="#">Happy</a>
						</div>
						<a class="view-all">View all</a>
					</div>
					<div class="item">
						<div class="title">
						<a href="#">BÚT-CỌ VẼ</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/1.png" width="90px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Holic</a>,
						<a href="#">Keep Smiling</a>,
						<a href="#">Superior</a>,
						<a href="#">Art Secret</a>,
						<a href="#">Waterbrush</a>
						</div>
						<a class="view-all"  href="#">View all</a>
					</div>
					<div class="item">
						<div class="title">
						<a href="#">Phác thảo</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/2.jpg" width="100px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Uni Nano</a>,
						<a href="#">Econ Faber Castell</a>,
						<a href="#">Staedler</a>,
						<a href="#">Pentel</a>,
						<a href="#">Mono</a>
						</div>
						<a class="view-all" href="#">View all</a>
					</div>
					<div class="item">
						<div class="title">
						<a href="#">Điện tử</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/5.jpg" width="100px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Wacom</a>,
						<a href="#">XP-PEN</a>,
						<a href="#">Bút cảm ứng</a>,
						<a href="#">Bảng hắt sáng</a>
						</div>
						<a class="view-all" href="#">View all</a>
					</div>
					<div class="item last">
						<div class="title">
						<a href="#">Văn phòng phẩm</a>
						</div>
						<div class="image">
						<a href="#"><img src="images/catalog/6.jpg" width="100px" height="100px" alt=""/></a>
						</div>
						<div class="tag">
						<a href="#">Thước</a>,
						<a href="#">Gôm-Tẩy</a>,
						<a href="#">Hộp Bút</a>,
						<a href="#">Khác</a>
						</div>
						<a class="view-all" href="#">View all</a>
					</div>
					<div class="position-01">
						<div class="img01"><a href="#"><img src="images/position-01/images-01.png" alt=""/></a></div>
						<div class="img02"><a href="#"><img src="images/position-01/images-02.png" alt=""/></a></div>
						<div class="img03"><a href="#"><img src="images/position-01/images-03.png" alt=""/></a></div>
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
