<form action="./test" method="post" enctype="multipart/form-data">

 <!-- {!! Form::open(['action'=>'uploadcontroller@getPath', 'files'=>true]) !!} -->
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<img src="./uploads/im4.jpg"/>
<!-- <input type="file" name="image"> -->
{!! Form::file('image') !!}
<input type="submit" name="">
<!-- {!! Form::close() !!} -->
 </form>