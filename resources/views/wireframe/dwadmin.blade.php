@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Warehouse Administration</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-primary">Optimize DB</a> <a href="#" class="btn btn-primary">Repair DB</a> <a href="#" class="btn btn-primary">Re-index DB</a> <a href="#" class="btn btn-primary">Diagnose DB</a>
            <br />
            <br />
        </div>
    </div> 
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info">
                <p>Data warehouse appears to be healthy and optimized.</p>
            </div>
        </div>
    </div>    
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
$(document).ready(function() {
});
</script>
@endsection