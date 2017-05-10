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

<!-- BANNER START -->
<!-- include('layout.banner') -->
<!-- BANNER END  -->

<div id="body_contain" class="container-fluid text-center">


  <div class="row content">

 <!-- LEFT CONTAIN START-->
 <!-- include('layout.leftcontain') -->
 <!-- LEFT CONTAIN END-->

 <!-- CENTER CONTAIN START-->
 <!-- <div class="col-sm-8 "> -->
  <!-- <div class="row"> -->

 
<!-- ITEM 1  START-->

<div class="container col-xs-9 col-sm-9 col-md-9" style="margin-top:50px;">
<div class="headerContainer">
	<h1>Địa điểm vừa chọn</h1>

</div>

    <div class="row">
         @foreach ($cart as $diadiem) 
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div class="photo">
                   <img src="./uploads/{{$diadiem -> options -> image}}"/>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price" style="text-align: center;">
                          <h5> {{$diadiem -> name}} </h5>
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                    </div>
                    <div class="row">
                        <div class="price .caption_bellow">
                        <p style="margin-left: 10px; text-align: center;" >
                           {{$diadiem -> options -> tenTP}}
                        </p>
                        <p style="margin-left: 10px; text-align: center;" >
                           {{$diadiem -> options -> tenKV}}
                        </p>
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i><a href="{{url('/cart/removeid='.$diadiem -> rowId)}}" class="hidden-sm">Xóa</a></p>
                        <p class="btn-details">
                            <i class="fa fa-list"></i><a href="./itemdetails?id={{ $diadiem -> id }}" class="hidden-sm">Chi tiết</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
         @endforeach
    </div>
<a href="{{url('/cart/save/')}}" class="btn btn-danger" style="margin-top: 30px; float:right;"> Lưu danh sách </a>
 <div class="headerContainer">
	<h1>Địa điểm đã lưu</h1>

@if( isset($giohang)  )
	<div class="row">
         @foreach ($giohang as $diadiem) 
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div class="photo">
                   <img src="{{$diadiem -> diadiem -> image}}"/>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price" style="text-align: center;">
                          <h5> {{$diadiem -> diadiem -> ten}} </h5>
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                    </div>
                    <div class="row">
                        <div class="price .caption_bellow">
                        <p style="margin-left: 10px; text-align: center;" >
                           {{$diadiem -> diadiem -> thanhpho -> tenTP}}
                        </p>
                        <p style="margin-left: 10px; text-align: center;" >
                           {{$diadiem -> diadiem -> khuvuc -> tenKV}}
                        </p>
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i><a href="{{url('/cart/deleteid='.$diadiem -> idDiaDiem)}}" class="hidden-sm">Xóa</a></p>
                        <p class="btn-details">
                            <i class="fa fa-list"></i><a href="./itemdetails?id={{ $diadiem -> idDiaDiem }}" class="hidden-sm">Chi tiết</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
         @endforeach
    </div>
@else
<div class="alert alert-danger">
  <strong>Chú ý!</strong> Cần đăng nhập để xem các địa điểm đã lưu
</div>

@endif	



</div>
</div>

<!-- ITEM 1  END-->

  <!-- </div> -->

 <!-- RIGHT CONTAIN START-->

  @include('layout.leftcontain') 
 <!-- RIGHT CONTAIN END-->

 </div>

 

 <!-- CENTER CONTAIN END-->



</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->
</body>
</html>