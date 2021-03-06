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
    @endif
    @if(isset($tp))
    <span class="label label-danger"  style="font-size:2em;" >{{$tp -> tenTP}}</span>
    @endif
    @if(isset($ht))
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
  @if(isset($diadiems))
  <div class=" container-fluid">
    <ul class="pagination">
      @if($diadiems -> currentPage() != 1)
      <li><a href="{{$diadiems -> url($diadiems -> currentPage() - 1)}}">Trang trước </a></li>
      @endif
      @for( $i = 1 ; $i <= $diadiems -> lastPage() ; $i++)
      <li class="{{ ( $diadiems -> currentPage() == $i )? 'active' : '' }}">
      <a href="{{$diadiems -> url($i)}}">{{$i}}</a>
      </li>
      @endfor
      @if($diadiems -> currentPage() != $diadiems -> lastPage())
      <li><a href="{{$diadiems -> url($diadiems -> currentPage() + 1)}}">Trang kế</a></li>
      <li><a href="{{$diadiems -> url($diadiems -> lastPage())}}">Trang cuối</a></li>
      @endif
    </ul>
  </div>

  @else
  <div class=" container-fluid">
    <ul class="pagination">
      @if($theloais -> currentPage() != 1)
      <li><a href="{{$theloais -> url($theloais -> currentPage() - 1)}}">Trang trước </a></li>
      @endif
      @for( $i = 1 ; $i <= $theloais -> lastPage() ; $i++)
      <li class="{{ ( $theloais -> currentPage() == $i )? 'active' : '' }}">
      <a href="{{$theloais -> url($i)}}">{{$i}}</a>
      </li>
      @endfor
      @if($theloais -> currentPage() != $theloais -> lastPage())
      <li><a href="{{$theloais -> url($theloais -> currentPage() + 1)}}">Trang kế</a></li>
      <li><a href="{{$theloais -> url($theloais -> lastPage())}}">Trang cuối</a></li>
      @endif
    </ul>
  </div>
  @endif
<!-- PAGENITION END -->

 <!-- CENTER CONTAIN END-->



</div>
</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->
</body>
</html>