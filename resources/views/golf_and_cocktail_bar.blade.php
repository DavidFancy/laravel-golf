<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/reset.css">
    {{--<link rel="stylesheet" href="static/css/style.css">--}}
    <link rel="stylesheet" href="static/css/frame.css">
    <link rel="stylesheet" href="static/css/jquery.jqzoom.css">
    <style>
        .casual_container {
            background: url("static/images/slider3.png") 0 0 no-repeat;
            filter: Alpha(opacity=20);
            opacity: 0.2;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
        }

        #fixed-frame {
            height: 80%;
            max-height: 80%;
            bottom: 40px;
            top: 10%;
            right: 17%;
            left: 13%;
            width: 70%;
            overFlow-x:hidden;
            overFlow-y:scroll;
            position: fixed;

        }

        #fixed-frame a {
            color: white;
            line-height: 30px;
            font-size: 12px;
        }

        ::-webkit-scrollbar {
            width:10px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border:1px solid #cfb154;
        }
        ::-webkit-scrollbar-thumb {
            background: #cfb154;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #cfb154;
        }

    </style>

    <style>
        #book_window{
            position: fixed; /* or absolute */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            display:none;
        }
        .ui-state-default {
            border: 0px !important;
            text-align: center;
        }

        .ui-datepicker td span, .ui-datepicker td a{
            padding:.5em;
            margin:.6em;
        }

        .ui-datepicker {
            width: 22em;
            /*background: transparent;*/
            color: #cfb154;
            margin:0 auto;
        }

        .ui-datepicker .ui-datepicker-calendar td span {
            text-align: center;
        }

        .ui-datepicker .ui-datepicker-calendar td {
            background: transparent;
        }

        .ui-datepicker .ui-datepicker-calendar td a {
            background: transparent;
            text-align: center;
            text-decoration: none;
            color: #cfb154;
        }

        .ui-state-disabled .ui-state-default {
            background: transparent;
            color: dimgray;
        }

        .ui-datepicker .ui-datepicker-calendar{
            margin-top: 10px;
        }

        .ui-datepicker-prev  {
            background-image: url("static/images/prev_arrow.png") !important;
            background-size: cover;
        }

        .ui-datepicker-next {
            background-image: url("static/images/next_arrow.png") !important;
            background-size: cover;
        }

        .ui-datepicker .ui-datepicker-calendar .ui-state-active {
            background: rgb(207, 177, 84);
            /* Fall-back for browsers that don't
                                               support rgba */
            background: rgba(207, 177, 84, .5);
            border-radius: 50%;
        }

        .ui-datepicker-header {
            background: #cfb053;
            color: black;
        }

        .ui-datepicker thead {
            font-weight: normal;
            background: rgba(207, 177, 84, .8);
        }

        .ui-datepicker th{
            color: black;
            font-weight: normal;
        }

        /* rest */

        ::-webkit-scrollbar {
            width:10px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            /*border:1px solid #cfb154;*/
            background-color: #41391d;
        }
        ::-webkit-scrollbar-thumb {
            background: #cfb154;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #cfb154;
        }

        #block_container{
            border-top:1px solid #cfb154;
            padding: 10px 5px;
        }

        #blocks{
            width:100%;
            max-width: 100%;
            height:100px;
            overFlow-x:hidden;
            overFlow-y:auto;
            font-size: 13px;
        }


        .block{
            display: inline-block;
            width: 45%;
            margin: 5px 2%;
            padding:5px 1%;
            text-align: center;
            color: #cfb154;
        }

        #blocks .selected{
            background: #cfb053;
            color:black;
        }

        #blocks .disable{
            background: transparent;
            color:gray;
        }

        #title_block{
            height:2.1em;
            line-height: 2.1em;
            margin:0px 20px;
            padding-left: 40px;
            border-bottom: 1px solid #cfb154;
            color: #cfb154;
            font-size: 20px;
        }

        #form_container{
            border:1px solid #cfb154;display: inline-block;background: black;
        }

        #datepicker_block{
            float:left;
            width:450px;
            padding: 0px 30px;
            border-right: 1px solid #cfb154;
        }

        #user_info_block{
            margin: 50px 20px;
            float:right;
            width:350px;
            color:#cfb154;
            font-weight: normal;

        }

        input.transparent-input{
            background-color:rgba(0,0,0,0) !important;
            border:none;
            border-bottom: 1px dashed #cfb154;
            color:white;
        }

        label.btn span {
            font-size: 1.5em ;
        }

        label input[type="radio"] ~ i.fa.fa-circle-o{
            color: #cfb154;    display: inline;
        }
        label input[type="radio"] ~ i.fa.fa-dot-circle-o{
            display: none;
        }
        label input[type="radio"]:checked ~ i.fa.fa-circle-o{
            display: none;
        }
        label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
            color: #cfb154;    display: inline;
        }
        label:hover input[type="radio"] ~ i.fa {
            color: #cfb154;
        }

        label input[type="checkbox"] ~ i.fa.fa-square-o{
            color: #cfb154;    display: inline;
        }
        label input[type="checkbox"] ~ i.fa.fa-check-square-o{
            display: none;
        }
        label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
            display: none;
        }
        label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
            color: #cfb154;    display: inline;
        }
        label:hover input[type="checkbox"] ~ i.fa {
            color: #cfb154;
        }

        div[data-toggle="buttons"] label.active{
            color: #cfb154;
        }

        div[data-toggle="buttons"] label {
            /*margin:0 auto;*/
            display: inline-block;
            padding: 6px 12px;
            /*margin-bottom: 0;*/
            font-size: 10px;
            font-weight: normal;
            line-height: 2em;
            text-align: left;
            white-space: nowrap;
            vertical-align: top;
            cursor: pointer;
            background-color: none;
            border: 0px solid
            #cfb154;
            border-radius: 3px;
            color: #cfb154;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        div[data-toggle="buttons"] label:hover {
            color: #cfb154;
        }

        div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .tooltip.top .tooltip-inner {
            background-color:#cfb154;
            color:black;
        }

        .tooltip.top .tooltip-arrow {
            border-top-color: #cfb154;
        }

        #selected_blocks {
            height:0px;
            padding:0px;
            visibility:hidden;
        }

        label.error {
            color: #a94442;
        }

        input.error {
            color: red;
        }

        #book_window{
            position: fixed; /* or absolute */
            width: 850px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            /*display:none;*/

        }

    </style>
</head>
<body style="background: black none;">
<!--------nav start-------->
<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="home"><img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre"/></a>
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

<div class="casual_container container-fluid">
</div>

<!--------nav end-------->
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

<div id="fixed-frame" class="container">
    <div>

        <a href="static/images/price_drink.jpg"><img src="static/images/price_drink.jpg" width="100%"></a>
        <a href="static/images/price_food.jpg"><img src="static/images/price_food.jpg" width="100%"></a>
        {{--<a><img src="static/images/price_food.jpg" style="max-width:100%; height:auto"></a>--}}
        <a href="#"><img src="static/images/cocktail_bar.png" style="max-width:100%; height:auto"></a>

    </div>

    <div style="margin:20px auto;text-align: center">
        <button id="bookBtn" type="button" class="btnCustom gold-btn"
                style="padding: 10px 20px;background: #cfb154;color: black;font-weight: normal" onclick="showBookWindow()">BOOKING</button>
    </div>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
{{--<script src="static/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="static/js/moment.min.js"></script>
<script src="static/js/jquery.jqzoom.js"></script>
<script src="static/js/book.js"></script>
<script>
    $(document).ready(function () {
        var options =
        {
            zoomWidth: 200, //放大镜的宽度
            zoomHeight: 200,//放大镜的高度
        };
        $(".jqzoom").jqzoom(options);
    });
</script>
</body>
</html>