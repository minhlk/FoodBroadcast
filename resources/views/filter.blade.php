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
@include('layout.banner')
<!-- BANNER END  -->  
<div id="body_contain" class="container-fluid text-center">
  <div class="container">
  	<i class="fa fa-search" aria-hidden="true" style="font-size:2em;"> Kết quả tìm kiếm cho </i>
  	<!-- <i class="fa fa-tags" aria-hidden="true"></i> -->
    @if(isset($kv))
  	<span class="label label-danger"  style="font-size:2em;" >{{$kv -> tenKV}}</span>
    @elseif(isset($tp))
    <span class="label label-danger"  style="font-size:2em;" >{{$tp -> tenTP}}</span>
    @elseif(isset($ht))
    <span class="label label-danger"  style="font-size:2em;" >{{$ht -> tenHT}}</span>
    @endif
  </div>
  <div class="row content">
  	
 <!-- LEFT CONTAIN START-->
 <!-- include('layout.leftcontain') -->
 <!-- LEFT CONTAIN END-->

 <!-- CENTER CONTAIN START-->
 <!-- <div class="col-sm-8 "> -->
  <!-- <div class="row"> -->

 
<!-- ITEM 1  START-->
   @include('layout.itemdetails')
<!-- ITEM 1  END-->

  <!-- </div> -->

 <!-- RIGHT CONTAIN START-->
 @include('layout.leftcontain')
 <!-- RIGHT CONTAIN END-->

 </div>
<!-- PAGENITION START -->
<div class=" container-fluid">
  <ul class="pagination">
    <li class="active"><a href="./index.html">1</a></li>
    <li><a href="./index.html">2</a></li>
    <li><a href="./index.html">3</a></li>
    <li><a href="./index.html">4</a></li>
    <li><a href="./index.html">5</a></li>
    <li><a href="./index.html">6</a></li>
    <li><a href="./index.html">7</a></li>
    <li><a href="./index.html">Trang kế</a></li>
    <li><a href="./index.html">Trang cuối</a></li>
  </ul>

</div>
<!-- PAGENITION END -->

 <!-- CENTER CONTAIN END-->



</div>
</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->
</body>
</html>