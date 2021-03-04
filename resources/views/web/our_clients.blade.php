@extends('layout.app')
@push('css')
    <style>
        .text-width {
            width: 30px
        }

        .img-circle {
            border-radius: 50%;
            width: 158px;
            height: 158px;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
        }

        .img-our {
            width: 320px;
            height: 203px;
        }

        .slick-prev:before {
            content: "<" !important;
            color: red !important;
            font-size: 40px !important;
        }

        .slick-next:before {
            content: ">" !important;
            color: red !important;
            font-size: 40px !important;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link {
            border-top: #ffffff;
            border-left: #ffffff;
            border-right: #ffffff;
            padding-top: 10px;
            background: white;
            color: black;
            /*font-weight: bold;*/
        }

        .border-active-tab {
            border-bottom: 8px solid #007AE8;
            border-radius: 5px;
            width: 50px;
            position: absolute;
            margin-top: -4px;
        }

        .txt-bold {
            color: #777777;
            font-weight: bold;
        }

        /**, ::after, ::before {*/
        /*    box-sizing: border-box;*/
        /*    border-radius: 50px;*/
        /*}*/
        .page-link {
            border-radius: 50px;
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
            <div class="row autoplay d-flex justify-content-center pt-5 mt-3">
                <div class="col-auto px-5 d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/client/major.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5  d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/client/plan-b.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5  d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/client/spa.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5 d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/client/unii.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5 d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/client/sharp.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5 d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                         class="img-circle">
                </div>
                <div class="col-auto px-5 d-flex justify-content-center">
                    <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                         class="img-circle">
                </div>
            </div>

            <div class="container mt-5 pt-3">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item" onclick="tab1()">

                        <a class="nav-link nav-1" data-toggle="tab" href="#Website_Design">
                            <span class="txt-bold-nav-1 txt-grey">Website Design</span></a>

                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="border-active-tab tab1">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" onclick="tab2()">
                        <a class="nav-link" data-toggle="tab" href="#Application_Design">
                            <span class="txt-bold-nav-2 txt-grey">Application Design</span></a>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="border-active-tab tab2">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" onclick="tab3()">
                        <a class="nav-link" data-toggle="tab" href="#Online_Marketing">
                            <span class="txt-bold-nav-3 txt-grey">Online Marketing</span></a>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="border-active-tab tab3">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="Website_Design" class="tab-pane active">
                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-ct.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-ld.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Application_Design" class="container tab-pane fade">
                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-rd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Online_Marketing" class="container tab-pane fade">
                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                             class="img-our">
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><<</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">>></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>

        $(document).ready(function () {
            auto();
            tab1();
        });

        function auto() {
            $('.autoplay').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                draggable: true,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        infinite: true
                    }

                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        dots: true
                    }
                },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            dots: true
                        }

                    }]
            });
        }

        function tab1() {
            $('.tab1').show();
            $('.tab2').hide();
            $('.tab3').hide();
            $('.txt-bold-nav-1').addClass('txt-bold');
            $('.txt-bold-nav-2').removeClass('txt-bold');
            $('.txt-bold-nav-3').removeClass('txt-bold');
        }

        function tab2() {
            $('.tab1').hide();
            $('.tab2').show();
            $('.tab3').hide();
            $('.txt-bold-nav-1').removeClass('txt-bold');
            $('.txt-bold-nav-2').addClass('txt-bold');
            $('.txt-bold-nav-3').removeClass('txt-bold');

        }

        function tab3() {
            $('.tab1').hide();
            $('.tab2').hide();
            $('.tab3').show();
            $('.txt-bold-nav-1').removeClass('txt-bold');
            $('.txt-bold-nav-2').removeClass('txt-bold');
            $('.txt-bold-nav-3').addClass('txt-bold');
        }


    </script>
@endpush
