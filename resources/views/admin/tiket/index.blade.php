@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Daftar Tiket
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

                    {{--Daftar Tiket--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Daftar Tiket</h3>

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
                                        <th scope="col">Nama Tiket</th>
                                        <th scope="col">Lokasi Tiket</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Jumlah Tiket</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Wisman Laki-laki </td>
                                            <td>Candi Prambanan</td>
                                            <td>Rp. 80.000,-</td>
                                            <td>Aktif</td>
                                            <td>Tidak dibatasi</td>
                                            <td><a href="" class="btn btn-default">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Wisman Laki-laki </td>
                                            <td>Candi Borobudur</td>
                                            <td>Rp. 30.000,-</td>
                                            <td>Aktif</td>
                                            <td>Tidak dibatasi</td>
                                            <td><a href="" class="btn btn-default">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Wisman Perempuan </td>
                                            <td>Candi Prambanan</td>
                                            <td>Rp. 85.000,-</td>
                                            <td>Aktif</td>
                                            <td>Tidak dibatasi</td>
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


