@extends('user.theme.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class="container">
	<form action="{{route('dathang')}}" method="POST" class="creditly-card-form agileinfo_form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span id="status"></span>
		<div class="row" id="list-cart">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">					
						<table id="cart" class="table">
							<thead>
								<tr>	
									<th class="cart-description item">Hình ảnh</th>
									<th class="cart-product-name item">Tên Sản Phẩm</th>
									<th class="cart-qty item">Số Lượng</th>
									<th class="cart-sub-total item">Đơn Giá</th>
									<th class="cart-total last-item">Tổng cộng</th>
									<th class="cart-edit item">Cập Nhật</th>
									<th class="cart-romove item">Xóa</th>
								</tr>
							</thead><!-- /thead -->			
							@if(Session::has('Cart') != null)
							@foreach(Session::get('Cart')->products as $item)
							<tbody>
								<tr>				
									<td class="cart-image">
										<a class="entry-thumbnail" href="#">
											<img src="{{asset('images/'.$item['productInfo']->image)}}" alt="" style="width: 90px;">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="#">{{$item['productInfo']->name}}</a></h4>
									
									</td>					
									<td><input data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" type="number" value="{{$item['quanty']}}" style="width: 47%; text-align: center; margin-left: 26%;"></td>
									<td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($item['productInfo']->price)}} VNĐ</span></td>
									<td class="cart-product-grand-total"><span class="cart-grand-total-price">{{number_format($item['price'])}} VNĐ</span></td>
									<td>
										<a onclick="SaveListItemCart({{$item['productInfo']->id}})" href="javascript:"><i class="fa fa-refresh" style="margin-left: 50%;"></i></a>
									</td>
									<td>
										<a onclick="DeleteListItemCart({{$item['productInfo']->id}})" href="javascript:"><i class="fa fa-trash" style="margin-left: 50%;"></i></a>
									</td>					 					
								</tr>						
							</tbody><!-- /tbody -->
							@endforeach					
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="{{route('shopping.index')}}" class="btn btn-upper btn-primary outer-left-xs">Tiếp Tục Mua Sắm</a>
												<!-- <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a> -->
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
							@else
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="{{route('shopping.index')}}" class="btn btn-upper btn-primary outer-left-xs">Tiếp Tục Mua Sắm</a>
												<!--<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>-->							</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
							@endif
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->	
				<hr>		

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Vui lòng nhập đầy đủ thông tin</span>
									
								</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>
										<div class="form-group">
											<input type="text" class="form-control unicase-form-control text-input" placeholder="Họ và tên..." name="customer_name" required="">
										</div>
										<div class="form-group">
											<input type="text" class="form-control unicase-form-control text-input" placeholder="Email..." name="customer_email" required="">
										</div>
										<div class="form-group">
											<input type="number" class="form-control unicase-form-control text-input" placeholder="Số điện thoại..." name="customer_phone_number" required="">
										</div>
										
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
					
						</thead><!-- /thead -->
						<tbody>
								<tr>
									<td>
									<div class="form-group">
											<input type="text" class="form-control unicase-form-control text-input" placeholder="Địa chỉ..." name="customer_address" required="">
										</div>
										<div class="form-group">
											<input type="text" class="form-control unicase-form-control text-input" placeholder="Ghi chú..." name="customer_note" required="">
										</div>
										<div class="form-group">
											<label class="info-title control-label">Phương thức thanh toán <span>*</span></label>
											<select class="form-control unicase-form-control selectpicker" name="order_payment" required="">
												<option>--Tùy chọn phương thức thanh toán--</option>
												<option>Thanh toán bằng thẻ ATM</option>
												<option>Thanh toán bằng tiền mặt</option>
											</select>
										</div>
									</td>
								</tr>
						</tbody>
					</table>
				</div><!-- /.estimate-ship-tax -->







				@if(Session::has('Cart') != null)
				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th style="text-align: left; padding-left: 0px;">
									<div class="cart-sub-total">
										<span class="inner-left-md">Tổng tiền: {{number_format(Session::get('Cart')->totalPrice)}} VNĐ</span>
									</div>
									<div class="cart-sub-total">
										<span class="inner-left-md">Shiping: 15,000 VNĐ</span>
									</div>
									<div class="cart-grand-total">
										<span class="inner-left-md">Thành tiền: {{number_format(Session::get('Cart')->totalPrice + 15000)}} VNĐ</span>
									</div>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn"  style="padding: 11px 24px;" style="width: 105%;">XÁC NHẬN MUA HÀNG</button>
											<span class="">Nhanh tay đặt hàng ngay hôm nay nào!</span>
										</div>
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->	
				</div><!-- /.cart-shopping-total -->	
				@else
				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th style="text-align: left;padding-left: 0px;">
									<div class="cart-sub-total">
										Tổng tiền:<span class="inner-left-md">0 VNĐ</span>
									</div>
									<div class="cart-sub-total">
										Shiping:<span class="inner-left-md">0 VNĐ</span>
									</div>
									<div class="cart-grand-total">
										Thành tiền:<span class="inner-left-md">0 VNĐ</span>
									</div>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
								<tr>
									<td style="padding: 25px 70px;">
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn" style="padding: 11px 24px;" style="width: 105%;">XÁC NHẬN MUA HÀNG</button>
											<span class="">Nhanh tay đặt hàng ngay hôm nay nào!</span>
										</div>
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->	
				</div><!-- /.cart-shopping-total -->	
				@endif		

			</div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
		</form>
	</div>

</div><!-- /.body-content -->

@stop
