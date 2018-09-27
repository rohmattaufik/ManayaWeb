@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-ticket"></i>
                        Pengaturan Tiket
                    </h1>
                </div><!-- /.col -->
                {{--<div class="col-sm-6">--}}
                {{--<ol class="breadcrumb float-sm-right">--}}
                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--<li class="breadcrumb-item active">Starter Page</li>--}}
                {{--</ol>--}}
                {{--</div><!-- /.col -->--}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">

                    {{--Pengaturan Tiket--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Pengaturan Tiket</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                {{--<button type="button" class="btn btn-tool" data-widget="remove">--}}
                                {{--<i class="fa fa-times"></i>--}}
                                {{--</button>--}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>

                                    <th scope="col">
                                        #
                                    </th>
                                    <th scope="col">
                                        Tiket
                                    </th>
                                    <th scope="col">
                                        Harga
                                    </th>
                                    <th scope="col">
                                        Action
                                    </th>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Wisnus Laki-laki</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Rp. 201.728
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Wisnus Perempuan</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Rp. 201.728
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    {{--<div class="card-footer clearfix">--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>--}}
                    {{--</div>--}}
                    <!-- /.card-footer -->
                    </div>
                    {{--end per kategori--}}


                </div>
                {{-- end tiket terjual --}}


                <div class="col-lg-4">

                    {{--per kategori--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Pengaturan Operator</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                {{--<button type="button" class="btn btn-tool" data-widget="remove">--}}
                                {{--<i class="fa fa-times"></i>--}}
                                {{--</button>--}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <th scope="col">
                                        #
                                    </th>
                                    <th scope="col">
                                        Buzzer
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jateng
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jabar
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jatim
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jogja
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Banten
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    {{--<div class="card-footer clearfix">--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>--}}
                    {{--</div>--}}
                    <!-- /.card-footer -->
                    </div>
                    {{--end per kategori--}}



                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">

                    {{--per kategori--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Pengaturan Diskon</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                {{--<button type="button" class="btn btn-tool" data-widget="remove">--}}
                                {{--<i class="fa fa-times"></i>--}}
                                {{--</button>--}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <th scope="col">
                                        #
                                    </th>
                                    <th scope="col">
                                        Buzzer
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jateng
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jabar
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jatim
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Jogja
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    Banten
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    {{--<div class="card-footer clearfix">--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>--}}
                    {{--<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>--}}
                    {{--</div>--}}
                    <!-- /.card-footer -->
                    </div>
                    {{--end per kategori--}}



                </div>
                <!-- /.col-lg-4 -->


            </div>
            {{--end row 1--}}

            {{--start row 2--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
            {{--<div class="card card-primary card-outline">--}}
            {{--<div class="card-footer" style="display: block;">--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-3 col-6">--}}
            {{--<div class="description-block border-right">--}}

            {{--<div class="row">--}}
            {{--<div class="col-lg-1">--}}
            {{--<span class="description-percentage" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--<h1 class="description-header text-right">--}}
            {{--<i class="fa fa-money text-right"></i>--}}
            {{--</h1>--}}
            {{--<span class="description-text" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-lg-11">--}}
            {{--<span class="description-percentage text-success">--}}
            {{--<i class="fa fa-caret-up"></i> 17%--}}
            {{--</span>--}}

            {{--<h5 class="description-header">--}}
            {{--Rp. 12.902.000--}}
            {{--</h5>--}}

            {{--<span class="description-text">--}}
            {{--Total Uang--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--</div>--}}

            {{--</div>--}}
            {{--<!-- /.description-block -->--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
            {{--<div class="col-sm-3 col-6">--}}
            {{--<div class="description-block border-right">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-1">--}}
            {{--<span class="description-percentage" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--<h1 class="description-header text-right">--}}
            {{--<i class="fa fa-user-circle text-right"></i>--}}
            {{--</h1>--}}
            {{--<span class="description-text" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-lg-11">--}}
            {{--<span class="description-percentage text-warning">--}}
            {{--<i class="fa fa-caret-left"></i> 0%--}}
            {{--</span>--}}

            {{--<h5 class="description-header">--}}
            {{--Rp. 4.002.000--}}
            {{--</h5>--}}

            {{--<span class="description-text">--}}
            {{--Total Uang dari <br/>--}}
            {{--Solo Traveler--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.description-block -->--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
            {{--<div class="col-sm-3 col-6">--}}
            {{--<div class="description-block border-right">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-1">--}}
            {{--<span class="description-percentage" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--<h1 class="description-header text-right">--}}
            {{--<i class="fa fa-group text-right"></i>--}}
            {{--</h1>--}}
            {{--<span class="description-text" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-lg-11">--}}
            {{--<span class="description-percentage text-success">--}}
            {{--<i class="fa fa-caret-up"></i> 20%--}}
            {{--</span>--}}

            {{--<h5 class="description-header">--}}
            {{--Rp. 7.508.000--}}
            {{--</h5>--}}

            {{--<span class="description-text">--}}
            {{--Total Uang <br/>--}}
            {{--dari Grup--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.description-block -->--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
            {{--<div class="col-sm-3 col-6">--}}
            {{--<div class="description-block">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-1">--}}
            {{--<span class="description-percentage" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--<h1 class="description-header text-right">--}}
            {{--<i class="fa fa-shopping-cart text-right"></i>--}}
            {{--</h1>--}}
            {{--<span class="description-text" style="color: white;">--}}
            {{--.--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-lg-11">--}}
            {{--<span class="description-percentage text-danger">--}}
            {{--<i class="fa fa-caret-down"></i> 18%--}}
            {{--</span>--}}

            {{--<h5 class="description-header">--}}
            {{--Rp. 3.508.000--}}
            {{--</h5>--}}

            {{--<span class="description-text">--}}
            {{--Jumlah Biaya <br/>--}}
            {{--Marketing--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--</div>--}}

            {{--</div>--}}
            {{--<!-- /.description-block -->--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--end row 2--}}
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('new-scripts')

    <!-- Page script -->
    <script>
        $(function () {
            /*
             * Flot Interactive Chart
             * -----------------------
             */
            // We use an inline data source in the example, usually data would
            // be fetched from a server
            var data        = [],
                totalPoints = 100

            function getRandomData() {

                if (data.length > 0) {
                    data = data.slice(1)
                }

                // Do a random walk
                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y    = prev + Math.random() * 10 - 5

                    if (y < 0) {
                        y = 0
                    } else if (y > 100) {
                        y = 100
                    }

                    data.push(y)
                }

                // Zip the generated y values with the x values
                var res = []
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }

                return res
            }

            var interactive_plot = $.plot('#interactive', [getRandomData()], {
                grid  : {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3'
                },
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    color     : '#3c8dbc'
                },
                lines : {
                    fill : true, //Converts the line chart to area chart
                    color: '#3c8dbc'
                },
                yaxis : {
                    min : 0,
                    max : 100,
                    show: true
                },
                xaxis : {
                    show: true
                }
            })

            var updateInterval = 500 //Fetch data ever x milliseconds
            var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
            function update() {

                interactive_plot.setData([getRandomData()])

                // Since the axes don't change, we don't need to call plot.setupGrid()
                interactive_plot.draw()
                if (realtime === 'on') {
                    setTimeout(update, updateInterval)
                }
            }

            //INITIALIZE REALTIME DATA FETCHING
            if (realtime === 'on') {
                update()
            }
            //REALTIME TOGGLE
            $('#realtime .btn').click(function () {
                if ($(this).data('toggle') === 'on') {
                    realtime = 'on'
                }
                else {
                    realtime = 'off'
                }
                update()
            })
            /*
             * END INTERACTIVE CHART
             */


            /*
             * LINE CHART
             * ----------
             */
            //LINE randomly generated data

            var sin = [],
                cos = []
            for (var i = 0; i < 14; i += 0.5) {
                sin.push([i, Math.sin(i)])
                cos.push([i, Math.cos(i)])
            }
            var line_data1 = {
                data : sin,
                color: '#3c8dbc'
            }
            var line_data2 = {
                data : cos,
                color: '#00c0ef'
            }
            $.plot('#line-chart', [line_data1, line_data2], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3'
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: true
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },
                xaxis : {
                    show: true
                }
            })
            //Initialize tooltip on hover
            $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
                position: 'absolute',
                display : 'none',
                opacity : 0.8
            }).appendTo('body')
            $('#line-chart').bind('plothover', function (event, pos, item) {

                if (item) {
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2)

                    $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                        .css({
                            top : item.pageY + 5,
                            left: item.pageX + 5
                        })
                        .fadeIn(200)
                } else {
                    $('#line-chart-tooltip').hide()
                }

            })
            /* END LINE CHART */

            /*
             * FULL WIDTH STATIC AREA CHART
             * -----------------
             */
            var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
                [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
                [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
            $.plot('#area-chart', [areaData], {
                grid  : {
                    borderWidth: 0
                },
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    color     : '#00c0ef'
                },
                lines : {
                    fill: true //Converts the line chart to area chart
                },
                yaxis : {
                    show: false
                },
                xaxis : {
                    show: false
                }
            })

            /* END AREA CHART */

            /*
             * BAR CHART
             * ---------
             */

            var bar_data = {
                data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
                color: '#3c8dbc'
            }
            $.plot('#bar-chart', [bar_data], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show    : true,
                        barWidth: 0.5,
                        align   : 'center'
                    }
                },
                xaxis : {
                    mode      : 'categories',
                    tickLength: 0
                }
            })
            /* END BAR CHART */

            /*
             * DONUT CHART
             * -----------
             */

            var donutData = [
                {
                    label: 'Series2',
                    data : 30,
                    color: '#3c8dbc'
                },
                {
                    label: 'Series3',
                    data : 20,
                    color: '#0073b7'
                },
                {
                    label: 'Series4',
                    data : 50,
                    color: '#00c0ef'
                }
            ]
            $.plot('#donut-chart', donutData, {
                series: {
                    pie: {
                        show       : true,
                        radius     : 1,
                        innerRadius: 0.5,
                        label      : {
                            show     : true,
                            radius   : 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }

                    }
                },
                legend: {
                    show: false
                }
            })
            /*
             * END DONUT CHART
             */

        })

        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
            return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + '<br>'
                + Math.round(series.percent) + '%</div>'
        }
    </script>


    {{--<!-- OPTIONAL SCRIPTS -->--}}
    {{--<script src="{{ URL::asset('adminlte/dist/js/demo.js') }}"></script>--}}

    {{--<!-- PAGE PLUGINS -->--}}
    {{--<!-- SparkLine -->--}}
    {{--<script src="{{ URL::asset('adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>--}}
    {{--<!-- jVectorMap -->--}}
    {{--<script src="{{ URL::asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>--}}
    {{--<!-- SlimScroll 1.3.0 -->--}}
    {{--<script src="{{ URL::asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>--}}
    <!-- ChartJS 1.0.2 -->
    <script src="{{ URL::asset('adminlte/plugins/chartjs-old/Chart.min.js') }}"></script>


    {{--saleschart--}}
    <script src="{{ URL::asset('adminlte/dist/js/pages/dashboard2.js') }}">

    </script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker         : true,
                timePickerIncrement: 30,
                format             : 'MM/DD/YYYY h:mm A'
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>

@endsection
