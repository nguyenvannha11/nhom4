
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sản Phẩm </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="gd.css">
</head>

<body>
    <!--Menu-->
              <?php
              
              include 'connect.php';
              session_start(); 
              ?>
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
    <!--Nội dung-->
    
    <div class="noidung">
        <div class="trai">
                  <div class="filter-panel">
            <div class="search-filter-panel-status">
                <svg class="svg-icon " enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0">
                    <g>
                        <polyline fill="none" points="5.5 13.2 5.5 5.8 1.5 1.2 13.5 1.2 9.5 5.8 9.5 10.2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                        </polyline>
                    </g>
                </svg>
                <div class="search-filter-panel-status-text">Bộ lọc tìm kiếm</div>
            </div>
            <div class="filter-group facet-filter">
                <div class="filter-group-header">theo Danh mục</div>
                <div class="folding-items filter-group-body folding-items-folded">
                    <div class="filter checkbox-filter">
                        <div class="checkbox">
                            <label class="checkbox-control"><input type="checkbox" name="" value="8955">
                                <div class="checkbox-box">
                                    <i> </i>
                                </div>
                            <span class="checkbox-label">Xe khung hợp  kim</span>
                            </label>
                        </div>
                    </div>
                    <div class="filter checkbox-filter">
                        <div class="checkbox">
                            <label class="checkbox-control">
                                                <input type="checkbox" name="" value="8954">
                                                <div class="checkbox-box">
                                                    <i> </i>
                                                </div>
                                                <span class="checkbox-label">Xe đạp Thể Thao</span>
                                            </label>
                        </div>
                    </div>
                    <div class="filter checkbox-filter">
                        <div class="checkbox">
                            <label class="checkbox-control">
                                <input type="checkbox" name="" value="11407">
                                <div class="checkbox-box">
                                    <i> </i>
                                </div>
                                <span class="checkbox-label">Xe đạp Khung thép</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-group location-filter">
                <div class="filter-group-header">Giá </div>
                <div class="folding-items filter-group-body folding-items-folded">
                    <div class="folding-items-folded-items">
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="G1">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label"> dưới 1.000.000đ </span>
                                </label>
                            </div>
                        </div>
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="G2">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">từ 1.000.000đ đến 5.000.000đ</span>
                                </label>
                            </div>
                        </div>
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="G3">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">từ 5.000.000đ đến 10.000.000đ</span>
                                </label>
                            </div>
                        </div>
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="G4">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">trên 10.000.000đ</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-group location-filter">
                <div class="filter-group-header">Theo Tuổi </div>
                <div class="folding-items filter-group-body folding-items-folded">
                    <div class="folding-items-folded-items">
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="t2">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">từ 5 tuổi đến 10 Tuổi <span>
                                </label>
                            </div>
                        </div>
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="t3">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">từ 11 tuổi đến 20 tuổi </span>
                                </label>
                            </div>
                        </div>
                        <div class="filter checkbox-filter">
                            <div class="checkbox">
                                <label class="checkbox-control">
                                    <input type="checkbox" name="" value="t4">
                                    <div class="checkbox-box">
                                        <i> </i>
                                    </div>
                                    <span class="checkbox-label">trên 20 tuổi</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div> 

        <div class="phai">       <?php
            $sql_cate_home = mysqli_query($con,"SELECT * FROM loaisp ORDER BY loaisp_id DESC") ;
            while ($row_cate_home = mysqli_fetch_array($sql_cate_home)) {
              $id_loaisp = $row_cate_home['loaisp_id'];
        ?>
        <div>
        <?php 
            $sql = mysqli_query($con,"SELECT * FROM sanpham ORDER BY sanpham_id DESC");
            while ($row_sanpham = mysqli_fetch_array($sql)) {
              if($row_sanpham['loaisp_id']==$id_loaisp){
       ?>
          <div class="sanpham"> 
           <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
            <div class="carousel-inner"> 
             <div class="item active"> 
              <div class="sanpham"> 
                <img src="img/<?php echo $row_sanpham['sanpham_img'] ?>" width="150px"> 
              <div class="caption"> 
                  <h3><?php echo $row_sanpham['sanpham_ten']; ?></h3> 
                  <p><?php echo $row_sanpham['sanpham_gioithieu']; ?></p> 
                  <p><a href="#" class="btn btn-primary" role="button"><?php echo $row_sanpham['sanpham_gia']; ?></a>
                     <a href="#" class="btn btn-default" role="button">Đặt mua</a>
                  </p> 
               </div> 
              </div> 
             </div>  
            </div> 
           </div> 
          </div> 
          <?php 
              }
            }
           ?> 
           </div>
           <?php 
          }
       ?>
        </div>     
        
      </div>

    </div>
        

    <div>
        <div class="page-controller">
            <button class="icon-button icon-button-left">
            <svg class="svg-icon icon-arrow-left" enable-background="new 0 0 11 11" enable-bac viewBox="0 0 11 11" x="0" y="0">\
                <g>
                    <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z">
                    </path>
                </g>
            </svg>
        </button>
            <button class="button-solid button-solid-primary ">1</button>
            <button class="button-no-outline">2</button>
            <button class="button-no-outline">3</button>
            <button class="button-no-outline">4</button>
            <button class="button-no-outline">5</button>
            <button class="button-no-outline button-no-outline-non-click">...</button>
            <button class="icon-button icon-button-right ">
            <svg class="svg-icon icon-arrow-right" enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0">
                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
            </svg>
        </button>
        </div>
    </div>
    <!--footter-->
    <div class="container-fluid" style="float: left;">
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
</body>

</html>