@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url('admin/theloai') }}"><i class="fa fa-tag"></i> <span>Thể loại</span></a></li>
          <li><a href="{{ url('admin/users') }}"><i class="fa fa-tag"></i> <span> Tài khoản người dùng</span></a></li>
          <li><a href="{{ url('admin/diadiem') }}"><i class="fa fa-tag"></i> <span> Địa điểm </span></a></li>
          <li><a href="{{ url('admin/hinhthuc') }}"><i class="fa fa-tag"></i> <span> Hình thức </span></a></li>
          <li><a href="{{ url('admin/khuvuc') }}"><i class="fa fa-tag"></i> <span> Khu vực </span></a></li>
          <li><a href="{{ url('admin/thanhpho') }}"><i class="fa fa-tag"></i> <span> Thành phố </span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>


          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
