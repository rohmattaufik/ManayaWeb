@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Daftar Operator
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

                    {{--Daftar Operator--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Daftar Operator</h3>

                            <div class="card-tools">
                                <a href="{{route('operator-create')}}" class="btn btn-success">Tambah Operator</a>
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
                                        <th scope="col">Nama Operator</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tempat Wisata</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                      <?php $count = 0; ?>
                                        @foreach($users as $user)
                                          <tr>
                                              <td><?php echo ++$count; ?></td>
                                              <td>{{$user->nama}} </td>
                                              <td>
                                                @if($user->role === 1)
                                                  Operator
                                                @elseif($user->role === 2)
                                                  Admin
                                                @elseif($user->role === 3)
                                                  Super Admin
                                                @endif
                                              </td>
                                              <td>{{$user->nama}}</td>
                                              <td>{{$user->email}}</td>
                                              <td>{{$user->nama_wisata}}</td>
                                              <td>
                                                <a href="{{route('operator-edit', $user->id)}}" class="btn btn-info">Edit</a>
                                                  <form method="post" action="{{ url(action('OperatorController@delete')) }}">
                                                      {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{$user->id}}" />
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