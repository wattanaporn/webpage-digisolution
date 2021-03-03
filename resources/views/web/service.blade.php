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
    </style>
@endpush('css')
@section('content')
    <div>
        <div>
            <img src="{{ URL::asset('/assets/images/banner.svg') }}" style="width: 100%">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                    <span class="head-contain-font font-weight-light mr-3">บริการของเรา</span>
                    <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
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
                            <span class="font-weight-bold">บริการดูแล Social Marketing และ Digital Media Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
    </script>
@endpush
