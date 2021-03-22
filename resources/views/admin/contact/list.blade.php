@extends('layout.admin_app')
@push('css')
    <style>
    </style>
@endpush('css')
@section('content')
    <div>
        <h1>ข้อมูลผู้ติดต่อ</h1>
        <div class="separator mb-5">
        </div>
        {{--        <div class="row">--}}
        {{--            <div class="col-12">--}}
        {{--                <a class="btn btn-primary"--}}
        {{--                   href="{{route('admin.service-list.create')}}"--}}
        {{--                >--}}
        {{--                    add service--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row pt-4">

            <div class="col-12">
                <table class="table stripe" id="service-list-table">
                    <thead>
                    <tr>
                        <th class="text_head_table">ชื่อ-สกุล</th>
                        <th class="text_head_table">เบอร์โทร</th>
                        <th class="text_head_table">อีเมล</th>
                        <th class="text_head_table">เรื่อง</th>
                        <th class="text_head_table">รายละเอียด</th>
                        {{--                        <th></th>--}}
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
        var formData = new FormData()

        $('#service-list-table').DataTable({
            processing: true,
            serverSide: true,
            searchDelay: 450,
            ajax: {
                url: '{{route('admin.contact-list')}}',
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
                {
                    'targets': 0,
                    'width': '100px'
                },

                {
                    'targets': 2,
                    'width': '160px'
                },
            ],
            order: [0, 'desc'],
            columns: [
                {data: 'full_name', name: 'full_name', orderable: true},
                {data: 'tell', name: 'tell', orderable: true},
                {data: 'email', name: 'email', orderable: true},
                {data: 'topic', name: 'topic', orderable: true},
                {data: 'note', name: 'note', orderable: true},
                {{--{--}}
                {{--    data: 'id',--}}
                {{--    name: 'id',--}}
                {{--    searchable: false,--}}
                {{--    orderable: false,--}}
                {{--    render: function (_, _, row) {--}}
                {{--        return '<a class=\'btn btn-primary\' href=\'' + ('{{route('admin.service-list.update',['service_list'=>':id'])}}').replace(':id', row.id) + '/edit' + '\'>แก้ไขข้อมูล</a>' +--}}
                {{--            ' <button class=\'btn btn-danger\' onclick="Delete(' + row.id + ')">ลบ</button>'--}}
                {{--    }--}}
                {{--}--}}
            ]
        })

        {{--function Delete(service_id) {--}}
        {{--    const swalWithBootstrapButtons = Swal.mixin({--}}
        {{--        customClass: {--}}
        {{--            confirmButton: 'btn btn-primary',--}}
        {{--            cancelButton: 'btn btn-link'--}}
        {{--        },--}}
        {{--        allowOutsideClick: false,--}}
        {{--        buttonsStyling: false,--}}
        {{--    })--}}
        {{--    swalWithBootstrapButtons.fire({--}}
        {{--        text: 'ยืนยันการลบข้อมูล',--}}
        {{--        showCancelButton: true,--}}
        {{--        confirmButtonText: 'ตกลง',--}}
        {{--        cancelButtonText: 'ยกเลิก',--}}
        {{--        icon: 'error',--}}
        {{--        reverseButtons: true,--}}
        {{--    }).then((result) => {--}}
        {{--        if (result.value) {--}}
        {{--            formData.append('service_list_id', service_id)--}}
        {{--            formData.append('_token', '{!! csrf_token() !!}')--}}
        {{--            $.ajax({--}}
        {{--                url: '{!! route('admin.service-list-items.delete') !!}',--}}
        {{--                type: 'POST',--}}
        {{--                data: formData,--}}
        {{--                processData: false,--}}
        {{--                contentType: false,--}}
        {{--                success: function (data) {--}}
        {{--                    if (data.success == true) {--}}
        {{--                        const swalWithBootstrapButtons = Swal.mixin({--}}
        {{--                            customClass: {--}}
        {{--                                confirmButton: 'btn btn-primary',--}}
        {{--                                cancelButton: 'btn btn-link'--}}
        {{--                            },--}}
        {{--                            buttonsStyling: false,--}}
        {{--                            allowOutsideClick: false--}}
        {{--                        })--}}
        {{--                        swalWithBootstrapButtons.fire(--}}
        {{--                            '',--}}
        {{--                            'ลบข้อมูลสำเร็จ',--}}
        {{--                            'success',--}}
        {{--                        ).then((result) => {--}}
        {{--                            if (result.value) {--}}
        {{--                                location.reload()--}}
        {{--                            } else if (--}}
        {{--                                result.dismiss === Swal.DismissReason.cancel--}}
        {{--                            ) {--}}
        {{--                                swalWithBootstrapButtons.fire(--}}
        {{--                                    'Cancelled',--}}
        {{--                                    'Your imaginary file is safe :)',--}}
        {{--                                    'error'--}}
        {{--                                )--}}
        {{--                            }--}}
        {{--                        })--}}
        {{--                    } else {--}}
        {{--                        Swal.fire(--}}
        {{--                            '',--}}
        {{--                            '',--}}
        {{--                            'error'--}}
        {{--                        )--}}
        {{--                    }--}}
        {{--                }--}}
        {{--            })--}}
        {{--        }--}}
        {{--    })--}}
        {{--}--}}
    </script>
@endpush
