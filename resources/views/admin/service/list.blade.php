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
                   href="{{route('admin.service-list.create')}}"
                >
                    add service
                </a>
            </div>
        </div>
        <div class="row pt-4">

            <div class="col-12">
                <table class="table stripe" id="service-list-table">
                    <thead>
                    <tr>
                        <th class="text_head_table">รูป</th>
                        <th class="text_head_table">หัวข้อ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $('#service-list-table').DataTable({
            processing: true,
            serverSide: true,
            searchDelay: 450,
            ajax: {
                url: '{{route('admin.service-list-items')}}',
            },
            language: {
                'lengthMenu': 'แสดง _MENU_ รายการ',
                'info': 'แสดงทั้งหมด _START_ ถึง _END_ จาก _TOTAL_ รายการ',
                'search': '',
                'paginate': {
                    'first': 'หน้าแรก',
                    'last': 'หน้าสุดท้าย',
                    'next': '>',
                    'previous': '<'
                },
                infoEmpty: 'แสดงทั้งหมด 0 รายการ',
                'emptyTable': 'ไม่พบข้อมูล',
                'zeroRecords': 'ไม่พบข้อมูล',
                'infoFiltered': '(ค้นหาจากทั้งหมด _MAX_ รายการ)'
            },
            pagingType: 'full_numbers',
            columnDefs: [
                // {
                //     'targets': 0,
                //     'width': '100px'
                // },
                // {
                //     'targets': 1,
                //     'width': '160px'
                // },
                // {
                //     'targets': 2,
                //     'width': '160px'
                // },
            ],
            order: [0, 'desc'],
            columns: [
                {data: 'path_img_banner', name: 'path_img_banner', orderable: false},
                {data: 'title', name: 'title', orderable: false},
                {
                    data: 'id',
                    name: 'id',
                    searchable: false,
                    orderable: false,
                    render: function (_, _, row) {
                        return '<a class=\'btn btn-primary\' href=\'' + ('{{route('admin.service-list.update',['service_list'=>':id'])}}').replace(':id', row.id) + '/edit' + '\'>แก้ไขข้อมูล</a>' +
                            ' <button class=\'btn btn-primary\' onclick="Delete(' + row.id + ')">ลบ</button>'
                    }
                }
            ]
        })
    </script>
@endpush
