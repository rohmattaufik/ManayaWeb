@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Atur Buzzer
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

                    {{--Tambah Buzzer--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Atur Buzzer</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-primary">
                              <form method="post" action="{{ url(action('LokasiBuzzerController@store')) }}">
                                  {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Pilih Buzzer</label>
                                            <select class="form-control" name="buzzer_id">
                                                <option disabled selected value> -- Select Buzzer -- </option>
                                                @foreach($buzzers as $buzzer)
                                                  <option value="{{$buzzer->id}}">{{$buzzer->nama_buzzer}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tempat Wisata</label>
                                            <select class="form-control" name="wisata_id">
                                                <option disabled selected value> -- Select Wisata -- </option>
                                                @foreach($wisatas as $wisata)
                                                  <option value="{{$wisata->id}}">{{$wisata->nama}}</option>
                                                  @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Mulai:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="waktu_mulai" class="form-control pull-right datepicker" placeholder="yyyy-mm-dd" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Selesai:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="waktu_selesai" class="form-control pull-right datepicker" placeholder="yyyy-mm-dd" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="poin">Poin</label>
                                            <input type="number" name="poin" class="form-control" placeholder="Enter poin">
                                        </div>
                                    </div>

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
@section('new-scripts')
<script>
$('.datepicker').datepicker({
    autoclose: true,
    format : 'yyyy-mm-dd'
});
</script>
@endsection
