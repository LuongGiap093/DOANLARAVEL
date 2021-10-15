<script type="text/javascript">
    $(document).ready(function () {
        $('.add_coupon').click(function () {//khi click vào nút
            var coupon_code = $('.coupon').val();
            var _token = $('input[name="_token"]').val();

            if (coupon_code == '') {
                swal("Làm ơn nhập mã giảm giá!");
            } else {
                $.ajax({
                    url: '{{route('giamgia')}}',
                    method: 'POST',
                    data: {coupon_code:coupon_code,_token: _token},
                    success: function (data) {
                        // alertify.success('Thêm mã thành công!');
                        // location.reload();
                        swal({
                            title: "",
                            text: "Thêm mã giảm giá thành công!",
                            icon: "success",
                        });
                    }
                });
            }
            window.setTimeout(function (){
                location.reload();
            } ,2000);
        });
    });


</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.delete_coupon').click(function () {//khi click vào nút
            swal({
                title: "Bạn có chắc muốn xóa mã giảm giá không?",
                text: "",
                icon: "error",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: '{{route('delete-coupon')}}',
                            method: 'GET',
                            success: function (data) {
                                swal("OK! Hủy mã giảm giá thành công!", {
                                    icon: "success",
                                });
                                location.reload();
                            }
                        });
                    } else {
                    }
                });
            // window.setTimeout(function (){
            //     location.reload();
            // } ,3000);
        });
    });
</script>
