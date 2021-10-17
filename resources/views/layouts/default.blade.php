<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="wrapper" id="wrapper">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</div>


<script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/active.js')}}"></script>


</body>
</html>
