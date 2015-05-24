@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <div class="col-lg-12">
            <div class="alert alert-success">
                <h4>Welcome to SUNWorks Data Warehouse online reporting tool!</h4>
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
                    <div id="revenue"></div>
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
$(document).ready(function() {
    $('.reportrange span').html(moment("2014-01-01").format('MMMM D, YYYY') + ' - ' + moment("2014-12-31").format('MMMM D, YYYY'));
 
    $('.reportrange').daterangepicker({
        format: 'MM/DD/YYYY',        
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });
});
</script>
@endsection