<nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="font-weight: bold; " href="./">Quảng Bá Thức Ăn</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse " aria-expanded="false" style="height: 1.5015px;">
          <ul class="nav navbar-nav ">
          @if(Route::current()->getName() == 'cart')
            <li ><a href="./">Trang Chủ</a></li>

             <li class="active">
              <a  href="./cart">Đã lưu
              </a>
            </li> 
            @else
          <li class="active"><a href="./">Trang Chủ</a></li>

             <li class="">
              <a  href="./cart">Đã lưu
              </a>
            </li> 
            @endif

            <li class="dropdown">
              <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khác <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="./lienhe">Liên Hệ</a></li>

                <li><a href="./lienhe">Về Chúng Tôi</a></li>
               
                
               
              </ul>
            </li>
           

             
                     

            
          </ul>


<ul class="nav navbar-nav" style="float: right;">
            
            <li class="timkiem">
                <form action="./search" method="get" class="navbar-form navbar-right" target="_blank">
                <div class="input-group">
                <input type="text" name="keyword" class="form-control" style="float: left; width: auto;">
                <button  class="btn btn-danger" type="submit" style="border-top: 1px solid red; float: left;"> Tìm kiếm</button>
                </div>
                </form>
            </li>
            <li><a href="#about" data-toggle="modal" data-target="#search">Tìm nâng cao</a></li>
            @if (Auth::guest())
            <li><a href="#about" data-toggle="modal" data-target="#login" data-backdrop="static" data-keyboard="false">Đăng nhập</a></li>
            <li><a href="#about" data-toggle="modal" data-target="#register" data-backdrop="static" data-keyboard="false">Đăng ký</a></li>
            @else
            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
            @endif
</ul>        
            
          
        </div>
        <!--/.nav-collapse -->
    





      </div>
    </nav>
