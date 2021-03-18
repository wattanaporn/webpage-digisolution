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
            max-width: 320px;
            max-height: 203px;
        }

        .service-item {
            width: 320px;
            height: 203px;
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
            width: 30px;
        }

        .pagination.pagination-rounded-flat .page-item .page-link {
            border: none;
            border-radius: 50px
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
            @endif
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
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><span
                                                            aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span></a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#"
                                                                                data-abc="true">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><span
                                                            aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="tab-pane fade" id="_{{$list->id}}" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div id="box_{{$list->id}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><span
                                                            aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span></a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#"
                                                                                data-abc="true">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true">></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                                         data-abc="true"><span
                                                            aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
            loadDataClients({!! json_encode($server_list[0]->id) !!});
            auto();
        });

        function changTab(data) {
            loadDataClients(data)
        }

        function meta() {
            document.title = '{{$our_client->meta_title}}'
            document.getElementsByTagName('meta')["keywords"].content = '{{$our_client->meta_keyword}}';
            document.getElementsByTagName('meta')["description"].content = '{{$our_client->meta_description}}';
        }

        function loadDataClients(data_id) {
            $.ajax({
                url: '{!! route('our-clients-list') !!}' + '?tap=' + data_id,
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
                    '<div class="col-12 d-flex justify-content-center service-item">' +
                    '<img src="/clients-list/image/' + value.path_img_small + '" class="img-our">' +
                    '</div>' +
                    '<div class="col-12 pt-4 pb-5 text-center text-width">' +
                    '<span class="font-weight-bold">' + value.name + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
            });
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
    </script>
@endpush
