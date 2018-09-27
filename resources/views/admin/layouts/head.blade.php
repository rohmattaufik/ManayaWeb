<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

@if(Session::get('superadmin'))
    <title>Manaya | Super Admin</title>
@else
    <title>Manaya | Admin</title>
@endif

<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ URL::asset('adminlte/dist/css/adminlte.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/iCheck/square/blue.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Select2 -->
<link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/select2/select2.min.css') }}">
<!-- Favicon -->
<link rel="icon" href="{{ URL::asset('img/logocolor.png') }}">