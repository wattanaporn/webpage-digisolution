@extends('layout.app')
@push('css')
    <style>
        /*.circle {*/
        /*    border-radius: 50%;*/
        /*    width: 230px;*/
        /*    height: 278px;*/
        /*    background: #FFFFFF;*/
        /*    border: 3px solid #007AE8;*/
        /*    box-sizing: border-box;*/
        /*    box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);*/
        /*    padding: 5px;*/
        /*}*/

        .text-width {
            width: 50px
        }

        /*.img-circle {*/
        /*    border-radius: 50%;*/
        /*    width: 265px;*/
        /*    height: 265px;*/
        /*}*/

        .box-circle{
            border-radius: 50%;
            min-width: 278px !important;
            min-height: 278px !important;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
            border: 3px solid #007AE8;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img-circle {
            /*border-radius: 50%;*/
            max-width: 240px;
            max-height: 250px;

        }
    </style>
@endpush('css')
@section('content')
    <div>
        <img src="{{URL::asset('/assets/images/banner.svg')}}"
             style="display: {{isset($service->path_img_banner)?'none':'block'}}"
             class="img-banner">
        <div class="pb-5 box-banner" style="display: {{isset($service->path_img_banner)?'inline-block':'none'}}">
            <img src="{{url('/service/image/'.$service->path_img_banner)}}"
                 class="img-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                    @if($service->title)
                        {!! $service->title !!}
                    @else
                        <span class="head-contain-font font-weight-light mr-3">บริการของเรา</span>
                        <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
                    @endif
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-5">
                @if($service_list)
                    @foreach($service_list as $item)
                        <a href="{!! url('/service-list-detail') !!}/{{$item->id}}">
                            <div class="col-auto px-5">
                                <div class="row">
{{--                                    <div class="col-12 circle">--}}
{{--                                        <img src="{{url('/service/image-icon/'.$item->path_img)}}"--}}
{{--                                             class="img-circle">--}}
{{--                                    </div>--}}
                                    <div class="col-auto col-12 d-flex justify-content-center box-img-circle">
                                        <div class="box-circle">
                                            <img src="{{url('/service/image-icon/'.$item->path_img)}}"
                                                 class="img-circle">
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4 pb-5 text-center text-width">
                                        <span class="font-weight-bold" style="color: #000000">{{$item->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
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
                                <img src="{{ URL::asset('/assets/images/service/service-application.svg') }}"
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
@endsection
@push('js')
    <script>
        document.title = '{{$service->meta_title}}'
        document.getElementsByTagName('meta')["keywords"].content = '{{$service->meta_keyword}}';
        document.getElementsByTagName('meta')["description"].content = '{{$service->meta_description}}';
    </script>
@endpush
