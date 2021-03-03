@extends('layout.app')
@push('css')
    <style>
        .some-class {
            background-image: url("/assets/images/about_us/bg-about.svg");
            min-height: 700px;
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <div>
            <img src="{{ URL::asset('/assets/images/banner.svg') }}" style="width: 100%">
        </div>
        <div class="some-class mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pt-5 mt-3">
                        <span class="head-contain-font font-weight-light mr-3">เกี่ยวกับเรา</span>
                        <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-12 pt-5 mt-5 ml-md-5">
                   <span>
                         เราให้บริการทางด้าน Technology และ Digital Innovation แบบครบวงจรให้แก่ลูกค้า
อาทิเช่น พัฒนาระบบ System Online, Website, Custom ERP System,
และ Digital Transformation Solution รวมถึง Digital Media และ Events ทั้ง Online และ Offline ทุกประเภท เพื่อให้สามารถ ตอบโจทย์
ตามความต้องการของลูกค้าทุกกลุ่มทุกประเภท

     พวกเราเป็นของคนรุ่นใหม่ที่ มุ่งเน้นการพัฒนาระบบซอฟท์แวร์ การออกแบบความรู้การตลาด
ออนไลน์ และบริการเว็บไซต์ครบวงจร เรามุ่งมั่น ค้นคว้า วิจัย เทคโนโลยีใหม่ๆ เพื่อพัฒนาบริการ
ของเราให้เกิดผลลัพธ์ที่ดีให้กับลูกค้า
                </span>
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
