@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Atur Diskon
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
                            <h3 class="card-title">Atur Diskon</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-primary">
                              <form method="post" action="{{ route('diskon-mapping-submit') }}">
                                  {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Pilih Diskon</label>
                                            <select class="form-control" name="diskon_id">
                                                <option disabled selected value> -- Select Diskon -- </option>
                                                @foreach($diskons as $diskon)
                                                  <option value="{{$diskon->id}}">{{$diskon->nama_diskon}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tempat Wisata</label>
                                            <!-- checkbox -->
                                            @foreach($wisatas as $wisata)
                                            <div class="checkbox">
                                                <label>
                                                <input name="wisata_id[]" value='{{$wisata->id}}' type="checkbox">
                                                    {{ $wisata['nama']}}
                                                </label>
                                            </div>
                                            @endforeach
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
