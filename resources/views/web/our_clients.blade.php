@extends('layout.app')
@push('css')
    <style>
        .circle {
            border-radius: 50%;
            width: 230px;
            height: 278px;
            background: #FFFFFF;
            border: 3px solid #007AE8;
            box-sizing: border-box;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
        }

        .text-width {
            width: 50px
        }

        .img-circle {
            border-radius: 50%;
            width: 240px;
            height: 260px;
        }

        /*.slick-prev:before, .slick-next:before {*/
        /*    font-family: 'slick';*/
        /*    font-size: 50px !important;*/
        /*    line-height: 1;*/
        /*    opacity: .75;*/
        /*    color: gray !important;*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    content: '>';*/
        /*    !*background: rebeccapurple;*!*/
        /*}*/

        .slick-prev:before {
            content: "<" !important;
            color: #C4C4C4 !important;
            font-size: 40px !important;
        }

        .slick-next:before {
            content: ">" !important;
            color: #C4C4C4 !important;
            font-size: 40px !important;
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <div>
            <img src="{{ URL::asset('/assets/images/banner.svg') }}" class="sub-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                    <span class="head-contain-font font-weight-light mr-3">OUR</span>
                    <span class="head-contain-font font-weight-bold">CLIENT</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-5">
                <div class="col-auto px-5">
                    <div class="row">
                        <div class="col-12 circle">
                            <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                                 class="img-circle">
                        </div>
                        <div class="col-12 pt-4 pb-5 text-center text-width">
                            <span class="font-weight-bold ">บริการออกแบบเว็บไซต์ และระบบเฉพาะตามความต้องการ</span>
                        </div>
                    </div>
                </div>
            </div>

            <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="autoplay">

                <div class="circle">
                    <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                         class="img-circle">
                </div>
                <div class="circle">
                    <img src="{{ URL::asset('/assets/images/service/service-mobile.svg') }}"
                         class="img-circle">
                </div>
                <div class="circle">
                    <img src="{{ URL::asset('/assets/images/service/service-application.svg') }}"
                         class="img-circle">
                </div>
                <div><h3>4</h3></div>
                <div><h3>5</h3></div>
                <div><h3>6</h3></div>
            </div>


        </div>
    </div>
@endsection
@push('js')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    </script>
@endpush
