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
   {{--@include('layout.item')--}}
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