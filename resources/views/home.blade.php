<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/frame.css">

    <style>
        .event-cover{
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body onmousemove="hide_show(event)">
<!--------nav start-------->
<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="home"><img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre" /></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-nav-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li class="main-menu"><a href="tournament">TOURNAMENT</a></li>
                    <li class="main-menu"><a href="academy">ACADEMY</a></li>
                    <li class="main-menu"><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                    <li class="main-menu"><a href="price">PRICING</a></li>
                    <li class="dropdown main-menu">
                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" id="dropdown-show">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-show">
                            <li><a href="tournament">TOURNAMENT</a></li>
                            <li><a href="academy">ACADEMY</a></li>
                            <li><a href="coming_events">EVENT</a></li>
                            <li><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                            <li><a href="price">PRICING</a></li>
                            <li><a href="#" onclick="showBookWindow()">BOOKING</a></li>
                            <li><a href="contactus">CONTACT US</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="book_window">
    <form id="order-form" target="_self" class="form-horizontal" role="form" method="POST">
        <div id="form_container">
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div id="title_block" class="row">
                <div class="col-xs-10 vcenter">
                    <label>TOURNAMENT BOOKING</label>
                </div>
                <div class="col-xs-2 vcenter" style="text-align: right;padding: 0px;">
                    <a href="#" onClick="hideBookWindow();">
                        <i style="padding:0px;font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
            <div style="margin:20px 0px;">
                {{--left--}}
                <div id="datepicker_block">
                    <div class="form-group">
                        <input id="selected-date" name="selected-date" type="hidden" class="form-control"
                               value="<?php echo date('Y-m-d'); ?>">
                        <div id="datepicker"></div>
                    </div>

                    <div class="form-group">
                        <input id="selected_blocks" name="selected_blocks" type="text" class="form-control">
                        <div id="block_container">
                            <div id="blocks"></div>
                        </div>
                    </div>
                </div>
                {{--right--}}
                <div id="user_info_block">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12" style="text-align: center;margin-top: 10px;" >
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="hand" value="lefthand" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> LEFT HAND</span>
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="hand" value="righthand"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> RIGHT HAND</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top:20px;margin-bottom: 20px;font-size:13px;">
                        <div class="col-xs-12">
                            Please enter your name and contact detail to confirm the booking senssion.
                        </div>
                    </div>

                    <div class="form-group row">
                        <label name="name" class="col-xs-2 col-form-label">Name:</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" class="form-control transparent-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Phone:</label>
                        <div class="col-xs-10">
                            <input name="phone" type="text" class="form-control transparent-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Email:</label>
                        <div class="col-xs-10">
                            <input name="email" type="email" class="form-control transparent-input" aria-describedby="emailHelp">

                        </div>
                    </div>

                    <div>
                        <button style="margin-top:20px;float:right;font-size:15px;padding:10px 10px;" id="submit" type="submit" class="btnCustom gold-btn">REQUEST BOOKING</button>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>

    </form>
</div>

<!--------nav end-------->
<section class="cd-hero">
    <ul class="cb-slideshow">
        <li class="slide-item" ><span></span>
            <div id="div-video" class="bg">
                <video autoplay loop width="100%" height="auto" poster="static/images/polina.jpg" id="bgvid">
                    <!--<source src="static/images/polina.webm" type="video/webm">-->
                    <source src="static/images/polina.mp4" type="video/mp4">
                </video>
            </div>
        </li>

        <li class="slide-item"><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF</div>
                    <div class="white-text-big">TOURNAMENT</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">THE PERFECT SETUP FOR</div>
                    <div class="white-text-small">COMPETITIVE GOLF</div>
                    <div class="white-text-small">TUITION AND ENTERTAINMENT</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn">DETAILS</button>
                    <button type="button" class="btnCustom gold-btn">OTHER EVENT</button>
                </div>

                <div class="thumb event-block">
                    <a href="#"><img src="static/images/event-frame.png" class="img-responsive event-cover" item="" alt="Cinque Terre" /></a>
                </div>
            </div>
        </li>

        <li class="slide-item" ><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF</div>
                    <div class="white-text-big">ACADEMY</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">PGA PROFESSIONAL</div>
                    <div class="white-text-small">COACHING LESSION</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn">COURSES</button>
                </div>

                <div class="thumb event-block">
                    <a href="#"><img src="static/images/event-frame.png" class="img-responsive event-cover" item="" alt="Cinque Terre"/></a>
                </div>
            </div>
        </li>
        <li class="slide-item"><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF&</div>
                    <div class="white-text-big">COCKTAIL BAR</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">FULLY LICENSE & PROFESSIONAL BAR</div>
                    <div class="white-text-small">ALL GOLF RELATED COCKTAILS</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn" onClick="window.open('cockdetail.html')">DETAILS</button>
                    <button type="button" class="btnCustom gold-btn">BOOKING</button>
                </div>

                <div class="thumb event-block">
                    <a href="#"><img src="static/images/event-frame.png" class="img-responsive event-cover" item="" alt="Cinque Terre" /></a>
                </div>
            </div>
        </li>
    </ul>

</section>

<div id="control-icon">
    <span class="left" id="btn-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    <span class="right" id="btn-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
</div>


<!--------footer start-------->
<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick=""><i class="fa fa-phone" ></i>&nbsp;03 9600 0988</li>
            <li class="pointer"><i class="fa fa-map-marker"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-facebook-square"></i>
            </li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-tumblr-square"></i>
            </li>
        </ul>
    </div>
</div>
<!--------footer end-------->
<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script src="static/js/moment.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

<script src="static/js/main.js"></script>
<script src="static/js/book.js"></script>

<script>
    var timer;

    function show_control(){
        $('#control-icon span').css('visibility','visible');
    }

    function hide_control(){
        $('#control-icon span').css('visibility','hidden');
    }
    function hide_show(){
        show_control();
        clearTimeout(timer);
        timer = setTimeout(hide_control,2000);
    }
</script>

<script>

    $(document).ready(function () {

        getEvents();

    });

    function getEvents() {
        $.ajax({
            url: '/getAllAvailableEvents',
            method: 'GET',
            dataType: 'json',
            success: function (dta) {
                if (!dta) {
                    return;
                }

                var eventImageContainer = $('.event-cover');

                $.each(dta, function(i, o) {
                    if(i <= eventImageContainer.length){
                        eventImageContainer.eq(i).attr('src',o['cover']);
                        eventImageContainer.eq(i).parent('a').attr('href','coming_events?event=' + o['id']);
                    }else{
                        return false;
                    }
                });
            }

        });
    }


</script>

</body>
</html>