
 <div class="col-sm-2 sidenav">
<!-- ITEM 1 START -->
    <div class="list-group">
                
                <a href="./index.html" data-toggle="collapse" class="list-group-item active">
                  Danh mục
                </a>
 
               
                <a href="#danhmuc1" data-toggle="collapse" class="list-group-item text-left active">Khu vực</a>
                     <div class="list-group collapse" id="danhmuc1">
                     @foreach ($khuvuc as $khu)
                      <a href="./search?idKhuVuc={{$khu -> id}}" class="list-group-item text-left">{{$khu -> tenKV}}</a>
                      @endforeach
                    </div>
                <!-- <a href="#" class="list-group-item text-left active">Ở Đâu</a> -->
                <a href="#danhmuc2" data-toggle="collapse" class="list-group-item text-left active">Thành phố</a>
                     <div class="list-group collapse" id="danhmuc2">
                      @foreach ($thanhpho as $thanh)
                      <a href="./search?idTP={{$thanh -> id}}" class="list-group-item text-left">{{$thanh -> tenTP}}</a>
                      @endforeach
                    </div>
                <!-- <a href="#" class="list-group-item text-left active">Sưu tập</a> -->
                <a href="#danhmuc3" data-toggle="collapse" class="list-group-item text-left active">Hình thức</a>
                     <div class="list-group collapse" id="danhmuc3">
                      @foreach($hinhthuc as $item)
                      <a href="{{url('/search?idHT='.$item -> id)}}" class="list-group-item text-left">{{$item -> tenHT}}</a>
                      @endforeach

                    </div>
                <!-- <a href="#" class="list-group-item text-left active">Bình luận</a> -->
                <a href="#danhmuc4" data-toggle="collapse" class="list-group-item text-left active">Chia sẻ</a>
                     <div class="list-group collapse" id="danhmuc4">
                      <a href="./index.html" class="list-group-item text-left">Facebook</a>
                      <a href="./index.html" class="list-group-item text-left">Twitter</a>
                      <a href="./index.html" class="list-group-item text-left">Zalo</a>
                    </div>
             
</div> 
  
 </div>

