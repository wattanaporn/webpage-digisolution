@extends('layout.app')
@push('css')
    <style>
        .sub-head {
            font-size: 30px;
        }

        #map {
            border-radius: 10px;
            height: 447px;
            filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, 0.25));
        }

        #contact > div {
            padding-bottom: 25px;
        }

        .contact-input {
            box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
        }

        .btn-sent {
            width: 124px;
            height: 40px;
            background: linear-gradient(114.56deg, #00A5E7 49.84%, rgba(0, 165, 231, 0) 108.73%), #007AE8;
            border-radius: 30px;
            color: white;
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <div>
            <img src="{{ URL::asset('/assets/images/banner.svg') }}" class="img-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                    <span class="head-contain-font font-weight-light mr-3">ติดต่อเรา</span>
                    <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <span class="font-weight-light sub-head">
                        CONTACT
                    </span>
                    <span class="font-weight-bold sub-head">
                        INFORMATION
                    </span>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 col-xl-6">
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ URL::asset('/assets/images/contact/contact-location.png') }}">
                        </div>
                        <div class="col-11">
                            <span class="txt-grey">199/445 ถนนเชียงใหม่-แม่โจ้ ตำบล หนองจ๊อม
                                อำเภอ สันทราย
                                จังหวัดเชียงใหม่ 50210</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1">
                            <img src="{{ URL::asset('/assets/images/contact/contact-tell.png') }}">
                        </div>
                        <div class="col-11">
                            <span class="txt-grey">(+66) 99 999 9999</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1">
                            <img src="{{ URL::asset('/assets/images/contact/contact-mail.png') }}">
                        </div>
                        <div class="col-11">
                            <span class="txt-grey">info@digisolution.com</span>
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col-12">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6" id="contact">
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control contact-input" type="text" name="full_name"
                                   placeholder="ชื่อ - นามสกุล">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control contact-input" type="text" name="tell" placeholder="เบอร์โทร">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control contact-input" type="text" name="email" placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control contact-input" type="text" name="subject"
                                   placeholder="เรื่องที่ติดต่อ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control contact-input" id="note" name="note" rows="4"
                                      placeholder="ข้อความ"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-md btn-sent">
                        SEND
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{config('app.google_map_key')}}&callback=initMap&libraries=&v=weekly"
        defer>
    </script>
    <script>
        function initMap() {
            const myLatLng = {
                lat: 18.8308,
                lng: 99.0167
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: myLatLng,
                fullscreenControl: true,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false
            });
            new google.maps.Marker({
                position: myLatLng, map,
                title: "Hello World!"
            });
        }
    </script>
@endpush


