@extends('layout.app')
@push('css')
    <style>
        .text-width {
            width: 30px
        }

        .box-img-circle {
            display: flex;
            align-items: center;

        }

        .box-circle {
            border-radius: 50%;
            min-width: 156px !important;
            min-height: 156px !important;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img-circle {
            /*border-radius: 50%;*/
            max-width: 145px;
            max-height: 158px;

        }

        .img-our {
            max-width: 320px;
            max-height: 203px;

        }

        .service-item {
            width: 370px;
            height: 203px;
            display: flex;
            align-items: center;
        }

        .service-item-full {
            /*width: 320px;*/
            /*height: 203px;*/
            display: flex;
            align-items: center;
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

        .nav-tabs .nav-link {
            color: #777777;
        }

        .nav-tabs .nav-link.active {
            font-weight: bold;
            color: black;
        }

        /*.border-active-tab {*/
        /*    border-bottom: 8px solid #007AE8;*/
        /*    border-radius: 5px;*/
        /*    width: 50px;*/
        /*    position: absolute;*/
        /*    margin-top: -4px;*/
        /*}*/


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
            text-align: center;
            width: 35px;
        }

        .pagination.pagination-rounded-flat .page-item .page-link {
            border: none;
            border-radius: 50px
        }


        /* Style the Image Used to Trigger the Modal */
        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 100; /* Sit on top */
            padding-top: 200px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            /*overflow: auto; !* Enable scroll if needed *!*/
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
            overflow: hidden;
        }

        .modal.img-show[style="display: block;"] {
            padding: 0;
            display: flex !important;
            align-items: center;
            justify-content: center;
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
            padding: 10px;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, .caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
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
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

    </style>
@endpush('css')
@section('content')
    <div>
        <img src="{{URL::asset('/assets/images/banner.svg')}}"
             style="display: {{isset($our_client->path_img_banner)?'none':'block'}}"
             class="img-banner">
        <div class="pb-5 box-banner" style="display: {{isset($our_client->path_img_banner)?'inline-block':'none'}}">
            <img src="{{url('/our-clients/image/'.$our_client->path_img_banner)}}"
                 class="img-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center head-title pt-5">
                    @if($our_client->title)
                        {!! $our_client->title !!}
                    @else
                        <span class="head-contain-font font-weight-light mr-3">OUR</span>
                        <span class="head-contain-font font-weight-bold">CLIENT</span>
                    @endif
                </div>
            </div>
            @if(count($company_logo)>0)
                <div class="row autoplay d-flex justify-content-center pt-5 mt-3 pb-5">
                    @foreach($company_logo as $item)
                        <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                            <div class="box-circle">
                                <img src="{{url('/company-logo-list/image/'.$item->path_img)}}"
                                     class="img-circle">
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row autoplay2 d-flex justify-content-center pt-5 mt-3 pb-5">
                    <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/client/major.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5  d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/client/plan-b.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5  d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/client/spa.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/client/unii.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/client/sharp.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                    <div class="col-auto px-5 d-flex justify-content-center box-img-circle">
                        <div class="box-circle">
                            <img src="{{ URL::asset('/assets/images/service/service-web.svg') }}"
                                 class="img-circle">
                        </div>
                    </div>
                </div>
            @endif
            @if(count($server_list)>0)
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
                                    <a class="nav-link" id="{{$list->id}}" data-toggle="tab" href="#_{{$list->id}}"
                                       role="tab"
                                       aria-controls="home" aria-selected="true">{{$list->name}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach($server_list as $key=>$list)
                            @if($key === 0)
                                <div class="tab-pane fade show active" id="_{{$list->id}}" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div id="box_{{$list->id}}"></div>
                                    <div id="pagging_{{$list->id}}"></div>
                                </div>
                            @else
                                <div class="tab-pane fade" id="_{{$list->id}}" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div id="box_{{$list->id}}">
                                    </div>
                                    <div id="pagging_{{$list->id}}"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else
                <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Website Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Application Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">Online Marketing</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTab2Content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
                </div>
            @endif
        </div>
    </div>
@endsection
@push('js')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            meta();
            // pagination(1, 0, 0)
            {{--loadDataClients({!! json_encode($server_list[0]->id) !!}, 0);--}}
            {{--loadDataClientsTap({!! json_encode($server_list[0]->id) !!});--}}
            {{--loadDataClients('{{$server_list_id}}', 0)--}}
            loadDataClientsTap('{{$server_list_id}}')
            loadDataClients('{{$server_list_id}}',0)
            auto();
            autoImg();

        });

        function changTab(data) {
            loadDataClients(data, 0)
            loadDataClientsTap(data)
        }

        function meta() {
            document.title = '{{$our_client->meta_title}}'
            document.getElementsByTagName('meta')["keywords"].content = '{{$our_client->meta_keyword}}';
            document.getElementsByTagName('meta')["description"].content = '{{$our_client->meta_description}}';
        }

        function pagination(data_id, page, p_count) {
            for (var i = 0; i <= p_count; i++) {
                $('.acti_' + i).removeClass('active');
            }
            $('.acti_' + (page + 1)).toggleClass('active')
            loadDataClients(data_id, page)
        }

        function loadDataClients(data_id, page) {
            $.ajax({
                url: '{!! route('our-clients-list') !!}' + '?tap=' + data_id + '&page=' + page + '&per_page=9',
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
                data += '<div class="col-auto px-0">' +
                    '<div class="row">' +
                    '<div class="col-12 d-flex justify-content-center service-item myImg" onclick="modalImg(' + index + ')">' +
                    '<img src="/clients-list/image/' + value.path_img_small + '" ' +
                    'class="img-our myImg" id="myImg' + index + '">' +
                    '</div>' +
                    '<div class="col-12 pt-4 pb-5 text-center text-width">' +
                    '<span class="font-weight-bold">' + value.name + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div id="myModal' + index + '" class="modal img-show">' +
                    '<span class="close" id="close' + index + '">&times;</span>' +
                    // '<img class="modal-content" id="img0' + index + '">' +
                    '<div class="row">' +
                    '<div class="col-12 d-flex justify-content-center service-item-full">' +
                    '<img class="" src="/clients-list/image/' + value.path_img_large + '" ' +
                    '<div id="caption' + index + '" class="caption"></div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
            });
            return data
        }

        function loadDataClientsTap(data_id) {
            $.ajax({
                url: '{!! route('our-clients-list-tap') !!}' + '?tap=' + data_id,
                type: 'GET',
                processData: false,
                contentType: false,
                success: function (res) {
                    if (res.data) {
                        var div_page = $('<div></div>')
                        div_page.html(GetDynamicPage(res.data, data_id))
                        $('#pagging_' + data_id).empty()
                        $('#pagging_' + data_id).append(div_page)
                        pagination(1, 0, 0)
                    }
                }
            })
        }

        function GetDynamicPage(page, tab) {
            var per_page = Math.round(parseInt(page / 9)) + 1;
            console.log('page', page)
            console.log('per', per_page)

            if (per_page <= 1) {
                return
            }
            var data = '';

            data = ' <div class="row">' +
                '<div class="col-12 d-flex justify-content-end">' +
                '<ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">' +
                '<li class="page-item" onclick="pagination(' + tab + ',0,' + per_page + ')">' +
                '<a class="page-link" data-abc="true">' +
                '<span aria-hidden="true">&laquo;</span>' +
                '<span class="sr-only">Previous</span></a>' +
                '</li>'

            for (var i = 0; i < per_page; i++) {
                data += '<li class="page-item acti_' + (i + 1) + '"' +
                    'onclick="pagination(' + tab + ',' + i + ' ,' + per_page + ')">' +
                    '<a class="page-link" data-abc="true">' + (i + 1) + '</a>' +
                    '</li>'
            }
            data += '<li class="page-item"' +
                'onclick="pagination(' + tab + ',' + (per_page - 1) + ',' + per_page + ')">' +
                '<a class="page-link" data-abc="true">' +
                '<span aria-hidden="true">&raquo;</span>' +
                '<span class="sr-only">Next</span></a>' +
                '</li>' +
                '</ul>' +
                '</div>' +
                '</div>'

            return data
        }

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

        function autoImg() {
            $('.autoplay2').slick({
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

        function modalImg(value) {
            var modal = document.getElementById("myModal" + value);
            // var img = document.getElementById("myImg"+value);
            // var modalImg = document.getElementById("img0"+value);
            var captionText = document.getElementById("caption" + value);
            // img.onclick = function () {
            modal.style.display = "block";
            // modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            // }
            var span = document.getElementById("close" + value);
            span.onclick = function () {
                modal.style.display = "none";
            }
        }
    </script>
@endpush
