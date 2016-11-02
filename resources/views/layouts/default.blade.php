<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/animation.css">
    <link rel="stylesheet" href="/static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="/static/css/bootstrap-theme.min.css">
</head>
<body>
<!--------nav start-------->
<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/static/images/logo.png" class="img-responsive" alt="Cinque Terre"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-nav-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">TOURNAMENT</a></li>
                    <li><a href="#">ACADEMY</a></li>
                    <li><a href="#">GOLF&COCKTAIL BAR</a></li>
                    <li class="dropdown">
                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" id="dropdown-show">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-show">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--------nav end-------->

<div id="main" class="row">
    @yield('content')
</div>

<!--------footer start-------->
<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick="window.open('contactus')"><i class="fa fa-map-marker"></i>&nbsp;03 9600
                0988
            </li>
            <li class="pointer"><i class="fa fa-phone"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-facebook-square"></i>
            </li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-tumblr-square"></i>
            </li>
            <li class="pointer icon hidden-lg hidden-md">
                <i class="fa fa-facebook-square"></i>&nbsp;&nbsp;
                <i class="fa fa-tumblr-square"></i>
            </li>
        </ul>
    </div>
</div>
<!--------footer end-------->

<script src="/static/js/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="/static/js/jquery-ui.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script type="/text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/static/js/moment.min.js"></script>

<script src="/static/js/vidbg.js"></script>
<script src="/static/js/slider.js"></script>

</body>
</html>