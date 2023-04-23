@extends('layout.page')

@section('content')
    <section class="cart__section">
        <div class="container cart__container">
			<div class="breadcrumb">
				<ul>
					<li><a class="breadcrumb-item  breadcrumb-home" href="{{url('trang-chu')}}">Trang chủ</a></li>
					<li><span class="breadcrumb-item">Giỏ hàng</span></li>
				</ul>
			</div>
            <div class="table-responsive cart__table">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>Hình ảnh</td>
							<td>Sản phẩm</td>
							<td>Đơn giá</td>
							<td>Số lượng</td>
							<td>Thành tiền</td>
							<td>Xóa</td>
						</tr>
					</thead>
					
					<tbody>
						<form action="{{url('/update-cart')}}" method="post"> {{--Form-1--}}
							@csrf

							@if(session()->get('cart') == true) {{--if-1--}}
							@php
								$total = 0;	
								$total_coupon = 0;	
								$number_item = 0;	
							@endphp
							@foreach (session()->get('cart') as $item => $cart)
								@php
								$sub_total = $cart['product_price'] * $cart['product_quantity'];	
								$total += $sub_total; 
								$number_item = $number_item + 1;
								@endphp

                                <tr>
                                    <td class="cart__image">
                                        <img width="90" src="{{asset('uploads/product/'.$cart['product_image'])}}" alt="">
                                    </td>
                                    <td class="cart__name">
                                        <h5>{{$cart['product_name']}}</h5>
                                        <p>Phân loại: {{$cart['product_category']}}</p>
                                    </td>
                                    <td class="cart__price">
                                        <p>{{number_format($cart['product_price'],0,',','.')}} đ</p>
                                    </td>
                                    <td class="cart__quantity">
                                        <div class="d-flex align-items-center">
											<span class="btn__change-quantity btn-back-quantity" data-item_stt="{{$item+1}}"><i class="bi bi-dash"></i></span>
											<input type="hidden" class="pd_price_{{$item+1}}" value="{{$cart['product_price']}}">
											<input type="hidden" class="pd_name_{{$item+1}}" value="{{$cart['product_name']}}">


											<input type="number" name="quantity" class="input__quantity pd_quantity_{{$item+1}}" value="{{ $cart['product_quantity'] }}">

											<span class="btn__change-quantity btn-forward-quantity" data-item_stt="{{$item+1}}"><i class="bi bi-plus"></i></i></span>

										</div>
                                    </td>
                                    <td class="cart_total">
                                        <span class="into_money_{{$item+1}} into_money">{{number_format($sub_total,0,',','.')}}</span> <span>đ</span>
                                    </td>
                                    <td class="cart_delete">
                                        <span class="delete_item delete_item_{{$item+1}}" data-item_stt="{{$item+1}}"><i class="bi bi-x"></i></span>
                                    </td>
                                </tr>
							@endforeach
								<input type="hidden" class="number__item" value="{{$number_item}}">
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td colspan="2">
										<a href="{{url('/delete-all-item')}}" class="btn-delete-all">Xóa tất cả</a>
										<span class="btn-order-now">Đặt hàng</span>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<div style="font-size:20px; color:brown">Tổng tiền: <span class="order_total">{{number_format($total,0,',','.')}}</span><span> đ</span></div>
									</td>
								</tr>
							@else
								<tr>
									<td class="text-center" colspan="6"><img style="width:auto" src="{{asset('front-end/assets/imgs/cart/cart-empty.png')}}" alt=""></td>
								</tr>
								<tr>
									<td class="text-center" colspan="6"><a href="{{url('/trang-chu')}}" class="btn__go-home" >Quay trở lại cửa hàng</a></td>
								</tr>
							@endif
						</form>
					</tbody>
				</table>
			</div>
        </div>

		<div class="order">
            <div class="popup-form">
                <form class="form-promotion">
					@csrf
                    <span class="close-order"><i class="bi bi-x"></i></span>
                    <div class="ft-title mb-4">Điền thông tin mua hàng</div>
                    <input type="text" class="customer_name" placeholder="Tên của bạn (*)">
                    <input type="number" class="customer_phone" id="inputPhone-2" placeholder="Số điện thoại (*)">
                    <input type="text" class="customer_address" placeholder="Địa chỉ giao hàng (*)">
                    <button class="booking__link confirm-order" type="button" style="border: none;">
                        Xác nhận
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection