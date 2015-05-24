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
                    <div id="project-locations"></div>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Projects</th>
                        <th>% Projects</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Los Angeles</td>
                        <td>310</td>
                        <td>72%</td>
                    </tr>
                    <tr>
                        <td>San Francisco</td>
                        <td>75</td>
                        <td>15%</td>
                    </tr>
                    <tr>
                        <td>San Diego</td>
                        <td>50</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Bakersfield</td>
                        <td>20</td>
                        <td>4%</td>
                    </tr>
                    <tr>
                        <td>MacFarland</td>
                        <td>5</td>
                        <td>1%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });

    $('.reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
 
    $('.reportrange').daterangepicker({
        format: 'MM/DD/YYYY',        
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });
});
</script>
@endsection