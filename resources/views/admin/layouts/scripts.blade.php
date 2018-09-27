<!-- jQuery -->
<script src="{{ URL::asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('adminlte/dist/js/demo.js') }}"></script>
<!-- FLOT CHARTS -->
<script src="{{ URL::asset('adminlte/plugins/flot/jquery.flot.min.js') }}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ URL::asset('adminlte/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ URL::asset('adminlte/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{ URL::asset('adminlte/plugins/flot/jquery.flot.categories.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass   : 'iradio_square-blue',
            increaseArea : '20%' // optional
        })
    })
</script>
<!-- Select2 -->
<script src="{{ URL::asset('adminlte/plugins/select2/select2.full.min.js') }}"></script>