
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
                <a href="#danhmuc2" data-toggle="collapse" class="list-group-item text-left active">Ở đâu</a>
                     <div class="list-group collapse" id="danhmuc2">
                      <a href="./index.html" class="list-group-item text-left">Hồ Chí Minh</a>
                      <a href="./index.html" class="list-group-item text-left">Hà Nội</a>
                      <a href="./index.html" class="list-group-item text-left">Tỉnh Khác</a>
                    </div>
                <!-- <a href="#" class="list-group-item text-left active">Sưu tập</a> -->
                <a href="#danhmuc3" data-toggle="collapse" class="list-group-item text-left active">Sưu tập</a>
                     <div class="list-group collapse" id="danhmuc3">
                      <a href="./index.html" class="list-group-item text-left">Món ăn ngon</a>
                      <a href="./index.html" class="list-group-item text-left">Đứng đầu mùa</a>
                      <a href="./index.html" class="list-group-item text-left">Khu vực đông</a>
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

