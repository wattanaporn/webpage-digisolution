@extends('layout.app')
@push('css')
    <style>
        .wedo-pad-top {
            padding-top: 200px;
        }

        @media only screen and (max-width: 992px) {
            .div-logo-what-we-do {
                display: none;
            }
        }

        .img-logo-what-we-do {
            width: 400px;
            height: 312px;
        }

        .img-circle {
            border-radius: 50%;
            width: 158px;
            height: 158px;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
        }

        .text-width {
            width: 30px;
            word-break: break-all;
        }

        .img-our {
            width: 320px;
            height: 203px;
        }

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

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link {
            border-top: #ffffff;
            border-left: #ffffff;
            border-right: #ffffff;
            padding-top: 10px;
            /*background: white;*/
            color: black;
            /*font-weight: bold;*/
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #FFFFFF !important;
            background: transparent;
            border-color: transparent;
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

        .pagination,
        .jsgrid .jsgrid-pager {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem
        }

        .page-link {
            color: black
        }

        .pagination.pagination-rounded-flat .page-item {
            margin: 0 .25rem
        }

        .pagination-rounded-flat {
            margin: 0 .25rem
        }

        .pagination-success .page-item.active .page-link {
            background: #007AE8;
            border-color: #007AE8;
            color: white;
            width: 30px;
        }

        .pagination.pagination-rounded-flat .page-item .page-link {
            border: none;
            border-radius: 50px
        }

        .service-item{
            width: 250px;
            height: 150px;
            display: flex;
            align-items: center;
        }

        .service-img{
            max-width: 250px;
            max-height: 150px;
        }
    </style>
@endpush('css')
@section('content')
    <div id="block-content">
        <section class="banner">
            <div class="banner-images">
                <img src="{{ URL::asset('/images/banner.jpg') }}" alt="">
            </div>
        </section>

        <section class="what-wedo">
            <div class="container">
                <div class="row wedo-pad-top">
                    @if($contact->what_we_do)
                        <div class="col-lg-7 col-md-12">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <span class="head-contain-font font-weight-light mr-3">WHAT</span>
                                    <span class="head-contain-font font-weight-bold">WE DO</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {!! $contact->what_we_do !!}
                                </div>
                            </div>

                        </div>
                    @else
                        <div class="col-lg-7 col-md-12">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <span class="head-contain-font font-weight-light mr-3">WHAT</span>
                                    <span class="head-contain-font font-weight-bold">WE DO</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <p class="txt-grey">
                                        ให้บริการทางด้าน Technology และ Digital Innovation
                                        แบบครบวงจรให้แก่ลูกค้าอาทิเช่น
                                        พัฒนาระบบ System Online, Website, Custom ERP System, และ Digital
                                        Transformation Solution รวมถึง Digital Media และ Events ทั้ง Online และ Offline
                                        ทุกประเภท เพื่อให้สามารถ ตอบโจทย์ ตามความต้องการของลูกค้าทุกกลุ่มทุกประเภท
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 div-logo-what-we-do text-center">
                            <img src="{{ URL::asset('/assets/images/home/wedo-logo.svg') }}"
                                 class="ml-5 pt-3 img-logo-what-we-do">
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <div class="our-service">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 text-center">
                        <span class="head-contain-font font-weight-light mr-3">OUR</span>
                        <span class="head-contain-font font-weight-bold">SERVICE</span>
                    </div>
                    <div class="col-md-12">
                        <div class="row d-flex justify-content-center pt-5">
                            @if($service_list)
                                @foreach($service_list as $item)
                                    <div class="col-auto px-5">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center service-item">
                                                <img src="{{url('/service/image-icon/'.$item->path_img)}}" class="service-img">
                                            </div>
                                            <div class="col-12 pt-3 text-center text-width">
                                                <span class="font-weight-bold"
                                                      style="color: #000000">{{$item->name}}</span>
                                            </div>
                                            <div class="col-12 pt-2 pb-5 text-width">
                                                {!! $item->detail !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
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
                                <div class="col-auto px-5">
                                    <div class="row">
                                        <div class="col-12 circle">
                                            <img
                                                src="{{ URL::asset('/assets/images/service/service-application.svg') }}"
                                                class="img-circle">
                                        </div>
                                        <div class="col-12 pt-4 pb-5 text-center text-width">
                                            <span class="font-weight-bold">บริการทำแอปพลิเคชันทุกแพลตฟอร์ม</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto px-5">
                                    <div class="row">
                                        <div class="col-12 circle">
                                            <img src="{{ URL::asset('/assets/images/service/service-mobile.svg') }}"
                                                 class="img-circle">
                                        </div>
                                        <div class="col-12 pt-4 pb-5 text-center text-width">
                                <span
                                    class="font-weight-bold">บริการดูแล Social Marketing และ Digital Media Design</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="our-client">
            <div class="container">
                <div class="our-client-core">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="head-contain-font font-weight-light mr-3 text-white">OUR</span>
                            <span class="head-contain-font font-weight-bold text-white">CLIENT</span>
                        </div>
                        <div class="mt-5 pt-3">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item" onclick="tab1()">

                                    <a class="nav-link nav-1" data-toggle="tab" href="#Website_Design">
                                        <span class="txt-bold-nav-1 text-white">Website Design</span></a>

                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <div class="border-active-tab tab1">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" onclick="tab2()">
                                    <a class="nav-link" data-toggle="tab" href="#Application_Design">
                                        <span class="txt-bold-nav-2 text-white">Application Design</span></a>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <div class="border-active-tab tab2">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" onclick="tab3()">
                                    <a class="nav-link" data-toggle="tab" href="#Online_Marketing">
                                        <span class="txt-bold-nav-3 text-white">Online Marketing</span></a>
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
                                        <div class="col-auto">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-ct.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-ld.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
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
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-rd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span class="font-weight-bold text-white">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
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
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span
                                                        class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span
                                                        class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span
                                                        class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-0">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img
                                                        src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                        class="img-our">
                                                </div>
                                                <div class="col-12 pt-4 pb-5 text-center text-width">
                                                    <span
                                                        class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true"><span
                                                        aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true"><</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#"
                                                                            data-abc="true">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true">></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" data-abc="true"><span
                                                        aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="logo-Client">
            <div class="container pt-5">
                <div class="row autoplay d-flex justify-content-center pt-5 mt-5">
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
            </div>
        </section>

        <div class="knowledge-sharing">
            <div class="container">
                <div class="our-client-core">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="head-contain-font font-weight-light mr-3">KNOWLEDGE</span>
                            <span class="head-contain-font font-weight-bold">SHARING</span>
                        </div>
                        <div class="col-12 text-center pt-5">
                            CK
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
                slidesToShow: 4,
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
