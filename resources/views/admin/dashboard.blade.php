@extends('layouts.admin')
{{--<div style="margin-top: 200px !important;">--}}
@section('content')

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adminassets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('adminassets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('adminassets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/icon/themify-icons/themify-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/css/jquery.mCustomScrollbar.css')}}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/css/style.css')}}">


    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-purple"></h4>
                                            <h6 class="text-muted m-b-0"></h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-bar-chart f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple">a
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Earning from sell books</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green"></h4>
                                            <h6 class="text-muted m-b-0">Register Users</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-file-text-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">All User of Website</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red"></h4>
                                            <h6 class="text-muted m-b-0">Completed Orders</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-calendar-check-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-red">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Orders Which are Dileverd</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-blue"></h4>
                                            <h6 class="text-muted m-b-0">Pending Order</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-hand-o-down f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-blue">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Pending Order For Admin Approve</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>


        <script type="text/javascript" src="{{asset('adminassets/js/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('adminassets/js/jquery-ui/jquery-ui.min.js ')}}"></script>
        <script type="text/javascript" src="{{asset('adminassets/js/popper.js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('adminassets/js/bootstrap/js/bootstrap.min.js')}} "></script>
        <script type="text/javascript" src="{{asset('adminassets/pages/widget/excanvas.js')}} "></script>
        <!-- waves js -->
        <script src="{{asset('adminassets/pages/waves/js/waves.min.js')}}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{asset('adminassets/js/jquery-slimscroll/jquery.slimscroll.js ')}}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{asset('adminassets/js/modernizr/modernizr.js')}} "></script>
        <!-- slimscroll js -->
        <script type="text/javascript" src="{{asset('adminassets/js/SmoothScroll.js')}}"></script>
        <script src="{{asset('adminassets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="{{asset('adminassets/js/chart.js/Chart.js')}}"></script>
        <!-- amchart js -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="{{asset('adminassets/pages/widget/amchart/gauge.js')}}"></script>
        <script src="{{asset('adminassets/pages/widget/amchart/serial.js')}}"></script>
        <script src="{{asset('adminassets/pages/widget/amchart/light.js')}}"></script>
        <script src="{{asset('adminassets/pages/widget/amchart/pie.min.js')}}"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <!-- menu js -->
        <script src="{{asset('adminassets/js/pcoded.min.js')}}"></script>
        <script src="{{asset('adminassets/js/vertical-layout.min.js')}} "></script>
        <!-- custom js -->
        <script type="text/javascript" src="{{asset('adminassets/pages/dashboard/custom-dashboard.js')}}"></script>
        <script type="text/javascript" src="{{asset('adminassets/js/script.js')}} "></script>

@stop





