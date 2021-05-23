<li>
                @if(Session::has('Cart') != null)
                @foreach(Session::get('Cart')->products as $item)
                  <div class="cart-item product-summary">
                    <div class="row cart-detail">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="{{asset('images/'.$item['productInfo']->image)}}" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail">{{$item['productInfo']->name}}</a></h3>
                        <div class="price">${{number_format($item['productInfo']->price)}} x {{$item['quanty']}}</div>                     
                      </div>
                      <!-- <div class="col-xs-1 action"> <a type="button"  href="javascrip:" data-id="{{$item['productInfo']->id}}"><i class="fa fa-trash"></i></a> </div> -->
                      <!-- <div  class="col-lg-2 col-sm-2 col-2 cart-detail-product">
													<a style="background: white; color: black" class="fa fa-close" type="button"  href="javascrip:" data-id="{{$item['productInfo']->id}}">
													</a>
												</div> -->
                    </div>
                  </div>
                  <!-- <input hidden id="total-quanty-card" type="number" value="{{Session::get('Cart')->totalQuanty}}"> -->
                  <hr>
                  @endforeach
                  
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                
                  
                  <div class="clearfix cart-total">
                  
                    <div class="pull-right">
                    <span class="text">Sub Total :</span><span class='price'>{{number_format(Session::get('Cart')->totalPrice)}} VNĐ</span> </div>
                    @else
                          <span style="color: black;margin-left: 40px;">
                            - Giỏ hàng trống -
                          </span>               
                  @endif
                    <div class="clearfix"></div>                 
                    <a href="{{route('shopping.viewCart')}}" class="btn btn-upper btn-primary btn-block m-t-20">Mua hàng</a> 
                    </div>
                  <!-- /.cart-total--> 
                  
                </li>