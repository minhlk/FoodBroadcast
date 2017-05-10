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
  <div class="row content">

 <!-- LEFT CONTAIN START-->
 <!-- include('layout.leftcontain') -->
 <!-- LEFT CONTAIN END-->

 <!-- CENTER CONTAIN START-->
 <!-- <div class="col-sm-8 "> -->
  <!-- <div class="row"> -->

 
<!-- ITEM 1  START-->
   @include('layout.itemHomePage')
<!-- ITEM 1  END-->

  <!-- </div> -->

 <!-- RIGHT CONTAIN START-->
 @include('layout.leftcontain')
 <!-- RIGHT CONTAIN END-->

 </div>
<!-- PAGENITION START -->
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
<!-- PAGENITION END -->

 <!-- CENTER CONTAIN END-->



</div>
</div>
<!-- FOOTER START -->
@include('layout.footer')
<!-- FOOTER END -->
</body>
</html>