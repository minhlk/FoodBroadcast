
  
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Đăng nhập</h4>
        </div>
        <div class="modal-body">
                          <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
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
                  <label for="khuvuc">Khu vực </label>
                  <!-- <input type="password" class="form-control" id="pwd" placeholder="Nhập lại password"> -->
                  <select class="form-control" id="khuvuc" name="idKhuVuc">
                  <option selected value>-- Chọn --</option>
                  @foreach ($khuvuc as $khu)
                  <option value="{{$khu -> id}}">{{$khu -> tenKV}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="thanhpho">Thành phố</label>
                  <select class="form-control" id="thanhpho" name="idTP">
                  <option selected value>-- Chọn --</option>
                  @foreach ($thanhpho as $thanh)
                  <option value="{{$thanh -> id}}" >{{$thanh -> tenTP}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="hinhthuc">Hình thức</label>
                  <select class="form-control" id="hinhthuc" name="idHT">
                  <option selected value>-- Chọn --</option>
                  @foreach($hinhthuc as $item)
                  <option value="{{$item -> id}}">{{$item -> tenHT}}</option>
                  @endforeach
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
                                  <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>


  <!-- MODEL END -->
