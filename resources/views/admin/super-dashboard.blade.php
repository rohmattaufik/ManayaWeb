@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-bar-chart"></i>
                        Dashboard Super Admin
                    </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    {{--total tiket terjual--}}
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                3480
                            </h3>

                            <p>Total User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--total tiket terjual--}}
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                1456
                            </h3>

                            <p>Total User Active</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--total tiket terjual--}}
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">
                                    <i class="fa fa-arrow-up"></i>
                                </sup>
                                10.678
                            </h3>

                            <p>Total Tiket Terecord</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    {{--end totaltiket terjual--}}

                    {{--per kategori--}}
                    <div class="card card-primary card-outline">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Per Kategori</h3>

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
                                    <tbody>
                                    <tr>
                                        <td>Wisnus Laki-laki: </td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    1320
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wisnus Perempuan: </td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    370
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wisman Laki-laki: </td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    465
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wisman Perempuan: </td>
                                        <td>
                                            <h3>
                                                <span class="badge badge-danger">
                                                    78
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


                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-bar-chart-o"></i>
                                Pengunjung Saat Ini
                            </h3>

                            <div class="card-tools">
                                Real time
                                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1501" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1201.4px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 23px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 137px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 255px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 373px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 491px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 609px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 727px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 845px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 963px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 109px; top: 280px; left: 1081px; text-align: center;">90</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 264px; left: 14px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 212px; left: 8px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 159px; left: 8px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 106px; left: 8px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 53px; left: 8px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="1501" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1201.4px; height: 300px;"></canvas></div>
                        </div>

                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-bar-chart-o"></i>
                                Pengunjung Saat Ini
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <p class="text-center">
                                    {{--<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>--}}
                                </p>

                                <div class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="salesChart" height="232" style="height: 186px; width: 796px;" width="995"></canvas>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>

                            {{--<h6 class="card-title">Special title treatment</h6>--}}

                            {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            {{--end row 1--}}

            {{--start row 2--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-footer" style="display: block;">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">

                                        <div class="row">
                                            <div class="col-lg-1">
                                                <span class="description-percentage" style="color: white;">
                                                    .
                                                </span>
                                                <h1 class="description-header text-right">
                                                    <i class="fa fa-money text-right"></i>
                                                </h1>
                                                <span class="description-text" style="color: white;">
                                                    .
                                                </span>
                                            </div>

                                            <div class="col-lg-11">
                                                <span class="description-percentage text-success">
                                                    <i class="fa fa-caret-up"></i> 17%
                                                </span>

                                                <h5 class="description-header">
                                                    Rp. 12.902.000
                                                </h5>

                                                <span class="description-text">
                                                    Total Uang
                                                </span>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <span class="description-percentage" style="color: white;">
                                                    .
                                                </span>
                                                <h1 class="description-header text-right">
                                                    <i class="fa fa-user-circle text-right"></i>
                                                </h1>
                                                <span class="description-text" style="color: white;">
                                                    .
                                                </span>
                                            </div>

                                            <div class="col-lg-11">
                                                <span class="description-percentage text-warning">
                                                    <i class="fa fa-caret-left"></i> 0%
                                                </span>

                                                <h5 class="description-header">
                                                    Rp. 4.002.000
                                                </h5>

                                                <span class="description-text">
                                                    Total Uang dari <br/>
                                                    Solo Traveler
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <span class="description-percentage" style="color: white;">
                                                    .
                                                </span>
                                                <h1 class="description-header text-right">
                                                    <i class="fa fa-group text-right"></i>
                                                </h1>
                                                <span class="description-text" style="color: white;">
                                                    .
                                                </span>
                                            </div>

                                            <div class="col-lg-11">
                                                <span class="description-percentage text-success">
                                                    <i class="fa fa-caret-up"></i> 20%
                                                </span>

                                                <h5 class="description-header">
                                                    Rp. 7.508.000
                                                </h5>

                                                <span class="description-text">
                                                    Total Uang <br/>
                                                    dari Grup
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <span class="description-percentage" style="color: white;">
                                                    .
                                                </span>
                                                <h1 class="description-header text-right">
                                                    <i class="fa fa-shopping-cart text-right"></i>
                                                </h1>
                                                <span class="description-text" style="color: white;">
                                                    .
                                                </span>
                                            </div>

                                            <div class="col-lg-11">
                                                <span class="description-percentage text-danger">
                                                    <i class="fa fa-caret-down"></i> 18%
                                                </span>

                                                <h5 class="description-header">
                                                    Rp. 3.508.000
                                                </h5>

                                                <span class="description-text">
                                                    Jumlah Biaya <br/>
                                                    Marketing
                                                </span>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
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

@endsection