@extends('layout.admin_app')
@push('css')
    <style>
    </style>
@endpush('css')
@section('content')
    <div>
        <h1>Service list</h1>
        <div class="separator mb-5">
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary"
                   href="{{route('admin.service-list-create')}}"
                >
                    add service
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            </div>
        </div>

    </div>
@endsection
@push('js')
    <script>

    </script>
@endpush
