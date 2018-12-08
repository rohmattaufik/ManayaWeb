@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Form Operator
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

                    {{--Form Operator--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Form Operator</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-primary">
                              <form method="post" action="{{ route('operator-update', $operator->id) }}">
                                  {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Operator</label>
                                            <input type="text" class="form-control" name="nama" value="{{$operator->nama}}" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="usernama">Username Operator</label>
                                            <input type="text" class="form-control" name="username" value="{{$operator->username}}" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Operator</label>
                                            <input type="email" class="form-control" name="email" value="{{$operator->email}}" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" class="form-control" name="password"  placeholder="Enter password">
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tempat Wisata</label>
                                            <select class="form-control" name="wisata_id">
                                                <option disabled selected value> -- Select Wisata -- </option>
                                                @foreach($wisatas as $wisata)
                                                    @if ($wisata->id == $operator->wisata_id)
                                                        <option value="{{$wisata->id}}" selected="true">{{$wisata->nama}}</option>
                                                    @else
                                                        <option value="{{$wisata->id}}">{{$wisata->nama}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                                <option value="1" {{$operator->role == 1 ? "selected='true'": ""}}>operator</option>
                                                <option value="2" {{$operator->role == 2 ? "selected='true'": ""}}>administrator</option>
                                                <option value="3" {{$operator->role == 3 ? "selected='true'": ""}}>superadmin</option>
                                            </select>
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
