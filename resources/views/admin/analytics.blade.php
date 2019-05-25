@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>View Analytics</h1>
        </section>

        <section class="maincontent">
            <div class="col-md-12" style="margin-top:2rem;">
                <div class="box box-primary">
                    <div class="box-body" style="margin-top:2rem;">
                        <div class="col-md-6" style="margin-bottom:2rem;">
                            <form id="idForm" method="post" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-sm-5">
                                    <label for="fileInput" class="form-control-label">Start Date</label>
                                    <input type="text" placeholder="Enter Start Date" class="form-control" name="start_date" id="datepicker" readonly>
                                </div>
                                <div class="col-sm-5">
                                    <label for="fileInput" class="form-control-label">End Date</label>
                                    <input type="text" placeholder="Enter End Date" class="form-control" name="end_date" id="datepicker2" readonly>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button class="btn btn-primary pull-right" id="mySubmit" type="submit" >Search</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

            <div class="row container-fluid">
                <div class="col-md-12" style="margin-top:2rem;">
                    <h3>Visitor Analytics
                        <span style="float:right">Total Visitor: {{$analyticsData['total_visitor']}}</span></h3>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <canvas id="barChartExample"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            <div class="row container-fluid">
                <div class="col-md-12" style="margin-top:2rem;">
                    <h3>Category Analytics</h3>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <canvas id="barChartExample1"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            <div class="row container-fluid">
                <div class="col-md-6" style="margin-top:2rem;">
                    <h3>Traffic Source Analytics
                        <span style="float:right">Total Traffic: {{$analyticsData['total_traffic']}}</span></h3>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <canvas id="pieChartExample"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

                <div class="col-md-6" style="margin-top:2rem;">
                    <h3>Device Type Analytics
                        <span style="float:right">Total Device: {{$analyticsData['total_device']}}</span></h3>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <canvas id="doughnutChartExample"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

                <div class="col-md-6" style="margin-top:2rem;">
                    <h3>Planning Tool User Analytics
                        <span style="float:right">Total User: {{$analyticsData['total_mp']}}</span></h3>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <canvas id="polarChartExample"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </div>

@endsection

@push('scripts')

<script type="text/javascript">
    var date = new Date();
    //var monthStartDay = new Date(date.getFullYear(), date.getMonth()-1, 1);
    $( function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            maxDate: 0,
            onSelect: function (date) {
                var date2 = $('#datepicker').datepicker('getDate');
                date2.setDate(date2.getDate());
                $('#datepicker2').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#datepicker2').datepicker('option', 'minDate', date2);

                var n = new Date();
                var m = new Date(date2.getFullYear(), date2.getMonth()+2, 1);
                if(m>n)
                    $('#datepicker2').datepicker('option', 'maxDate', n);
                else
                    $('#datepicker2').datepicker('option', 'maxDate', m);
            }
        });

        $('#datepicker2').datepicker({
            dateFormat: "yy-mm-dd",
            maxDate: 0,
            onClose: function () {
                var dt1 = $('#datepicker').datepicker('getDate');
                var dt2 = $('#datepicker2').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#datepicker2').datepicker('option', 'minDate');
                    $('#datepicker2').datepicker('setDate', minDate);
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#mySubmit').click(function() {
            dp1 = $('#datepicker').datepicker('getDate');
            dp2 = $('#datepicker2').datepicker('getDate');

            if(!dp1 || !dp2) {
                alert("You must input Date.");
                return false;
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>

<script type="text/javascript">
    $(document).ready(function () {

        Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
            color: '#FFFFFF',
            font: {
                weight: 'bold',
                size: 18
            }
        });

        var date = {!! json_encode($analyticsData['date']) !!};
        var visitors = {!! json_encode($analyticsData['visitors']) !!};
        //var pageviews = {!! json_encode($analyticsData['page_views']) !!};
        //alert(date);

        var cname = {!! json_encode($analyticsData['category_name']) !!};
        var cview = {!! json_encode($analyticsData['category_view']) !!};

        'use strict';

        // ------------------------------------------------------- //
        // Charts Gradients
        // ------------------------------------------------------ //
        var ctx1 = $("canvas").get(0).getContext("2d");
        var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
        //gradient1.addColorStop(0, 'rgba(133, 180, 242, 0.91)');
        gradient1.addColorStop(1, 'rgba(255, 119, 119, 0.94)');

        var gradient2 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
        //gradient2.addColorStop(0, 'rgba(104, 179, 112, 0.85)');
        gradient2.addColorStop(1, 'rgba(76, 162, 205, 0.85)');

        var gradient3 = ctx1.createLinearGradient(140.000, 0.000, 160.000, 300.000);
        gradient3.addColorStop(0, 'rgba(255,135,31,0.95)');
        //gradient3.addColorStop(1, 'rgba(255,173,102,0.95)');

        // ------------------------------------------------------- //
        // Bar Chart
        // ------------------------------------------------------ //
        var BARCHARTEXMPLE    = $('#barChartExample');

        var bc1=[];
        //var bc2=[];

        date.forEach(function(element) {
            bc1.push(gradient2);
            //bc2.push(gradient1);
        });

        var barChartExample = new Chart(BARCHARTEXMPLE, {
            type: 'bar',
            options: {
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            autoSkip: false
                        },
                        gridLines: {
                            color: '#eee'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: '#eee'
                        }
                    }]
                },
            },
            data: {
                labels: date,
                datasets: [
                    {
                        label: "Visitors",
                        backgroundColor: bc1,
                        hoverBackgroundColor: bc1,
                        borderColor: bc1,
                        borderWidth: 1,
                        data: visitors,
                    },
                    /*{
                     label: "Page Views",
                     backgroundColor: bc2,
                     hoverBackgroundColor: bc2,
                     borderColor: bc2,
                     borderWidth: 1,
                     data: pageviews,
                     }*/
                ]
            }
        });

        var BARCHARTEXMPLE1    = $('#barChartExample1');

        var bc2=[];

        cname.forEach(function(element) {
            bc2.push(gradient1);
        });

        var barChartExample1 = new Chart(BARCHARTEXMPLE1, {
            type: 'bar',
            options: {
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            autoSkip: false
                        },
                        gridLines: {
                            color: '#eee'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: '#eee'
                        }
                    }]
                },
            },
            data: {
                labels: cname,
                datasets: [
                    {
                        label: "Visitors",
                        backgroundColor: bc2,
                        hoverBackgroundColor: bc2,
                        borderColor: bc2,
                        borderWidth: 1,
                        data: cview,
                    }
                ]
            }
        });

        var barChartExample = {
            responsive: true
        };

        var barChartExample1 = {
            responsive: true
        };
    });
</script>
<script>
    $(document).ready(function () {

        var refurl = {!! json_encode($analyticsData['ref_url']) !!};
        var refpageviews = {!! json_encode($analyticsData['ref_page_views']) !!};

        'use strict';
        var PIECHARTEXMPLE = $('#pieChartExample');
        var pieChartExample = new Chart(PIECHARTEXMPLE, {
            type: 'pie',
            data: {
                labels: refurl,
                datasets: [
                    {
                        data: refpageviews,
                        borderWidth: 0,
                        backgroundColor: [
                            '#4bc0c0',
                            "#ff6384",
                            "#36a2eb",
                            "#ffcd56"
                        ],
                        hoverBackgroundColor: [
                            '#4bc0c0',
                            "#ff6384",
                            "#36a2eb",
                            "#ffcd56"
                        ]
                    }]
            }
        });

        var pieChartExample = {
            responsive: true
        };
    });
</script>
<script>
    $(document).ready(function () {

        var deviceType = {!! json_encode($analyticsData['device_type']) !!};
        var deviceViews = {!! json_encode($analyticsData['device_view']) !!};

        'use strict';
        var DOUGHNUTCHARTEXMPLE = $('#doughnutChartExample');
        var doughnutChartExample = new Chart(DOUGHNUTCHARTEXMPLE, {
            type: 'doughnut',
            data: {
                labels: deviceType,
                datasets: [
                    {
                        data: deviceViews,
                        borderWidth: 0,
                        backgroundColor: [
                            '#4bc0c0',
                            "#36a2eb",
                            "#ffcd56"
                        ],
                        hoverBackgroundColor: [
                            '#4bc0c0',
                            "#36a2eb",
                            "#ffcd56"
                        ]
                    }]
            }
        });

        var doughnutChartExample = {
            responsive: true
        };
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        var mplan = {!! json_encode($analyticsData['monthly_plan']) !!};

        'use strict';

        var POLARCHARTEXMPLE  = $('#polarChartExample');
        var polarChartExample = new Chart(POLARCHARTEXMPLE, {
            type: 'polarArea',
            options: {
                elements: {
                    arc: {
                        borderWidth: 0,
                        borderColor: '#aaa',
                    }
                }
            },
            data: {
                datasets: [{
                    data: mplan,
                    backgroundColor: [
                        "#4bc0c0",
                        "#ff6384",
                        "#36a2eb"
                    ],
                    label: 'Monthlty Plan User' // for legend
                }],
                labels: [
                    "My Budget",
                    "My Checklist",
                    "My Vendors"
                ]
            }
        });

        var polarChartExample = {
            responsive: true
        };
    });
</script>
@endpush

