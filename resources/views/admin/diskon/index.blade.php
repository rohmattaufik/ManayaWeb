@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Daftar Diskon
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
                            <h3 class="card-title">Daftar Diskon</h3>

                            <div class="card-tools">
                                <a href="{{route('diskon-create')}}" class="btn btn-success">Tambah Diskon</a>
                                <a href="{{route('diskon-mapping')}}" class="btn btn-info">Mapping Wisata</a>
                                <a href="{{route('diskon-mapping-for')}}" class="btn btn-info">Mapping Categoty</a>
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
                                        <th scope="col">Nama Diskon</th>
                                        <th scope="col">Jumlah (%)</th>
                                        <th scope="col">Wisata</th>
                                        <th scope="col">Apply For</th>
                                        <th scope="col">Status</th>
                                    </thead>
                                    <tbody>
                                        @foreach($diskons as $key => $diskon)
                                          <tr>
                                              <td><?php echo ++$key; ?></td>
                                              <td>{{$diskon->nama_diskon}} </td>
                                              <td>{{$diskon->jumlah_persen . " persen"}}</td>
                                              <td>
                                                  <table>
                                                      <thead>
                                                          <tr>
                                                              <th>Lokasi Wisata</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          @foreach($diskon['diskonMappings'] as $mapping)
                                                            <tr>
                                                                <td>{{ $mapping['wisata']['nama']}}</td>
                                                            </tr>
                                                          @endforeach
                                                      </tbody>
                                                  </table>
                                              </td>
                                              <td>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Jenis Penerima Diskon
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($diskon['diskonFors'] as $diskonFor)
                                                            <tr>
                                                                <td>{{$diskonFor['for_type'] == 1 ? $diskonFor['data_type']['nama'] : $diskonFor['data_type']['nama_kategori']}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                              </td>
                                              <td>{{ $diskon['flag_active'] == 0 ? 'Inactive' : 'Active'}}</td>
                                              <td>
                                                @if ($diskon['flag_active'] == 0)
                                                    <a href="{{ route('diskon-activate', $diskon['id']) }}" class="btn btn-success">Activate</a>
                                                @else   
                                                    <a href="{{ route('diskon-deactive', $diskon['id']) }}" class="btn btn-danger">Deactive</a>
                                                @endif
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
