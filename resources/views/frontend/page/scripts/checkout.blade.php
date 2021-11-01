<script type="text/javascript">
    $(document).ready(function () {
        $('.check_checkout_page').click(function () {//khi click vào nút

            var fee=$('.fee').val();

            if(document.getElementById('payment').checked && fee!='') {
                var check_payment=true;
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: '{{route('shopping.checkout')}}',
                    method: 'POST',
                    data: {check_payment:check_payment,_token: _token},
                    success: function (data) {
                        window.location='http://localhost:8080/DOANLARAVEL/trang-chu'
                    }
                });
                window.setTimeout(function (){
                    location.reload();
                } ,2000);
            }else{
                if(fee==''){
                    swal("Làm ơn nhập thông tin vận chuyển!");
                }else{
                    swal("Làm ơn chọn phương thức thanh toán!");
                }
                // window.location='http://localhost:8080/DOANLARAVEL/trang-chu';

            }
        });
    });
</script>
