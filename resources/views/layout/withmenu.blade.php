@extends('layout.main')
@push('css')
    <style>
        body,
        html {
            background-color: #ECEFF3;
        }

        #main-content-title {
            height: 120px;
            box-shadow: 0px 1px 0px #E3E3E3;
            font-size: 18px;
            color: #3064C6;
            /*font-weight: bold;*/
            position: fixed;
            width: 100%;
            background: white;
            z-index: 10;
        }

        #main-content-body {
            padding-top: 122px;
            padding-bottom: 270px;
            transition: margin-left .3s;
        }

        #main-content-footer {
            box-shadow: 0px 1px 0px #E3E3E3;
            font-size: 14px;
            color: #3064C6;
            font-weight: bold;
            width: 100%;
            background: #FAFAFA;
            z-index: 10;
            padding-bottom: 20px;
        }

        #main-content-footer-copyright {
            padding: 5px;
            font-size: 13px;
            color: #3064C6;
            font-weight: bold;
            width: 100%;
            background: #FAFAFA;
            z-index: 10;
            border-top: 1px solid #E5E5E5;
        }
    </style>
@endpush
@section('content')
    <div>
        <div id="main-content-title">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <img src="{{ URL::asset('/images/logo_digiso.png') }}" class="logo ml-5">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavAltMarkup"
                                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-white" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-5">
                                <a class="nav-item nav-link mr-3" href="#">HOME</a>
                                <a class="nav-item nav-link mr-3" href="#">ABOUT</a>
                                <a class="nav-item nav-link mr-3" href="#">SERVICE</a>
                                <a class="nav-item nav-link mr-3" href="#">OUR CLIENTS</a>
                                <a class="nav-item nav-link mr-3" href="#">ARTICLE</a>
                                <a class="nav-item nav-link" href="#">CONTACT US</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div id="main-content-body">
            @yield('content')
        </div>
        <div id="main-content-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 pt-5 text-center">
                        <img src="{{ URL::asset('/images/logo_digiso.png') }}" class="logo-footer">
                    </div>
                    <div class="col-md-12 col-lg-4 pt-5">
                        <div class="row">
                            <div class="col-1">
                                <img src="{{ URL::asset('/images/location.png') }}">
                            </div>
                            <div class="col-11">
                            <span class="txt-grey">199/445 ถนนเชียงใหม่-แม่โจ้ ตำบล หนองจ๊อม
                                อำเภอ สันทราย
                                จังหวัดเชียงใหม่ 50210</span>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-1">
                                <img src="{{ URL::asset('/images/tell.png') }}">
                            </div>
                            <div class="col-11">
                                <span class="txt-grey">(+66) 99 999 9999</span>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-1">
                                <img src="{{ URL::asset('/images/mail.png') }}">
                            </div>
                            <div class="col-11">
                                <span class="txt-grey">info@digisolution.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mt-5 text-center">
                        <iframe name="f25ad4c358f9988" width="1000px" height="1000px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://web.facebook.com/v10.0/plugins/page.php?adapt_container_width=true&app_id=113869198637480&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3dfebeec5b486%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff3cf0a8a7239dfc%26relation%3Dparent.parent&container_width=735&hide_cover=false&href=https%3A%2F%2Fwww.facebook.com%2FDigisolutionofficial%2F&locale=th_TH&sdk=joey&show_facepile=true&small_header=false&tabs=timeline"
                                style="border: none; visibility: visible; width: 340px; height: 130px;"
                                class=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content-footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pt-2">
                    <span class="txt-grey">©copyright 2021
                        All Rights Reserved by digi solution co.,LTD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@overwrite
