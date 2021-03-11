@extends('layout.admin_app')
@push('css')
    <style>
        .some-class {
            /*background-image: url("/assets/images/about_us/bg-about.svg");*/
            /*min-height: 700px;*/
            /*padding-top: 20px;*/
            /*width: 100%;*/
            /*background-position-x: calc(50% - 38px);;*/

            width: 100%;
            /* เดิม 816 px */
            height: 750px;
            background: url("/assets/images/about_us/bg-about.svg");
            background-position-x: calc(50% - 38px);
            /*background-position-y: calc(20% - 40px);*/
            /* z-index: 100; */
            /*position: relative;*/
        }

        .pad-top-about {
            padding-top: 80px;
        }

        .pad-top-txt-about {
            padding-top: 50px;
        }

        @media only screen and (max-width: 992px) {
            .div-logo-what-we-do {
                display: none;
            }
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <div class="pb-5">
            <img src="{{ URL::asset('/assets/images/banner.svg') }}" class="img-banner">
        </div>
        <div class="some-class">
            <div class="container">
                <div class="row pad-top-txt-about">
                    <div class="col-12 text-center">
                        <span class="head-contain-font font-weight-light mr-3">เกี่ยวกับเรา</span>
                        <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
                    </div>
                </div>
                <div class="row pad-top-about">
                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-12 pt-3">
                                <p class="txt-grey">
                                    เราให้บริการทางด้าน Technology และ Digital Innovation แบบครบวงจรให้แก่ลูกค้า
                                    อาทิเช่น พัฒนาระบบ System Online, Website, Custom ERP System,
                                    และ Digital Transformation Solution รวมถึง Digital Media และ Events ทั้ง Online และ
                                    Offline
                                    ทุกประเภท เพื่อให้สามารถ ตอบโจทย์
                                    ตามความต้องการของลูกค้าทุกกลุ่มทุกประเภท

                                    พวกเราเป็นของคนรุ่นใหม่ที่ มุ่งเน้นการพัฒนาระบบซอฟท์แวร์ การออกแบบความรู้การตลาด
                                    ออนไลน์ และบริการเว็บไซต์ครบวงจร เรามุ่งมั่น ค้นคว้า วิจัย เทคโนโลยีใหม่ๆ
                                    เพื่อพัฒนาบริการ
                                    ของเราให้เกิดผลลัพธ์ที่ดีให้กับลูกค้า
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 div-logo-what-we-do">
                        <img src="{{ URL::asset('/assets/images/about_us/com-about.png') }}"
                             class="pt-4">
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
