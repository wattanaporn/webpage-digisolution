@extends('layout.admin_app')
@push('css')
    <style>
        #block-upload-image {
            min-height: 270px;
            line-height: 60px;
            border: 1px solid #d7d7d7
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <h1>{{$logo->id?"Edit client logo":"Create client logo"}}</h1>
        {{--        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">--}}
        {{--            <ol class="breadcrumb pt-0">--}}
        {{--                <li class="breadcrumb-item">--}}
        {{--                    <a href="#">Home</a>--}}
        {{--                </li>--}}
        {{--                <li class="breadcrumb-item">--}}
        {{--                    <a href="#">Library</a>--}}
        {{--                </li>--}}
        {{--                <li class="breadcrumb-item active" aria-current="page">Data</li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}
        <div class="separator mb-5">
        </div>
        <form class="form form-horizontal"
              action="{{$logo->id?route('admin.company-logo.update',['company_logo'=>$logo->id]):route('admin.company-logo.store')}}"
              method="post"
              autocomplete="off"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            @if($logo->id)
                <input name="_method" type="hidden" value="PUT">
            @endif
            <input name="id" type="hidden" value="{{$logo->id}}">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="name"
                           value="{{$logo->company_name ?:''}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">picture icon</label>
                <div class="col-sm-10 text-center">
                    <div id="block-upload-image">
                        <div id="upload-image-icon"
                             style="display: {{isset($logo->path_img)?'none':'block'}};text-align: center;">
                            <div style="margin-top: 80px"><img src="{{url('admin/img/icon/upload.png')}}">
                            </div>
                            <div style="font-size: 14px;line-height: 18px;color: #C8C7CC;padding-top: 15px">
                                วางไฟล์ตรงนี้
                                หรือเลือกไฟล์ (JPEG, PNG, BMP, GIF) ที่มีขนาดความสูงไม่เกิน 140px และความกว้างไม่เกิน 140px
                            </div>
                            <input type="file" onchange="readURLIcon(this);" id="imguploadicon" name="image_icon"
                                   accept=".jpg, .jpeg, .png"
                                   style="display: none;width: auto;height: 100%">
                            <div style="padding-top: 15px">
                                <button type="button" class="btn OpenImgUploadIcon">เลือกไฟล์</button>
                            </div>
                        </div>
                        <div>
                            <img id="showImageIcon"
                                 src="{{url('/admin/company-logo-list/image/'.$logo->path_img)}}"
                                 class="OpenImgUploadIcon" title="อัพโหลดรูป"
                                 style="display: {{isset($logo->path_img)?'inline-block':'none'}};width: 384px;min-height: 269px;max-height: 270px;">
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: right;">
                <button type="submit" class="btn btn-primary">ตกลง</button>
            </div>
        </form>
    </div>
@endsection
@push('js')
    {{--    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>--}}
    <script>
        $('.OpenImgUploadIcon').click(function () {
            $('#imguploadicon').trigger('click')
        })

        function readURLIcon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader()
                reader.onload = function (e) {
                    $('#upload-image-icon').hide()
                    $('#showImageIcon')
                        .attr('src', e.target.result)
                        .show()
                }
                reader.readAsDataURL(input.files[0])
            }
        }
    </script>
@endpush
