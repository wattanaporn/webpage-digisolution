@extends('layout.app')
@push('css')
    <style>
        .wedo-pad-top {
            padding-top: 100px;
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
            color: #777777;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #FFFFFF !important;
            background: transparent;
            border-bottom: none;
            /*border-color: transparent;*/
        }

        /*.border-active-tab {*/
        /*    border-bottom: 8px solid #007AE8;*/
        /*    border-radius: 5px;*/
        /*    width: 50px;*/
        /*    position: absolute;*/
        /*    margin-top: -4px;*/
        /*}*/

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

        .service-item {
            width: 250px;
            height: 150px;
            display: flex;
            align-items: center;
        }

        .service-img {
            max-width: 250px;
            max-height: 150px;
        }

        .img-our {
            max-width: 320px;
            max-height: 203px;
        }

        .client-service-item {
            width: 320px;
            height: 203px;
            display: flex;
            align-items: center;
        }

        .banner-images {
            width: 100%;
            height: 480px;
            display: flex;
            align-items: center;
            background: black;
        }

        .img-slit {
            width: 100%;
            max-height: 480px;
        }

        /* Style the Image Used to Trigger the Modal */
        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 100; /* Sit on top */
            padding-top: 50px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            /*overflow: auto; !* Enable scroll if needed *!*/
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            overflow: hidden;
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            /*width: 80%;*/
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        .caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, .caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
@endpush('css')
@section('content')
    <div id="block-content">
        <section class="banner">
            @if($slide)
                <div class="banner-images">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($slide as $key=>$item)
                                @if($key == 0)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>
                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($slide as $key=>$item)
                                @if($key == 0)
                                    <div class="carousel-item active">
                                        <img src="{{url('/slide/image/'.$item->path_img)}}" class="img-slit">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{url('/slide/image/'.$item->path_img)}}" class="img-slit">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @else
                <div class="banner-images">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ URL::asset('/images/banner.jpg') }}" alt="" class="img-slit">
                            </div>
                            <div class="carousel-item">
                                <img src="{{URL::asset('/assets/images/banner.svg')}}"
                                     class="img-slit">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::asset('/images/banner.jpg') }}" alt="" class="img-slit">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @endif
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
            <div class="our-service-top">
                <div class="row pt-4">
                    <div class="col-12 text-center">
                        <span class="head-contain-font font-weight-light mr-3">OUR</span>
                        <span class="head-contain-font font-weight-bold">SERVICE</span>
                    </div>
                </div>
            </div>
            <div class="our-service-contain">
                <div class="container">
                    <div class="row pt-3">
                        {{--                    <div class="col-12 text-center">--}}
                        {{--                        <span class="head-contain-font font-weight-light mr-3">OUR</span>--}}
                        {{--                        <span class="head-contain-font font-weight-bold">SERVICE</span>--}}
                        {{--                    </div>--}}
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-center pt-5">
                                @if($service_list)
                                    @foreach($service_list as $item)
                                        <div class="col-auto px-5">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center service-item">
                                                    <img src="{{url('/service/image-icon/'.$item->path_img)}}"
                                                         class="service-img">
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

            <div class="our-service-bottom">
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
                        <div class="col-12 mt-5 pt-3">
                            @if($server_list)
                                <div class="container mt-5 pt-3 pb-5">
                                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                        @foreach($server_list as $key=>$list)
                                            @if($key === 0)
                                                <li class="nav-item" onclick="changTab({{$list->id}})">
                                                    <a class="nav-link active" id="{{$list->id}}" data-toggle="tab"
                                                       href="#_{{$list->id}}" role="tab"
                                                       aria-controls="home" aria-selected="true">{{$list->name}}</a>
                                                </li>
                                            @else
                                                <li class="nav-item" onclick="changTab({{$list->id}})">
                                                    <a class="nav-link" id="{{$list->id}}" data-toggle="tab"
                                                       href="#_{{$list->id}}"
                                                       role="tab"
                                                       aria-controls="home" aria-selected="true">{{$list->name}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        @foreach($server_list as $key=>$list)
                                            @if($key === 0)
                                                <div class="tab-pane fade show active" id="_{{$list->id}}"
                                                     role="tabpanel"
                                                     aria-labelledby="home-tab">
                                                    <div id="box_{{$list->id}}"></div>
                                                </div>
                                            @else
                                                <div class="tab-pane fade" id="_{{$list->id}}" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div id="box_{{$list->id}}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                           role="tab"
                                           aria-controls="home" aria-selected="true">Website Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                           role="tab"
                                           aria-controls="profile" aria-selected="false">Application Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                           role="tab"
                                           aria-controls="contact" aria-selected="false">Online Marketing</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                                            <div class="col-auto px-0">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-ct.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-ld.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
                                                            class="img-our">
                                                    </div>
                                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                                            <div class="col-auto px-0">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-lt.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-rd.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-rt.png') }}"
                                                            class="img-our">
                                                    </div>
                                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <div class="row pt-5 justify-content-sm-center justify-content-xl-start">
                                            <div class="col-auto px-0">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
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
                                                        <img
                                                            src="{{ URL::asset('/assets/images/client/our-client-img-cd.png') }}"
                                                            class="img-our">
                                                    </div>
                                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                                        <span class="font-weight-bold">บริษัท แพลน บี มีเดีย จำกัด (มหาชน) </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="logo-Client">
            <div class="container pt-5">
                @if($company_logo)
                    <div class="row autoplay d-flex justify-content-center pt-5 mt-3">
                        @foreach($company_logo as $item)
                            <div class="col-auto px-5 d-flex justify-content-center">
                                <img src="{{url('/company-logo-list/image/'.$item->path_img)}}"
                                     class="img-circle">
                            </div>
                        @endforeach
                    </div>
                @else
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
                @endif
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
            loadDataClients({!! json_encode($server_list[0]->id) !!});
        });

        function auto() {
            var items = 0;
            var item = '{{count($company_logo)}}'
            if (item < 5) {
                items = item
            } else {
                items = 5;
            }
            $('.autoplay').slick({
                slidesToShow: items,
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

        function changTab(data) {
            loadDataClients(data)
        }

        function loadDataClients(data_id) {
            $.ajax({
                url: '{!! route('home-our-clients-list') !!}' + '?tap=' + data_id,
                type: 'GET',
                processData: false,
                contentType: false,
                success: function (res) {
                    if (res.data) {
                        var div = $('<div ' + 'class="row pt-3 justify-content-sm-center justify-content-xl-start"' + '></div>')
                        div.html(GetDynamicBox(res.data))
                        $('#box_' + data_id).empty()
                        $('#box_' + data_id).append(div)
                    }
                }
            })
        }

        function GetDynamicBox(value) {
            var data = '';
            $.each(value, function (index, value) {
                data += '<div class="col-auto px-0 pt-5">' +
                    '<div class="row">' +
                    '<div class="col-12 d-flex justify-content-center service-item myImg" onclick="modalImg('+index+')">' +
                    '<img src="/clients-list/image/' + value.path_img_small + '" ' +
                    'class="img-our myImg" id="myImg' + index + '">' +
                    '</div>' +
                    '<div class="col-12 pt-4 pb-5 text-center text-width">' +
                    '<span class="font-weight-bold text-white">' + value.name + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div id="myModal' + index + '" class="modal">' +
                    '<span class="close" id="close' + index + '">&times;</span>' +
                    // '<img class="modal-content" id="img0' + index + '">' +
                    '<div class="row">' +
                    '<div class="col-12 d-flex justify-content-center service-item-full">' +
                    '<img class="" src="/clients-list/image/' + value.path_img_large + '" ' +
                    '<div id="caption' + index + '" class="caption"></div>' +
                    '</div>'+
                    '</div>'+
                    '</div>'
            });
            return data
        }

        function modalImg(value) {
            var modal = document.getElementById("myModal"+value);
            // var img = document.getElementById("myImg"+value);
            // var modalImg = document.getElementById("img0"+value);
            var captionText = document.getElementById("caption"+value);
            // img.onclick = function () {
            modal.style.display = "block";
            // modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            // }
            var span = document.getElementById("close"+value);
            span.onclick = function () {
                modal.style.display = "none";
            }
        }

    </script>
@endpush
