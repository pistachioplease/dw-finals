@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <div class="col-lg-12">
            <div class="alert alert-success">
                <h4>Welcome to SUNWorks Data Warehouse online reporting tool.</h4>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <!-- <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart"></div>
            </div> -->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-line-chart fa-fw"></i> Solar Projects Revenue
                    <div class="pull-right">
                        <div class="reportrange" class="pull-right" style="cursor: pointer; padding: 2px 10px; background: #fff; border-radius: 2px;color: #333;">
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @if ( isset($revenue) )
                    <div id="revenue"></div>
                    @endif
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart"></div>
            </div> -->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-location-arrow fa-fw"></i> Top Locations
                    <div class="pull-right">
                        <div class="reportrange" class="pull-right" style="cursor: pointer; padding: 2px 10px; background: #fff; border-radius: 2px;color: #333;">
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="locations"></div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <div class="col-lg-6">
            <!-- <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart"></div>
            </div> -->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-dollar fa-fw"></i> Top Sales Team
                    <div class="pull-right">
                        <div class="reportrange" class="pull-right" style="cursor: pointer; padding: 2px 10px; background: #fff; border-radius: 2px;color: #333;">
                            <span></span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="salesteam"></div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>  
    
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
var json;

$(document).ready(function() {
    $('.reportrange span').html(moment("2014-01-01").format('MMMM D, YYYY') + ' - ' + moment("2014-12-31").format('MMMM D, YYYY'));
 
    $('.reportrange').daterangepicker({
        format: 'MM/DD/YYYY',        
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
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

@if ( isset($location) )
// TOP LOCATIONS
google.load("visualization", "1", {packages:["geochart"]});
google.setOnLoadCallback(drawMarkersMap);

function drawMarkersMap() {
    json = {!! $location !!} ;

    var cities = [
        ['City', 'Projects'],
    ];

    json.forEach(function(value, index) {
        cities.push( [value.location, parseInt(value.total)] );
    });

    var data = google.visualization.arrayToDataTable(cities);

    var options = {
        region: 'US-CA',
        displayMode: 'markers',
        resolution: 'metros',
        magnifyingGlass: {enable: true, zoomFactor: 7.5},
        colorAxis: {colors: ['yellow', 'green']}
    };

    var chart = new google.visualization.GeoChart(document.getElementById('locations'));
    chart.draw(data, options);
};
@endif

@if ( isset($sales_team) )
// TOP SALES TEAM
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
    json = {!! $sales_team !!} ;

    var sales_team = [
        ['Sales Team', 'Sales'],
    ];
    json.forEach(function(value, index) {
        sales_team.push( [value.team_leader, parseInt(value.total)] );
    });

    var data = google.visualization.arrayToDataTable(sales_team);

    var options = {
        // title: 'Population of Largest U.S. Cities',
        // chartArea: {width: '50%'},    
        hAxis: {
            title: 'Total Sales',
            minValue: 0,
        },
        vAxis: {
            title: 'Sales Team'
        }
    };
    var chart = new google.visualization.BarChart(document.getElementById('salesteam'));
    chart.draw(data, options);
}

@endif
</script>
@endsection