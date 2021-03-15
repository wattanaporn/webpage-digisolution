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
        <h1>Contact</h1>
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
              action="{{route('admin.contact.store')}}"
              method="post"
              autocomplete="off"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            {{--            @if($contact_main->id)--}}
            {{--                <input name="_method" type="hidden" value="PUT">--}}
            {{--            @endif--}}
            <input name="id" type="hidden" value="{{$contact_main->id}}">
            <input name="contact_id" type="hidden" value="{{$contact->id}}">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">meta title</label>
                <div class="col-sm-10">
                    <input type="text" name="meta_title" class="form-control" placeholder="title"
                           value="{{ $contact_main->meta_title ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">meta description</label>
                <div class="col-sm-10">
                    <input type="text" name="meta_description" class="form-control" placeholder="description"
                           value="{{$contact_main->meta_description ?:''}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">meta keyword</label>
                <div class="col-sm-10">
                    <input type="text" name="meta_keyword" class="form-control" placeholder="keyword"
                           value="{{$contact_main->meta_keyword ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">picture banner</label>
                <div class="col-sm-10 text-center">
                    <div id="block-upload-image">
                        <div id="upload-image"
                             style="display: {{isset($contact_main->path_img_banner)?'none':'block'}};text-align: center;">
                            <div style="margin-top: 80px"><img src="{{url('admin/img/icon/upload.png')}}">
                            </div>
                            <div style="font-size: 14px;line-height: 18px;color: #C8C7CC;padding-top: 15px">
                                วางไฟล์ตรงนี้
                                หรือเลือกไฟล์ (JPEG, PNG, BMP, GIF)
                            </div>
                            <input type="file" onchange="readURL(this);" id="imgupload" name="image"
                                   accept=".jpg, .jpeg, .png"
                                   style="display: none;width: auto;height: 100%">
                            <div style="padding-top: 15px">
                                <button type="button" class="btn OpenImgUpload">เลือกไฟล์</button>
                            </div>
                        </div>
                        <div>
                            <img id="showImage"
                                 src="{{url('/admin/contact/image/'.$contact_main->path_img_banner)}}"
                                 class="OpenImgUpload" title="อัพโหลดรูป"
                                 style="display: {{isset($contact_main->path_img_banner)?'inline-block':'none'}};width: 100%;min-height: 269px;max-height: 270px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">title</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title" name="title">{{$contact_main->title}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="address" name="address"
                              placeholder="address">{{$contact->address ?:'' }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">tell</label>
                <div class="col-sm-10">
                    <input type="text" name="tell" class="form-control" placeholder="tell"
                           value="{{$contact->tell ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="email"
                           value="{{$contact->email ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">ละติจูด</label>
                <div class="col-sm-10">
                    <input type="text" name="lat" class="form-control" placeholder="ละติจูด"
                           value="{{$contact->lat ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">ลองติจูด</label>
                <div class="col-sm-10">
                    <input type="text" name="long" class="form-control" placeholder="ลองติจูด"
                           value="{{$contact->long ?:'' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">facebook page</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="facebook_page"
                              name="facebook_page">{{$contact->facebook_page}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">picture logo</label>
                <div class="col-sm-10 text-center">
                    <div id="block-upload-image">
                        <div id="upload-image-icon"
                             style="display: {{isset($contact->path_logo)?'none':'block'}};text-align: center;">
                            <div style="margin-top: 80px"><img src="{{url('admin/img/icon/upload.png')}}">
                            </div>
                            <div style="font-size: 14px;line-height: 18px;color: #C8C7CC;padding-top: 15px">
                                วางไฟล์ตรงนี้
                                หรือเลือกไฟล์ (JPEG, PNG, BMP, GIF)
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
                                 src="{{url('/admin/contact/image-logo/'.$contact->path_logo)}}"
                                 class="OpenImgUploadIcon" title="อัพโหลดรูป"
                                 style="display: {{isset($contact->path_logo)?'inline-block':'none'}};width: 384px;min-height: 269px;max-height: 270px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-right">copyright</label>
                <div class="col-sm-10">
                    <input type="text" name="copyright" class="form-control" placeholder="copyright"
                           value="{{$contact->copyright ?:'' }}">
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
        $(document).ready(function () {
            task_editor();
        })

        function task_editor() {
            CKEDITOR.replace('title');
            CKEDITOR.replace('facebook_page');
        }


        $('.OpenImgUpload').click(function () {
            $('#imgupload').trigger('click')
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader()
                reader.onload = function (e) {
                    $('#upload-image').hide()
                    $('#showImage')
                        .attr('src', e.target.result)
                        .show()
                }
                reader.readAsDataURL(input.files[0])
            }
        }

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
