@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ad-Hoc Query</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <textarea class="form-control" rows="6">SELECT 
    t.month, sum(amount)
FROM factSolarProjects AS f
JOIN dimTime AS t ON t.idtime = f.idtime
WHERE year = 2014
GROUP BY t.month;</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary pull-right" value="Query" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Result</h3>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jan</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Feb</td>
                        <td>32</td>
                    </tr>
                    <tr>
                        <td>Mar</td>
                        <td>578</td>
                    </tr>
                    <tr>
                        <td>Apr</td>
                        <td>685</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Jun</td>
                        <td>18</td>
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
    $('.dataTables').DataTable({
            responsive: true
    });
});
</script>
@endsection