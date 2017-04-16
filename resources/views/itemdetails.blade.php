
<!DOCTYPE html>

<html>
<head>
@include('layout.head')

</head>




<body>
<!-- NAVIGATION BAR START -->
@include('layout.topnav')
<!-- NAVIGATION BAR END -->

<!-- MODEL START -->
@include('layout.model')
  <!-- MODEL END -->

<div id="body_contain" class="container-fluid text-center">
  <div class="row content">

<!-- LEFT CONTAIN START-->
 <!-- include('layout.leftcontain') -->
 <!-- LEFT CONTAIN END-->

 <!-- CENTER CONTAIN START-->
 <div class="col-sm-10">
   

 
 <!-- ITEM ROW 1 IN CENTER START -->
  <div class="row">
<blockquote>
  <a href="./index.html">Trang Chủ</a>
</blockquote>
  <blockquote>
  <p>Thông tin của : The US Drinks - Nguyễn Duy</p>

</blockquote>


  </div>
<div class="row">
<!-- PICTURE START -->
<div class="col-lg-7  col-md-7 ">

  <img src="./images/im3.jpg">


</div>
<!-- PICTURE END -->
<!-- DETAILS START -->
<div class="col-lg-5 col-md-5 img-thumbnail" style="text-align: left;" id="chitiettin">

  <div class="title_chitiet"><h3> The US Drinks - Nguyễn Duy</h3></div>
  <hr>
  <div class="details_chitiet"><h4>Thông tin chi tiết :</h4>
  <i class="fa fa-comment-o" aria-hidden="true"></i>
  <label>Đánh giá :</label>
  <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
      </div>
      <i class="fa fa-location-arrow" aria-hidden="true"></i>
       <label class="">Địa điểm :</label>
      <div class="">
<span class=""> <!-- <a href="#" > -->55 Nguyễn Duy,P. 1,<!-- </a> --></span>
<span class=""><a href="#">Long An,</a></span>
<span class=""><a href="#"> TP. Tân An</a></span>
    </div>
    <br>
    <i class="fa fa-calendar" aria-hidden="true"></i>
     <label class="">Thời gian :</label>
    <div class=" time_open ">
      <p class=""><b> Đang mở cửa : </b>
       03:00 PM - 10:00 PM | 0:00 - 0:00</p>

    </div>
    <i class="fa fa-money" aria-hidden="true"></i>
    <label class="">Giá tiền :</label>
<div class="price ">
      
      <p class=""> 20.000đ - 30.000đ </p>

    </div>
    <i class="fa fa-phone" aria-hidden="true"></i>
     <label class="">Số điện thoại:</label>
<div class="price ">
      
      <p class=""> 012xxxxxxxxx </p>

    </div>
     <label class="">Hình thức :</label>
<div class="price ">
      
      <p class=""> Quán ăn </p>

    </div>
     <label class="">Ẩm thực :</label>
<div class="price ">
      
      <p class=""> Nam </p>

    </div>
  </div>

<form action="../html/giohang.html" class="form-horizontal">
  <!-- <form  class="form-group">

    <label >Khu vực :</label>
   <select class="form-control">
     <option>Hồ Chí Minh</option>
     <option>Hà Nội</option>
     <option>...</option>

   </select>
  </form> -->
<form  class="form-group">

 
  <div class="">
        
         <a href="../html/luu.html" class="btn btn-danger" role="button">Lưu</a>
          <!-- <a href="../html/chitiettin1_admin.html" class="btn btn-danger" onclick="alert('Bạn phải là admin')" role="button">Admin</a> -->
   </div>
   </form>

</div>
 </div>


<hr style="margin-top: 12px;">


 </div>

 <!-- CENTER CONTAIN END-->

 <!-- RIGHT CONTAIN START-->
 @include('layout.rightcontain')
 <!-- RIGHT CONTAIN END-->


</div>
<p style="text-align: center; font-size: x-large;
    font-weight: bold;">Các nơi liên quan</p>
<div class="row">

 <!-- ITEM 1  START-->
   @include('layout.item')

<!-- ITEM 1  END-->
</div>
</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->

</body>
</html>