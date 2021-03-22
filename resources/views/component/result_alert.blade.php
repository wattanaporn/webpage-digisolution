@if(session()->has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        @if(session()->get('success',false))
        Swal.fire({
            title: 'สำเร็จ',
            icon: 'success',
            text: '{{session()->get('message','ทำรายการสำเร็จ')}}',
            allowOutsideClick: false,
        })
        @else
        Swal.fire({
            title: 'ขออภัย',
            icon: 'error',
            text: '{{session()->get('message','ทำรายการไม่สำเร็จ')}}',
            allowOutsideClick: false,
        })
        @endif
    </script>
@endif
