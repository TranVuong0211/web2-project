<?php
include("connect.php");
class csdl{
	//xuatsanpham - list
	function loadsanpham($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
		
		$sql_xuatsp="SELECT * FROM product";
		$query_xuatsp= mysqli_query($conn,$sql_xuatsp);
		$i= mysqli_num_rows($query_xuatsp);
		if($i=1){
			while($row=mysqli_fetch_array($query_xuatsp)){
				$id=$row['id_product'];
				$tensp=$row['name_pro'];
				$masp=$row['ma_pro'];	
				$gia=$row['gia_pro'];
				$hinh=$row['image'];
				$noidung=$row['noidung'];
				$giafake=$row['giafake_pro'];

				echo '<li class="item">
								  <div class="inner-item ">
									 <div class="item-image">
									<div class="inner"> 
									   <a class="product-image no-touch" href="detail.php" title="">  
									   <img class="first_image" src="images/position-10/'.$hinh.'" alt="My Download Product" /> 
									   </a>                
									</div>
								 </div>
								 <div class="product-shop">
									<div class="inner">
									   <h2 class="product-name"><a class="product-image" href="detail.php" title="">'.$tensp.'</a></h2>
									   <div class="price-box">
										  <span class="regular-price" id="product-price-12">
										  <span class="price">'.$gia.'</span>
											  <p class="special-price">
												<span class="price">'.$giafake.'</span></p>
										  </span>
									   </div>
									   <div class="ratings">
										  <div class="rating-box">
											 <div class="rating" style="width:80%"></div>
										  </div>
										  <span class="amount"><a href="detail.php">1(s)</a></span>
									   </div>
									   <div class="desc std">
										  '.$noidung.'     
									   </div>
									   <div class="wrap-btn-prolist">
										  <div class="item-btn">
											 <div class="box-inner">
												<a title="Add to wishlist" href="detail.php" class="link-wishlist">&nbsp;</a>
												<a title="Add to compare" href="detail.php" class="link-compare">&nbsp;</a>
												<span class="qview"><a href="detail.php" ></a>
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="detail.php"><span>Quick View</span></a>
											   </span>
											 </div>
										  </div>
										  <a title="Add to cart" class="btn-cart">
										  <input type="submit" name="addtocart" value="Add to cart">
										  </a>
									   </div>
									</div>
								 </div>
							  </div>
						   </li>';
			}
		}
		else{
			echo 'Đang cập nhật thêm sản phẩm.';
		}
	}
	
	//detail sản phẩm
	function detail($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
		
		$id=$_REQUEST['id_product'];
		$tensp=$_REQUEST['name_pro'];
		$masp=$_REQUEST['ma_pro'];	
		$gia=$_REQUEST['gia_pro'];
		$hinh=$_REQUEST['image'];
		$noidung=$_REQUEST['noidung'];
		$giafake=$_REQUEST['giafake_pro'];
	
		
		$sql_pro="SELECT * FROM product WHERE id_product ='$_GET[id]' ";
		$query_pro= mysqli_query($conn,$sql_pro);
		$i= mysqli_num_rows($query_pro);
		
		if($i=1){
			while($row=mysqli_fetch_array($query_pro)){
				echo '<div class="product-name">
							<h1>'.$row['name_pro'].'</h1>
							<div class="navslider">
							<a class="prev" href="#">prev</a>
							<a class="next" href="#">next</a>
							</div>
						</div>
						
						<div class="product-img-box">
							 <div class="image-main">
							 <img  src="images/position-10/'.$row['image'].'" alt="Product demo" /> 
							 </div>
							 <div class="click-quick-view">&nbsp;</div>
							 <div id="galary-image" class="carousel slide" data-ride="carousel">
								  
								</div>
						</div>
						<div class="product-shop">
							<div class="wrap-er">
								<div class="ratings">
									<div class="rating-box">
										<div class="rating" style="width:87%"></div>
									</div>
									<p class="rating-links">
										<a href="#">(1)</a>
										<span class="separator">|</span>
										<a class="re-temp" href="#">Add Your Review</a>
									</p>
								</div>
							</div>
							
							<div class="short-description">
								<div class="std"><span>'.$row['noidung'].'</span>
								</div>
							<div class="box-info-detail">
								<p class="availability in-stock">
									<span class="label">Availability:</span>
									<span class="value">In stock</span>
								</p>
								<div class="price-info">
									<div class="price-box">
										<p class="old-price">
											<span class="price">'.$row['gia_pro'].'</span>
										</p>
										<p class="special-price">
											<span class="price">'.$row['giafake_pro'].'</span>
										</p>
									</div>
								</div>
								<div class="product-options-bottom">
		
									<div class="add-to-box add-to-cart">
										<div class="add-to-cart">
											<div class="qty-wrapper">
												<label for="qty">Số lượng</label>
												<input type="number pattern="\d*" name="qty" id="qty" maxlength="10" value="1" min="1" title="Qty" class="input-text qty"/>
											</div>
											<br>
											<br>
											<br>
											<div class="add-to-cart-buttons">
												<form method="post">
													<input type="submit" name="addtocart" value="Add to Cart"/><a href="shopping.php?id='.$row['id_product'].'></a>
												</form>
											</div>
										</div>
									
									</div>
									<div class="add-to-box-sub">
										<ul 
										</ul>
									</div>
								</div>
								  
							</div>
							<!-- end div .box-info-detail -->
						</div>';
			}
		}
		
	}
	
	//slideshow - index,home
	function slideshow($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
	
		$sql_slide="SELECT * FROM slideshow ORDER BY id_slide ASC ";
		$query_slide= mysqli_query($conn,$sql_slide);
		$i= mysqli_num_rows($query_slide);
		
		if($i>0){
			while($row=mysqli_fetch_array($query_slide)){
				$tenslide=$row['name_slide'];
					echo '<li class="slide1" data-transition="random"><img src="images/slide/'.$tenslide.'" alt=""/></li>';
			}
		}
	}
	
	function latest($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
	
		$sql_best="SELECT * FROM best ORDER BY id_best ASC ";
		$query_best= mysqli_query($conn,$sql_best);
		$i= mysqli_num_rows($query_best);
		
		if($i>0){
			while($row=mysqli_fetch_array($query_best)){
				$ten=$row['name_best'];
				$gia=$row['gia'];
				$giathuc=$row['giathuc'];
				$hinh=$row['image_best'];
				
				echo '<div class="item">
							   <div class="item-wrap">
								  <div class="item-image">
									 <a class="product-image no-touch" href="#" title="">
									 <img class="first_image" src="images/position-10/'.$hinh.'" alt="Product demo" /> 
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
										<div class="pro-title product-name"><a href="#">'.$ten.'</a></div>
										<div class="pro-content">
										   <div class="wrap-price">
											  <div class="price-box">
												 <span class="regular-price">
												 <span class="price">'.$gia.'</span></span>
												  <p class="special-price">
												 <span class="price">'.$giathuc.'</span></p>
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
							</div>';
			}
		}
	}
	
	//top sản phẩm bán chạy
	function selling($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
	
		$sql_best="SELECT * FROM best ORDER BY id_best ASC ";
		$query_best= mysqli_query($conn,$sql_best);
		$i= mysqli_num_rows($query_best);
		
		if($i>0){
			while($row=mysqli_fetch_array($query_best)){
				$best=$row['image_best'];
				
				echo '
					<a class="img01" href="#"><img src="images/position-10/'.$best.'" alt="" width="200" height="200"/>
				';
			}
		}
	}
	
	//Newest Deals - index,home
	function loaddeals($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
	
		$sql_deals="SELECT * FROM deals ORDER BY id_deals ASC ";
		$query_deals= mysqli_query($conn,$sql_deals);
		$i= mysqli_num_rows($query_deals);
		
		if($i>0){
			while($row=mysqli_fetch_array($query_deals)){
				$ten=$row['name_deals'];
				$hinh=$row['hinh'];
				$gia=$row['gia'];
				$giathuc=$row['giathuc'];
					
				echo '<div class="item">
						   <div class="item-wrap">
							  <div class="item-image">
									 <a class="product-image no-touch" href="#" title="">
									 <img class="first_image" src="images/position-10/'.$hinh.'" alt="Product demo" /> 
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
										<div class="pro-title product-name"><a href="detail.html">'.$ten.'</a></div>
										<div class="pro-content">
										   <div class="wrap-price">
											  <div class="price-box">
												 <span class="regular-price">
												 <span class="price">'.$gia.'</span></span>
												 <p class="special-price">
													<span class="price">'.$giathuc.'</span>
												</p>
											  </div>
										   </div><!-- 
										   <div class="ratings">
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
							</div>';
			}
		}
	}
	
	//
	 function giay($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
	
		$sql_giay="SELECT * FROM best ORDER BY id_best ASC ";
		$query_giay= mysqli_query($conn,$sql_best);
		$i= mysqli_num_rows($query_best);
		
		if($i>0){
			while($row=mysqli_fetch_array($query_best)){
				$ten=$row['name_best'];
				$gia=$row['gia'];
				$giathuc=$row['giathuc'];
				$hinh=$row['image_best'];
				
				echo '<div class="item-wrap">
				  <div class="item-image">
						 <a class="product-image no-touch" href="#" title="Nabii Aqua Fat">
						 <img class="first_image" src="images/product/larg/'.$hinh.'" alt="Product demo" /> 
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
							<div class="pro-title product-name"><a href="detail.html">'.$ten.'</a></div>
							<div class="pro-content">
							   <div class="wrap-price">
								  <div class="price-box">
									 <span class="regular-price">
									 <span class="price">'.$gia.'</span></span>
									  <p class="special-price">
										  <span class="price">'.$giathuc.'</span></p>
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
				</div>';
			}
		}
	 }
	function cart($conn){
		$conn = new mysqli("localhost","sketch","tran123","sketch");
		
		$id=$_REQUEST['id_product'];
		$tensp=$_REQUEST['name_pro'];	
		$gia=$_REQUEST['gia_pro'];
		$hinh=$_REQUEST['image'];
		
		$sql_cart="SELECT * FROM product WHERE id_product ='$_GET[id]' ";
		$query_cart= mysqli_query($conn,$sql_cart);
		$i= mysqli_num_rows($query_cart);
		
		if($i=1){
			while($row=mysqli_fetch_array($query_cart)){
				echo '	<tr>
							<td class="image"><img src="images/position-10/'.$row['image'].' " alt="" width="125" height="125"/></td>
							
							<td class="desc">'.$row['name_pro'].' &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							
							<td class="qty">
							<input type="text" class="tiny-size" value="1"/>'.$row['qty'].'</td>
							
							<td class="price">'.$row["gia_pro"].'</td>
						</tr>';
		}
	}
}
	
}
?>