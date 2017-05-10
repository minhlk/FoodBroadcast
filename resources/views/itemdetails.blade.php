
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

<ol class="breadcrumb" style="text-align: left; background-color: firebrick;">
  <li><a href="./" style="color: white;font-size: 20px;">Trang Chủ</a></li>
  <li><a class="active" style="color: white;">Thông tin của : {{$diadiem -> ten}}</a></li>

</ol>



  </ol>
<div class="row">
<!-- PICTURE START -->
<div class="col-lg-7  col-md-7 ">

  <img src="{{$diadiem-> image }}">


</div>
<!-- PICTURE END -->
<!-- DETAILS START -->
<div class="col-lg-5 col-md-5 img-thumbnail" style="text-align: left;" id="chitiettin">

  <div class="title_chitiet"><h3> {{$diadiem->ten }} </h3></div>
  <hr>
  <div class="details_chitiet"><h4>Thông tin chi tiết :</h4>
  <i class="fa fa-comment-o" aria-hidden="true"></i>
  <label>Mô tả:</label>
  <p>{{$diadiem -> moTa}}</p>
  <!-- <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
      </div> -->
      <i class="fa fa-location-arrow" aria-hidden="true"></i>
       <label class="">Địa điểm :</label>
      <div class="">
<a href="{{url('/search?idTP='.$diadiem -> idTP)}}" class="label label-danger">{{$diadiem -> thanhpho -> tenTP}}</a>
<a href="{{url('/search?idKhuVuc='.$diadiem -> idKhuVuc)}}" class="label label-danger"> {{$diadiem -> khuvuc -> tenKV}}</a>
    </div>
    <br>
    <i class="fa fa-calendar" aria-hidden="true"></i>
     <label class="">Thời gian :</label>
    <div class=" time_open ">
      <p class=""><b> Đang mở cửa : </b>
       {{$diadiem->gioBatDau }}:{{$diadiem->phutBatDau}} - 
       {{$diadiem->gioKetThuc }}:{{$diadiem->phutKetThuc}}</p>

    </div>
    <i class="fa fa-money" aria-hidden="true"></i>
    <label class="">Giá tiền :</label>
<div class="price ">
      
      <p class=""> {{number_format($diadiem-> giaMin) }} vnđ- {{number_format($diadiem->giaMax) }} vnđ </p>

    </div>
    <i class="fa fa-phone" aria-hidden="true"></i>
     <label class="">Số điện thoại:</label>
<div class="price ">
      
      <p class=""> {{number_format($diadiem-> soDienThoai),2 }} </p>

    </div>
     <label class="">Hình thức :</label>
<div class="price ">
@foreach($theloai as $item)

<a class="label label-danger" href="{{url('/search?idHT='.$item -> id_hinhthuc)}}">{{ $item -> hinhthuc -> tenHT}}</a>
@endforeach
    </div>
    <!--  <label class="">Ẩm thực :</label>
<div class="price ">
      
      <p class=""> Nam </p>

    </div> -->
  </div>

<form action="../html/giohang.html" class="form-horizontal">
  <!-- <form  class="form-group">

    <label >Khu vực :</label>
   <select class="form-control">
     <option>Hồ Chí Minh</option>
     <option>Hà Nội</option>
     <option>...</option>

   </select>
  </form>
<form  class="form-group">

 
  <div class="">
        
         <a href="../html/luu.html" class="btn btn-danger" role="button">Lưu</a>
          <!-- <a href="../html/chitiettin1_admin.html" class="btn btn-danger" onclick="alert('Bạn phải là admin')" role="button">Admin</a> -->
   </div>
   </form>

</div>
 </div>


<hr style="margin-top: 12px;">


 <!-- RIGHT CONTAIN START-->
 @include('layout.leftcontain')
 <!-- RIGHT CONTAIN END-->
 </div>

 <!-- CENTER CONTAIN END-->



</div>
<p style="text-align: center; font-size: x-large;
    font-weight: bold;">Các nơi liên quan</p>
<div class="row">

 <!-- ITEM 1  START-->
   @include('layout.itemdetails')

<!-- ITEM 1  END-->
</div>
</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->

</body>
</html>