@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Solar Projects</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <!-- <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart"></div>
            </div> -->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-line-chart fa-fw"></i> Solar Projects Location
                    <div class="pull-right">
                        <div class="reportrange" class="pull-right" style="cursor: pointer; padding: 2px 10px; background: #fff; border-radius: 2px;color: #333;">
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="revenue"></div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
    <div class="row"> 
        <div class="col-lg-4">
            <div class="navbar-default" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav">
                        <li class="active"><a href="#">Location <i class="pull-right fa fa-fw fa-caret-right"></i></a></li>
                        <li><a href="#">Branch</a></li>
                        <li><a href="#">System</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            @if ( isset($location) )
            <table class="table table-striped table-bordered table-hover dataTable">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Projects</th>
                        <th>Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $location as $value ) 
                    <tr>
                        <td>{{ $value['location'] }}</td>
                        <td>{{ $value['total'] }}</td>
                        <td>{{ $value['revenue'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
var hostname = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '')+'/';

function getHostname(string){
    return hostname + string;
}

$(document).ready(function() {
    $('.dataTable').DataTable({
            responsive: true
    });

    $('.reportrange span').html(moment("2014-01-01").format('MMMM D, YYYY') + ' - ' + moment("2014-12-31").format('MMMM D, YYYY'));
 
    $('.reportrange').daterangepicker({
        format: 'MM/DD/YYYY',        
    }, function(start, end, label) {
        // console.log(start.toISOString(), end.toISOString(), label);
        $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        // console.log(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));

        // get new project revenue
        $.ajax({
            type: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                
                if (token) {
                      return xhr.setRequestHeader('X-XSRF-TOKEN', token);
                }
            },
            url: getHostname("projectrevenue"),
            data: {
                start: start.format('YYYY-DD-MM'),
                end: end.format('YYYY-DD-MM'),
            },
            success: function(data){
                console.log(data);
            },
            dataType: "text"
            // I should through event. With callback
        });
       
    });

});

@if ( isset($revenue) )
// REVENUE
google.load('visualization', '1', {packages: ['corechart', 'line']});
google.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
    json = {!! $revenue !!} ;

    var month_names = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    var months = [
        ['Month', 'Revenue'],
    ];
    month_names.forEach(function(value, index) {
        ret = json.forEach(function(value2, index2) {
            if ( value == value2.month ) {
                months.push( [value, parseFloat(value2.revenue)] );
                return false;
            }
            return true;
        });
        if ( ret === true )
            months.push( [value, 0] );
    });
    // console.log(months);

    var data = google.visualization.arrayToDataTable(months);

    var options = {
        /*title: 'Solar Projects Revenue',*/
        // curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('revenue'));
    chart.draw(data, options);
};
@endif
</script>
@endsection