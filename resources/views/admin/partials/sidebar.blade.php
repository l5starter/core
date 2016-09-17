<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- Inner sidebar -->
    <section class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/adminLTE/img/default-avatar.png') }}" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <li class="{{ (Request::is('admin/dashboard*') ? 'active' : '') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('l5starter::general.dashboard') }}</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside><!-- /.main-sidebar -->