@extends('layouts.default')

@section('content')
    <style>
        .casual_container {
            background: url("static/images/pricing_bg.jpg") no-repeat center;
            filter: Alpha(opacity=20);
            opacity: 1;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
        }


        #fixed-frame {
            height: 70%;
            max-height: 70%;
            bottom: 40px;
            top: 16%;
            right: 15%;
            left: 10%;
            width: 80%;
            overFlow-x:hidden;
            overFlow-y:auto;
            position: fixed;

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
        .golf-info{
            color: #cfb154;
            font-size: 1.0em;
            padding-top: 20px;
        }
        .golf-info p{
            margin:15px;
        }

        .golf-info span{
            margin-left: 10px;
        }
    </style>

    <div class="casual_container container-fluid">
    </div>

    <div id="fixed-frame" class="container" style="text-align: center">

        <div style="display:table;margin:0 auto;">
            <img src="static/images/pricing.png" style="max-width:100%; height:auto">
            <div class="golf-info row" style="margin-left:30%;width: 70%;">
                <div class="col-xs-4 .col-sm-4 .col-lg-4" style="text-align: left">
                    <p class="pointer icon hidden-xs hidden-sm">
                        <i class="fa fa-facebook-square"></i>
                        <span>golfplus.city</span>
                    </p>
                    <p class="pointer icon hidden-xs hidden-sm">
                        <i class="fa fa-tumblr-square"></i>
                        <span>@golfplus280</span>
                    </p>
                    <p class="pointer icon hidden-xs hidden-sm">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>golfplus280</span>
                    </p>
                </div>
                <div class="col-xs-8 .col-sm-8 .col-lg-8" style="text-align: right;font-size: 0.875em;">
                    <p class="text-uppercase">more information contact to:</p>
                    <p>03 9600 0988</p>
                    <p>www.golfplus.net.au</p>
                    <p>info@golfplus.net.au</p>
                </div>
            </div>
        </div>



    </div>
@stop
