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

                {{--Laporan--}}
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Laporan
                            {{--<i class="right fa fa-angle-left"></i>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>1. Finance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>2. Pattern People</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--end laporan--}}


                {{--big data--}}
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link disabled">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Big Data Bisnis
                            {{--<i class="right fa fa-angle-left"></i>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>1. Business Strategy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>2. Market Share</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--end big data--}}


                {{--big data--}}
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Pengaturan Tiket
                            {{--<i class="right fa fa-angle-left"></i>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>1. Ticket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>2. Jumlah Cetak</p>
                            </a>
                        </li>
                    </ul>
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