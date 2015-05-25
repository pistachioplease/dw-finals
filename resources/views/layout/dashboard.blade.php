<!DOCTYPE html>
<html lang="en">

<head>

	

    @include('includes.head')

</head>

<body>

    <div id="wrapper">

    	@include('includes.nav')        

        @yield('content')

    </div>
    <!-- /#wrapper -->

    @include('includes.footer')

    @yield('script')  

</body>

</html>
