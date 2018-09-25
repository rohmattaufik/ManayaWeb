<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ URL::asset('img/logo.png') }}"
             alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Manaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Rohmat Taufik</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                {{--Dashboard Admin--}}
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}"
                       class="nav-link {{
                                Request::is('admin/dashboard/*') ? 'active' : '' ||
                                Request::is('admin/dashboard') ? 'active' : ''
                                }}">
                        <i class="nav-icon fa fa-area-chart"></i>
                        <p>
                            Dashboard
                            {{--<span class="right badge badge-danger">New</span>--}}
                        </p>
                    </a>
                </li>
                {{--End Dashboard Admin--}}

                {{--Laporan--}}

                <li class="nav-header">
                    LAPORAN
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-sticky-note"></i>
                        <p>1. Laporan Finance</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-sticky-note"></i>
                        <p>2. Laporan Pattern People</p>
                    </a>
                </li>


                {{--end laporan--}}


                {{--big data--}}
                <li class="nav-header">
                    BISNIS BIG DATA
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>1. Business Strategy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>2. Market Share</p>
                    </a>
                </li>
                {{--end big data--}}


                {{--big data--}}
                <li class="nav-header">
                    PENGATURAN TIKET
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-ticket"></i>
                        <p>1. Ticket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-ticket"></i>
                        <p>2. Jumlah Cetak</p>
                    </a>
                </li>
                {{--end big data--}}


                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">--}}
                        {{--<i class="nav-icon fa fa-th"></i>--}}
                        {{--<p>--}}
                            {{--Simple Link--}}
                            {{--<span class="right badge badge-danger">New</span>--}}
                        {{--</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>