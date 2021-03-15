@extends('layout.main')
@push('css')
    <style>
        #main-content-title {
            height: 120px;
            box-shadow: 0px 1px 0px #E3E3E3;
            font-size: 16px;
            color: #3064C6;
            position: fixed;
            width: 100%;
            background: white;
            z-index: 10;
        }

        #main-content-body {
            padding-top: 122px;
            background: white;
            s /*padding-bottom: 270px;*/
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
    <div id="main-content-title">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div id="logo">
                </div>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                </div>
                <div class="collapse navbar-collapse bg-white" id="navbarNavAltMarkup">
                    <div class="navbar-nav px-2 pt-2">
                        <a class="nav-item nav-link mr-4" href="{{route('web')}}">Home</a>
                        <a class="nav-item nav-link mr-4" href="{{route('about-us')}}">ABOUT</a>
                        <a class="nav-item nav-link mr-4" href="{{route('service')}}">SERVICE</a>
                        <a class="nav-item nav-link mr-4" href="{{route('our-clients')}}">OUR CLIENTS</a>
                        <a class="nav-item nav-link mr-4" href="#">ARTICLE</a>
                        <a class="nav-item nav-link" href="{{route('contact')}}"> CONTACT US</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="main-content-body">
        @yield('content')
    </div>
    <div id="main-content-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 pt-5 text-center">
                    <div id="logo_footer">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 pt-5">
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ URL::asset('/images/location.png') }}">
                        </div>
                        <div class="col-11">
                            <span id="address" class="txt-grey">199/445 ถนนเชียงใหม่-แม่โจ้ ตำบล หนองจ๊อม
                                อำเภอ สันทราย
                                จังหวัดเชียงใหม่ 50210</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1">
                            <img src="{{ URL::asset('/images/tell.png') }}">
                        </div>
                        <div class="col-11">
                            <span id="tell" class="txt-grey">(+66) 99 999 9999</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1">
                            <img src="{{ URL::asset('/images/mail.png') }}">
                        </div>
                        <div class="col-11">
                            <span id="email" class="txt-grey">info@digisolution.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mt-5 text-center">
                    <div id="facebook_page">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-content-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-2">
                    <span id="copyright" class="txt-grey"></span>
                </div>
            </div>
        </div>
    </div>
@overwrite

@push('js')
    <script>
        $(document).ready(function () {
            loadData();
        });

        function loadData() {
            $.ajax({
                url: '{!! route('contact-footer') !!}',
                type: 'GET',
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res.data)
                    if (res.data) {
                        if (res.data.copyright) {
                            $('#copyright').text(res.data.copyright);
                        } else {
                            $('#copyright').text('©copyright 2021 All Rights Reserved by digi solution co.,LTD');
                        }
                        $('#address').text(res.data.address);
                        $('#tell').text(res.data.tell);
                        $('#email').text(res.data.email);
                        appendDiv(res.data.facebook_page);
                        logo(res.data.path_logo);
                    }
                }
            })
        }

        function appendDiv(data) {
            if (data) {
                $('#facebook_page').html(data)
            } else {
                $('#facebook_page').html(`<iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDigisolutionofficial%2F&tabs=timeline&width=350&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1066555983401141"
                            width="350" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>`)
            }
        }

        function logo(data_img) {
            if (data_img) {
                $('#logo_footer').html(`<img src="/contact/image-logo/${data_img}" class="logo-footer">`)
                $('#logo').html(`<img src="/contact/image-logo/${data_img}" class="logo">`)
            } else {
                $('#logo_footer').html(`<img src="{{ URL::asset('/images/logo_digiso.png') }}" class="logo-footer">`)
                $('#logo').html(`<img src="{{ URL::asset('/images/logo_digiso.png') }}" class="logo">`)
            }
        }

    </script>
@endpush
