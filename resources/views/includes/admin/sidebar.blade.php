<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    #dd a{
        color: #818181;
        text-decoration: none;

    }
</style>


<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                </button>
            </div>
        </div>
    </div>


    <div style="background: #111;" class="scrollbar-sidebar ps">
        <div class="app-sidebar__inner">
            <ul id="dd" class="vertical-nav-menu metismenu">


                {{--  ADMIN LINKS  --}}

                    <li class="app-sidebar__heading" style="font-size: 20px; color: #e59285;" >Admin Components</li>



                    <li style="margin-bottom: 15px;">
                        <a style="margin-top: 15px; font-size: 20px;" href="#">
                            <i class="glyphicon glyphicon-tasks"></i>
                            Categories

                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a style="font-size: 15px; margin-bottom: 2px;" href="{{route('admin.category.index')}}">
                                    <i class="metismenu-icon"></i>
                                    All Category
                                </a>
                            </li>
                            <li>
                                <a style="font-size: 15px; margin-bottom: 2px;" href="{{route('admin.category.create')}}">
                                    <i class="metismenu-icon">
                                    </i>Create Category
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li style="margin-bottom: 15px;">
                        <a style="margin-top: 15px; font-size: 20px;" href="#">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            Products
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a style="font-size: 15px; margin-bottom: 2px;" href="{{route('admin.product.index')}}">
                                    <i class="metismenu-icon"></i>
                                    All Products
                                </a>
                            </li>
                            <li>
                                <a  style="font-size: 15px; margin-bottom: 2px;" href="{{route('admin.product.create')}}">
                                    <i class="metismenu-icon">
                                    </i>Create Products
                                </a>
                            </li>
                        </ul>
                    </li>



                {{--END ADMIN LINKS--}}

            </ul>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
</div>
