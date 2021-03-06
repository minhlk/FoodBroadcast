
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
            <li>
              <a href="./" style="color: white;font-size: 20px;">Trang Chủ</a>
            </li>
            <li>
              <a class="active" style="color: white;">Thông tin của : {{$diadiem -> ten}}</a>
            </li>
          </ol>
        </ol>
        <div class="row">
          <!-- PICTURE START -->
          <div class="col-lg-7  col-md-7 ">
            <img src="./uploads/{{$diadiem-> image }}">
            </div>
            <!-- PICTURE END -->
            <!-- DETAILS START -->
            <div class="col-lg-5 col-md-5 img-thumbnail" style="text-align: left;" id="chitiettin">
              <div class="title_chitiet">
                <h3 style="font-size: 1.5em; text-align: center;"> {{$diadiem->ten }} </h3>
              </div>
              <hr>
                <div class="details_chitiet">
                  <h4 style="text-align: center;">Thông tin chi tiết :</h4>
                  <hr>
                  <i class="fa fa-comment-o" aria-hidden="true"></i>
                  <label>Mô tả:</label>
                  <p>{{$diadiem -> moTa}}</p>
                  <!-- <div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div></div> -->
                  <i class="fa fa-location-arrow" aria-hidden="true"></i>
                  <label class="">Địa điểm :</label>
                  <div class="">
                    <a href="{{url('/search?idTP='.$diadiem -> idTP)}}" class="label label-danger">{{$diadiem -> thanhpho -> tenTP}}</a>
                    <a href="{{url('/search?idKhuVuc='.$diadiem -> idKhuVuc)}}" class="label label-danger"> {{$diadiem -> khuvuc -> tenKV}}</a>
                    <p>{{$diadiem -> diaChi}}</p>
                  </div>
                  <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label class="">Thời gian :</label>
                    <div class=" time_open ">
                      <p class="">
                        <b> Đang mở cửa : </b>
       {{$diadiem->gioBatDau }}:{{$diadiem->phutBatDau}} - 
       {{$diadiem->gioKetThuc }}:{{$diadiem->phutKetThuc}}
                      </p>
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
                    <!--  <label class="">Ẩm thực :</label><div class="price "><p class=""> Nam </p></div> -->
                  </div>
                  <form action="../html/giohang.html" class="form-horizontal">
                    <!-- <form  class="form-group"><label >Khu vực :</label><select class="form-control"><option>Hồ Chí Minh</option><option>Hà Nội</option><option>...</option></select></form><form  class="form-group"><div class=""><a href="../html/luu.html" class="btn btn-danger" role="button">Lưu</a>
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
          <p style="text-align: center; font-size: x-large; margin-top: 2em;
    font-weight: bold;">Các nơi liên quan</p>
          <div class="row">
            <!-- ITEM 1  START-->
            <div class="container col-xs-9 col-sm-9 col-md-9" style="margin-top:50px;">
              <div class="row">
   @foreach ($diadiems -> take(4) as $diadiem) 
            
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="col-item">
                    <div class="photo">
                      <img src="./uploads/{{$diadiem['image']}}"/>
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="price" style="text-align: center;">
                          <h5> {{$diadiem -> ten}} </h5>
                        </div>
                      </div>
                      <div class="separator clear-left"></div>
                      <div class="row">
                        <div class="price .caption_bellow">
                          <p style="margin-left: 10px; text-align: center;" >
                               {{$diadiem -> thanhpho -> tenTP}}
                            </p>
                          <p style="margin-left: 10px; text-align: center;" >
                               {{$diadiem -> khuvuc -> tenKV}}
                            </p>
                        </div>
                      </div>
                      <div class="separator clear-left">
                        <p class="btn-add">
                          <i class="fa fa-shopping-cart"></i>
                          <a href="{{url('/cart/id='.$diadiem -> id)}}" class="hidden-sm">Lưu</a>
                        </p>
                        <p class="btn-details">
                          <i class="fa fa-list"></i>
                          <a href="./itemdetails?id={{ $diadiem -> id }}" class="hidden-sm">Chi tiết</a>
                        </p>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
         @endforeach
    
              </div>
            </div>
            <!-- ITEM 1  END-->
          </div>
        </div>
        <!-- FOOTER START -->
@include('layout.footer')

        <!-- FOOTER END -->
      </body>
    </html>