<head>
    @include('includes.admin.head')
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('includes.admin.header')
    <div class="app-main">
        @include('includes.admin.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>

        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('admin/js/script.js')}}"></script>
<div class="jvectormap-tip"></div>
</body>
</html>
