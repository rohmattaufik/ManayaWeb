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
                            <h3 class="card-title">Edit Informasi Buzzer </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-primary">
                              <form method="post" action="{{ url(action('LokasiBuzzerController@update', $databuzzer->id))}}">
                                  {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Pilih Buzzer</label>
                                            <select class="form-control" name="buzzer_id">
                                                @foreach($buzzers as $buzzer)
                                                    @if($databuzzer->buzzer_id == $buzzer->id)
                                                      <option value="{{$buzzer->id}}" selected>{{$buzzer->nama_buzzer}}</option>
                                                    @else
                                                      <option value="{{$buzzer->id}}">{{$buzzer->nama_buzzer}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tempat Wisata</label>
                                            <select class="form-control" name="wisata_id">
                                                @foreach($wisatas as $wisata)
                                                    @if($databuzzer->wisata_id == $wisata->id)
                                                      <option value="{{$wisata->id}}" selected>{{$wisata->nama}}</option>
                                                    @else
                                                      <option value="{{$wisata->id}}">{{$wisata->nama}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Mulai:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="waktu_mulai" class="form-control pull-right" value="{{$databuzzer->waktu_mulai}}" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Selesai:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="waktu_selesai" class="form-control pull-right" value="{{$databuzzer->waktu_selesai}}" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="poin">Poin</label>
                                            <input type="number" name="poin" class="form-control" value="{{$databuzzer->poin}}" placeholder="Enter poin">
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
