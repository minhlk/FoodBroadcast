
<div class="container col-xs-9 col-sm-9 col-md-9" style="margin-top:50px;">
    <div class="row">
        @foreach ($diadiems as $diadiem)
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div class="photo">
                   <img src="{{$diadiem -> image}}"/>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price">
                           {{$diadiem -> ten}}
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                    </div>
                    <div class="row">
                        <div class="price .caption_bellow">
                            <p style="margin-left: 10px" >
                           {{$diadiem -> idKhuVuc}}
                            </p>
                        </div>
                       
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Vào giỏ</a></p>
                        <p class="btn-details">
                            <i class="fa fa-list"></i><a href="./itemdetails" class="hidden-sm">Chi tiết</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
