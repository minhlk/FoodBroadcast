
  
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Đăng nhập</h4>
        </div>
        <div class="modal-body">
                                 <form method="post" action="" class="form-horizontal">
                                      <div class="form-group">
                                        
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Nhập email">
                                      </div>
                                      <div class="form-group">
                                        <label for="pwd">Mật khẩu:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Nhập password">
                                      </div>
                                      <div class="checkbox">
                                        <label><input type="checkbox">Nhớ đăng nhập</label>
                                      </div>
                                      <button type="button" onclick="admin()" class="btn btn-danger">Đăng nhập</button>
 <div class="alert alert-danger" style="visibility: hidden;" id="wrong">Tên email hoặc mật khẩu không đúng</div>
                                </form>
<!-- <script type="text/javascript">
  

</script> -->






        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>



<!-- ----------- -->

 
  <div class="modal fade" id="search" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Tìm kiếm nâng cao</h4>
        </div>
        <div class="modal-body">
                                 <form action="./search" method="get"  class="form-horizontal" target="_blank">
                                      <div class="form-group">
                                        <label for="keyword">Từ khóa</label>
                                        <input type="text" class="form-control" id="keyword" placeholder="Nhập từ khóa" name="keyword">
                                      </div>
                                      <div class="form-group">
                                        <label for="price">Giá </label>
                                        <!-- <input type="password" class="form-control" id="pwd" placeholder="Nhập lại password"> -->
                                        <select class="form-control" id="price">
                                          <option> 1</option>
                                           <option> 1</option>
                                            <option> 1</option>
                                             <option> 1</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="place">Khu vực</label>
                                        <select class="form-control" id="place">
                                            <option> hcm</option>
                                            <option>hà nội</option>
                                        </select>

                                      </div>
                                       <div class="form-group">
                                        <label for="like">Lượt yêu thích</label>
                                        <select class="form-control" id="like">
                                            <option> dưới 100</option>
                                            <option>trên 1000</option>
                                        </select>

                                      </div>
                                     

                                     

                                     <br>
                                      <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                                </form>


<!-- 
tình trạng (số chỗ còn lại)
lượt yêu thích
 -->



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>



<!-- ----------- -->
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Đăng Ký</h4>
        </div>
        <div class="modal-body">
                                 <form action="./html/dadangnhap.html" class="form-horizontal">
                                      <div class="form-group">
                                        
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Nhập email">
                                      </div>
                                      <div class="form-group">
                                        <label for="pwd">Mật khẩu:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Nhập password">
                                      </div>
                                       <div class="form-group">
                                        <label for="pwd">Nhập lại mật khẩu:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Nhập lại password">
                                      </div>
                                     <div class="form-group">
                                        <label for="capcha">Nhập mã xác nhận :</label>
                                        <input type="text" class="form-control" id="capcha" >
                                      </div>
                                      <button type="submit" class="btn btn-danger">Đăng ký</button>
                                </form>







        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>


  <!-- MODEL END -->
