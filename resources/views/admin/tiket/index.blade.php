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
                                <a href="{{ route('tiket-create') }}" class="btn btn-success">Tambah</a>
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="table" class="table m-0">
                                    <thead>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Tiket</th>
                                        <th scope="col">Lokasi Tiket</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah Tiket</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($tiket_mappings as $key => $tiket_mapping)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{ $tiket_mapping['wisatawan']['nama'] }} </td>
                                            <td>{{ $tiket_mapping['wisata']['nama'] }}</td>
                                            <td>{{ $tiket_mapping['harga_tiket'] }}</td>
                                            <td>{{ !empty($tiket_mapping['jumlah_tiket']) ? $tiket_mapping['jumlah_tiket'] : 'Tidak Dibatasi'}}</td>
                                            <td>
                                                <a href="{{ route('tiket-edit', $tiket_mapping['id']) }}" class="btn btn-default">Edit</a>
                                                <form method="post" action="{{ route('tiket-delete') }}">
                                                    {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{$tiket_mapping->id}}" />
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
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
@section('new-scripts')
<script>
    $(function () {
        $('#table').DataTable()
    })
</script>
@endsection


