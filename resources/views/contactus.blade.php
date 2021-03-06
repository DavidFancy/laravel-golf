@extends('layouts.default')
@section('title', 'Contact Us')
@section('content')

    <style>
        body {
            background-image: url("../static/images/map-bg.jpg");
        }
        #header {
            border-bottom: 1px solid #cfb154;
        }

        #footer2 {
            border-top: 1px solid #cfb154;
        }
    </style>

    <div class="container-fluid contactus">
        <div id="info-container">
            <div style="height: 100%">
                <img id="map-img" src="static/images/map.jpg"/>
            </div>
            <div id="info-block" style="width:100%;text-align: left;position: relative;">
                <div id="text-info-block" style="color: white;">
                    <!--left -->
                    <div class="one-line" style="font-weight: bold;font-size: 11px;">
                        <div>
                            <div class="one-line icon-block"><i class="fa fa-map-marker"></i></div>
                            <div class="one-line">280 KING STREET, MELBOURNE, VIC 3000</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">
                                <button type="button" style="cursor:" class="btnCustom info-btn">TRADING HOUR</button>
                            </div>
                        </div>

                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">12:00PM - 9:00PM&nbsp;&nbsp;MON.TO WED.</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">12:00PM - LATE&nbsp;&nbsp;THU.TO SAT.</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">BOOKING ONLY&nbsp;&nbsp;SUN.</div>
                        </div>

                    </div>

                    <!--right-->
                    <div class="one-line" style="margin-left:10px;padding-left:20px;border-left: 1px solid white; vertical-align: top;">
                        <div>
                            <div class="one-line icon-block">
                                <i class="fa fa-bus" aria-hidden="true"></i>
                            </div>
                            <div class="one-line">
                                <div style="margin-top:-2px;">
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop2</button>
                                    <span style="margin-left: 5px;">King Street</span>
                                    <span style="margin-left: 5px;">Trams: 12/30/35/109</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop3</button>
                                    <span style="margin-left: 5px;">William Street</span>
                                    <span style="margin-left: 5px;">Trams: 12/30/35/109</span>
                                </div>

                                <div style="margin-top:5px;">
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop4</button>
                                    <span style="margin-left: 5px;">Lonsdale Street</span>
                                    <span style="margin-left: 5px;">Trams: 55</span>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top:5px;">
                            <div class="one-line icon-block"><i class="fa fa-subway" aria-hidden="true"></i></div>
                            <div class="one-line">Flagstaff Station</div>
                        </div>
                        <div style="margin-top:5px;">
                            <div class="one-line icon-block"><i class="fa fa-product-hunt" aria-hidden="true"></i></div>
                            <div class="one-line" style="margin-top:-1px;">
                                <div style="margin-top: 3px">Flagstaff Parking</div>
                                <div style="margin-top: 3px">56 Healeys Ln, Melbourne, VIC 3000</div>
                            </div>
                        </div>
                    </div>

                    <div id="right-btn-block"  class="one-line" style="position:absolute;right:0px; top:0px;">
                        <button type="button" class="quick-enquiry-btn btnCustom info-btn" value="contact_us" onclick="showEnquiryWindow()">QUICK ENQUIRY</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

@stop
