@extends('layout.app')
@push('css')
    <style>
        .bg-quotation {
            background: linear-gradient(180deg, #00A5E7 0%, rgba(0, 165, 231, 0) 100%), #007AE9;
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
            background: linear-gradient(92.53deg, rgba(0, 0, 0, 0.25) 5.98%, rgba(255, 255, 255, 0) 120.85%), #333333;
            border-radius: 30px;
            color: white;
        }
    </style>
@endpush('css')
@section('content')
    <div>
        <img src="{{URL::asset('/assets/images/banner.svg')}}"
             style="display: {{isset($service_list->path_img_banner)?'none':'block'}}"
             class="img-banner">
        <div class="pb-5 box-banner" style="display: {{isset($service_list->path_img_banner)?'inline-block':'none'}}">
            <img src="{{url('/service/image/'.$service_list->path_img_banner)}}"
                 class="img-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                    @if($service_list->title)
                        {!! $service_list->title !!}
                    @else
                        <span class="head-contain-font font-weight-light mr-3">บริการของเรา</span>
                        <span class="head-contain-font font-weight-bold">DIGI SOLUTION</span>
                    @endif
                </div>
            </div>
            <div class="pt-5 pb-3">
                {!! $service_list->content !!}
            </div>
        </div>
        <div class="pt-5 pb-3 bg-quotation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="contact">
                        <form class="form form-horizontal"
                              action="{{route('sent-budget')}}"
                              method="post"
                              autocomplete="off"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-xl-6 pb-3">
                                    <input class="form-control contact-input" type="text" name="full_name"
                                           placeholder="ชื่อ - นามสกุล">
                                </div>

                                <div class="col-md-12 col-xl-6 pb-3">
                                    <input class="form-control contact-input" type="text" name="company"
                                           placeholder="บริษัท/องกรค์">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xl-6 pb-3">
                                    <input class="form-control contact-input" type="text" name="tell"
                                           placeholder="เบอร์โทร">
                                </div>
                                <div class="col-md-12 col-xl-6 pb-3">
                                    <input class="form-control contact-input" type="text" name="email"
                                           placeholder="อีเมล">
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-12">
                                    <input class="form-control contact-input" type="text" name="budget"
                                           placeholder="งบประมาณ">
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-12">
                            <textarea class="form-control contact-input" id="note" name="note" rows="4"
                                      placeholder="รายละเอียดความต้องการ"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-md btn-sent">
                                        SEND
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        document.title = '{{$service_list->meta_title}}'
        document.getElementsByTagName('meta')["keywords"].content = '{{$service_list->meta_keyword}}';
        document.getElementsByTagName('meta')["description"].content = '{{$service_list->meta_description}}';
    </script>
@endpush
