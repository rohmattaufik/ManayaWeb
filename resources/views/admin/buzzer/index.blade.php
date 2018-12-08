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
                                <a href="{{route('buzzer-create')}}" class="btn btn-success">Tambah Buzzer</a>
                                <a href="{{route('buzzer-mapping-create')}}" class="btn btn-info">Mapping Buzzer</a>
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
                                        <th scope="col">Nama Buzzer</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Lokasi Buzzer</th>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th scope="col">Poin</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                      <?php $count = 0; ?>
                                        @foreach($buzzers as $buzzer)
                                          <tr>
                                              <td><?php echo ++$count; ?></td>
                                              <td>{{$buzzer->nama_buzzer}} </td>
                                              <td>{{$buzzer->phone}}</td>
                                              <td>{{$buzzer->nama}}</td>
                                              <td>{{$buzzer->waktu_mulai}}</td>
                                              <td>{{$buzzer->waktu_selesai}}</td>
                                              <td>{{$buzzer->poin}}</td>
                                              <td>
                                                <a type="button" href="{{ url(action('LokasiBuzzerController@edit',[$buzzer->id])) }}"
                                                 class="btn btn-default">
                                                  Edit
                                                </a>
                                                <form method="post" action="{{ url(action('LokasiBuzzerController@delete')) }}">
                                                    {{ csrf_field() }}
                                                          <input type="hidden" name="id" value="{{$buzzer->id}}" />
                                                          <button type="submit" class="btn btn-default">Delete</button>
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
