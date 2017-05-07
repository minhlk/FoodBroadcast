<div class="container col-xs-9 col-sm-9 col-md-9" style="margin-top:50px;">
    <div class="row">
        @if(isset($diadiems) && isset($idHT))
            @foreach ($diadiems as $items)
                @foreach ($items -> theloai -> where('id_hinhthuc','=',$idHT) as $diadiem) 
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
                                    <i class="fa fa-shopping-cart"></i><a href="{{url('/cart/id='.$diadiem -> diadiem -> id)}}" class="hidden-sm">Lưu</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="./itemdetails?id={{ $diadiem -> diadiem -> id }}" class="hidden-sm">Chi tiết</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        @elseif(isset($diadiems))
         @foreach ($diadiems as $diadiem) 
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="col-item">
                    <div class="photo">
                       <img src="{{$diadiem['image']}}"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price" style="text-align: center;">
                              <h5> {{$diadiem -> ten}} </h5>
                            </div>
                           
                        </div>
                        <div class="separator clear-left">
                        </div>
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
                                <i class="fa fa-shopping-cart"></i><a href="{{url('/cart/id='.$diadiem -> id)}}" class="hidden-sm">Lưu</a></p>
                            <p class="btn-details">
                                <i class="fa fa-list"></i><a href="./itemdetails?id={{ $diadiem -> id }}" class="hidden-sm">Chi tiết</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
         @endforeach

        @elseif(isset($theloais))

         @foreach ($theloais as $item) 
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="col-item">
                    <div class="photo">
                       <img src="{{$item -> diadiem -> image}}"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price" style="text-align: center;">
                              <h5> {{$item -> diadiem -> ten}} </h5>
                            </div>
                           
                        </div>
                        <div class="separator clear-left">
                        </div>
                        <div class="row">
                            <div class="price .caption_bellow">
                            <p style="margin-left: 10px; text-align: center;" >
                               {{$item -> diadiem -> thanhpho -> tenTP}}
                            </p>
                            <p style="margin-left: 10px; text-align: center;" >
                               {{$item -> diadiem -> khuvuc -> tenKV}}
                            </p>
                            </div>
                           
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i><a href="{{url('/cart/id='.$item -> diadiem-> id)}}" class="hidden-sm">Lưu</a></p>
                            <p class="btn-details">
                                <i class="fa fa-list"></i><a href="./itemdetails?id={{ $item -> diadiem -> id }}" class="hidden-sm">Chi tiết</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
         @endforeach

        @endif

    </div>

</div>