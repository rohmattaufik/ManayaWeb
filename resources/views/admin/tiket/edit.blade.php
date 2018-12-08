@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Update Tiket
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

                    {{--Form Tiket--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Update Tiket</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-primary">
                                <form role="form" method="post" action="{{ route('tiket-update', $tiket_mapping['id']) }}">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Tiket</label>
                                            <select class="form-control" name='wisatawan_id'>
                                                @foreach ($wisatawans as $wisatawan)
                                                    <option value="{{ $wisatawan['id'] }}" {{ $tiket_mapping['wisatawan']['id'] == $wisatawan['id'] ? 'selected="true"' : ''}}> {{ $wisatawan['nama']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tempat Wisata</label>
                                            <select class="form-control" name='wisata_id'>
                                                @foreach ($wisatas as $wisata)
                                                    <option value="{{ $wisata['id'] }}" {{ $tiket_mapping['wisata']['id'] == $wisata['id'] ? 'selected="true"' : ''}}>{{$wisata['nama']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Harga</label>
                                            <input type="number" class="form-control" value="{{ $tiket_mapping['harga_tiket'] }}" name="harga_tiket" placeholder="Harga">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input type="number" class="form-control" value="{{ $tiket_mapping['jumlah_tiket'] }}" name="jumlah_tiket" placeholder="Jumlah Tiket">
                                        </div>
                                    </div>
                                        <!-- /.box-body -->
                        
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
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


