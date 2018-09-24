@extends('admin.layouts.app-login')
@section('content')

    <div class="row">

    <div class="col-lg-6">
        <img src="{{ URL::asset('img/manayaloginadmin.jpg') }}" style="height: 100%; width: 100%;" alt="image login">
    </div>

    <div class="col-lg-6">
        <div class="login-box" style="margin-top: 15%; margin-bottom: 20%;">
            <div class="login-logo">
                <a href="../../index2.html"><b>Manaya Admin Dashboard</b></a>
            </div>
                {{--<h1 class="text-center">--}}
                    {{--<a href="#">--}}
                        {{--<b>Manaya Admin Dashboard</b>--}}
                    {{--</a>--}}
                {{--</h1>--}}
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Ticketing Solution</p>

                    <form action="../../index2.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <span class="fa fa-envelope input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <span class="fa fa-lock input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    {{--<div class="social-auth-links text-center mb-3">--}}
                        {{--<p>- OR -</p>--}}
                        {{--<a href="#" class="btn btn-block btn-primary">--}}
                            {{--<i class="fa fa-facebook mr-2"></i> Sign in using Facebook--}}
                        {{--</a>--}}
                        {{--<a href="#" class="btn btn-block btn-danger">--}}
                            {{--<i class="fa fa-google-plus mr-2"></i> Sign in using Google+--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="#">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </div>

    </div>
@endsection