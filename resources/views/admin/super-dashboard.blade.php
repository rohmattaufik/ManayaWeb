@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-bar-chart"></i>
                        Dashboard Super Admin
                    </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    {{--total tiket terjual--}}
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                {{$data['totalUser']}}
                            </h3>

                            <p>Total User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--total tiket terjual--}}
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                1456
                            </h3>

                            <p>Total User Active</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--total tiket terjual--}}
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                {{$data['tiketTerjual'][0]->TiketTerjual}}
                            </h3>

                            <p>Total Tiket Terecord</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--per kategori--}}
                    
                </div>
                {{-- end tiket terjual --}}


                <div class="col-lg-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Report User</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Wilayah</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['reportUser'] as $item)
                                        <tr>
                                            <td>{{$item->asal_provinsi}} </td>
                                            <td>{{$item->TotalWisatawan}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    
                </div>
                <!-- /.col-md-6 -->
            </div>
            {{--end row 1--}}

            {{--start row 2--}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Top Area Manaya</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['topArea'] as $item)
                                        <tr>
                                            <td>{{$item->nama_provinsi}} </td>
                                            <td>{{$item->Totals}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    
                </div>

                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Top Spot Wisata</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Wisata</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['TopWisata'] as $item)
                                        <tr>
                                            <td>{{$item->nama}} </td>
                                            <td>{{$item->totalPesanan}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    
                </div>


                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Top Traveler</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Traveler</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['TopTraveler'] as $item)
                                        <tr>
                                            <td>{{$item->email_wisatawan}} </td>
                                            <td>{{$item->totalPesanan}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    
                </div>

            </div>
            {{--end row 2--}}
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

