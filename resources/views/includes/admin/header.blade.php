

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>


    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }
    .btn:hover{
        background: #FFFFFF;
    }


</style>

<div  style="background: #3c3c3c;"  class="app-header header-shadow">
    <div class="app-header__logo">

    </div>

    <button  class="btn"><a href=""class="glyphicon glyphicon-home" style="font-size:30px; text-decoration: none; color: #e59285; "></a></button>

    <div  style="margin-left:60%; " class="input-container d-inline-flex">
        <div class="dropdown">
            <span  style="background-color: #e59285;color: white;padding: 16px;font-size: 16px;cursor: pointer;"   class="glyphicon glyphicon-user"></span>
            <div class="dropdown-content">
                <a href="">My Account</a>
                <span>

                                                    <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="btn btn-secondary" id="log" type="submit">Logout</button>
                                        </form>
                                                    </span>

            </div>
        </div>
    </div>





</div>











