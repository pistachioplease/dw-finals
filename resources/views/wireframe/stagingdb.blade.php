@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Staging DB</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-primary">Load Transactional Data</a> <a href="#" class="btn btn-primary">Transform and Load to DW</a>
            <br />
            <br />
        </div>
    </div> 
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info">
                <p>Staging Database is healthy and optimized</p>
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