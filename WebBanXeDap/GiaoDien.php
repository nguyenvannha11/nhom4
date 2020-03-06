<!DOCTYPE html>
<html lang="en">
<head>
  <title>TrangChu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Menu-->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="img/bicyble_shop.png" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="GiaoDien.php">Trang Chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="GioiThieu.php">Giới Thiệu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="SanPham.php">Sản Phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Đăng Nhập</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!--Banner-->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active data-interval="2000">
				<img src="img/Banner.jpg" alt="">
				<div class="carousel-caption">
					<h1 class="display-2">Hầm Đá 2020</h1>
					<h3>Giải xe đạp thể thao được yêu thích nhất hằng năm</h3>
					<button type="button" class="btn btn-primary btn-lg">
						XEM NGAY
					</button>
				</div>
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="img/Banner2.jpg" alt="">
				<div class="carousel-caption">
					<h1 class="display-2">Hầm Đá 2020</h1>
					<h3>Giải xe đạp thể thao được yêu thích nhất hằng năm</h3>
					<button type="button" class="btn btn-primary btn-lg">
						XEM NGAY
					</button>
				</div>
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="img/Banner3.jpg" alt="">
				<div class="carousel-caption">
					<h1 class="display-2">Hầm Đá 2020</h1>
					<h3>Giải xe đạp thể thao được yêu thích nhất hằng năm</h3>
					<button type="button" class="btn btn-primary btn-lg">
						XEM NGAY
					</button>
				</div>
			</div>
		</div>
	</div>
<!--Noidung-->
<div class="noidung">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="TrangTri">
				<img src="img/bicyble_shop.png" width="130px" alt="">
				<p>Hàng bán chạy nhất</p>
				<img src="img/trangtri.jpg" width="80px" alt="">
			</div>
		</div>
	</div>

	<div class="container"> 
	 <div class="row"> 
	  <div class="col-md-3"> 
	   <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	    <div class="carousel-inner"> 
	     <div class="item active"> 
	      <div class="sanpham"> 
	      	<img src="img/xe1.jpg" width="150px"> 
		    <div class="caption"> 
		        <h3>Kona X73</h3> 
		        <p>Sự đẳng cấp, đôi khi không đẳng cấp lắm</p> 
		        <p><a href="#" class="btn btn-primary" role="button">200.000 đ</a>
		        	 <a href="#" class="btn btn-default" role="button">Đặt mua</a>
		        </p> 
		     </div> 
	      </div> 
	     </div>  
	    </div> 
	   </div> 
	  </div> 

	<div class="col-md-3"> 
	   <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	    <div class="carousel-inner"> 
	     <div class="item active"> 
	      <div class="sanpham"> 
	      	<img src="img/xe1.jpg" width="150px"> 
		    <div class="caption"> 
		        <h3>Kona X73</h3> 
		        <p>Sự đẳng cấp, đôi khi không đẳng cấp lắm</p> 
		        <p><a href="#" class="btn btn-primary" role="button">200.000 đ</a>
		        	 <a href="#" class="btn btn-default" role="button">Đặt mua</a>
		        </p> 
		     </div> 
	      </div> 
	     </div>  
	    </div> 
	   </div> 
	  </div> 
	  <div class="col-md-3"> 
	   <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	    <div class="carousel-inner"> 
	     <div class="item active"> 
	      <div class="sanpham"> 
	      	<img src="img/xe1.jpg" width="150px"> 
		    <div class="caption"> 
		        <h3>Kona X73</h3> 
		        <p>Sự đẳng cấp, đôi khi không đẳng cấp lắm</p> 
		        <p><a href="#" class="btn btn-primary" role="button">200.000 đ</a>
		        	 <a href="#" class="btn btn-default" role="button">Đặt mua</a>
		        </p> 
		     </div> 
	      </div> 
	     </div>  
	    </div> 
	   </div> 
	  </div> 
	  <div class="col-md-3"> 
	   <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	    <div class="carousel-inner"> 
	     <div class="item active"> 
	      <div class="sanpham"> 
	      	<img src="img/xe1.jpg" width="150px"> 
		    <div class="caption"> 
		        <h3>Kona X73</h3> 
		        <p>Sự đẳng cấp, đôi khi không đẳng cấp lắm</p> 
		        <p><a href="#" class="btn btn-primary" role="button">200.000 đ</a>
		        	 <a href="#" class="btn btn-default" role="button">Đặt mua</a>
		        </p> 
		     </div> 
	      </div> 
	     </div>  
	    </div> 
	   </div> 
	  </div>
	 </div>
	</div>
</div>
<!--LienHe-->
	<div class="container-fluid">
		<div class="row">
			<div class="lienhe">
				<div class="thongtin">
					<span>Bicycle Shop</span>
					<p>Giới Thiệu chung </p>
				</div>
			</div>
		</div>
	</div>
<!--footter-->
<div class="container-fluid">
		<div class="row">
			<div class="footter">
				<span>Thông Tin Liên Hệ</span>
				<p>Địa chỉ : Số 69 Đường Bưởi - Cầu Giấy - Hà Nội </p>
				<p>Email : BycicleShop@gmail.com</p>
				<p>FaceBook : http://Facebook/BycicleShop.com</p>
				<p>Fax : Không có</p>
				<div class="icon">
					<img src="img/fb.jpg" alt="">
					<img src="img/is.jpg" alt="">
					<img src="img/Zalo.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">

}
</script>
</body>
</html>
