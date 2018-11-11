@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Daftar Buzzer
                    </h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    {{--Daftar Buzzer--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Daftar Buzzer</h3>

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
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Buzzer</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Lokasi Buzzer</th>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th scope="col">Poin</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nikita </td>
                                            <td>085229997676</td>
                                            <td>Candi Prambanan</td>
                                            <td>12 Oktober 2018</td>
                                            <td>20 Oktober 2018</td>
                                            <td>0</td>
                                            <td><a href="" class="btn btn-default">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John </td>
                                            <td>085229997676</td>
                                            <td>Lawang Sewu</td>
                                            <td>12 Oktober 2018</td>
                                            <td>20 Oktober 2018</td>
                                            <td>20</td>
                                            <td><a href="" class="btn btn-default">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Winny </td>
                                            <td>085229917676</td>
                                            <td>Candi Mendhut</td>
                                            <td>12 September 2018</td>
                                            <td>20 Oktober 2018</td>
                                            <td>80</td>
                                            <td><a href="" class="btn btn-default">Edit</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    
                    <!-- /.card-footer -->
                    </div>
                    {{--end per kategori--}}


                </div>
                {{-- end tiket terjual --}}

                </div>
                <!-- /.col-lg-4 -->
            </div>
            {{--end row 1--}}
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


