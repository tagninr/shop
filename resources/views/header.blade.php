<div id="header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
					<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					@if(Auth::check())
						{{-- <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li> --}}
						<li><a>Chào bạn {{Auth::user() -> full_name}}</a></li>
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
					@else
						<li><a href="{{route('signup')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
					@endif
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="{{route('home')}}" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="{{route('search')}}">
						<input type="text" value="" name="key" id="key" placeholder="Nhập từ khóa..." />
						<button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (
								@if(Session::has('cart'))
									{{Session('cart') -> totalQty}}
								@else
									Trống
								@endif
									{{--<i class="fa fa-chevron-down"></i>--}}
								)
							</div>
							<div class="beta-dropdown cart-body">						
								@if(Session::has('cart'))
									@foreach($product_cart as $product)
										<div class="cart-item">
											{{-- <a class="cart-item-edit" href="#"><i class="fa fa-pencil"></i></a> --}}
											{{-- <a class="cart-item-plus" href="#"><i class="fa fa-plus"></i></a>
											<a class="cart-item-minus" href="#"><i class="fa fa-minus"></i></a> --}}
											<a class="cart-item-delete" href="{{route('del-cart', $product['item']['id'])}}"><i class="fa fa-times"></i></a>
											<div class="media">
												<a class="pull-left"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
												<div class="media-body">
													<a class="cart-item-title" href="{{route('product-details', $product['item']['id'])}}">{{$product['item']['name']}}</a>
													<span class="cart-item-amount">{{$product['qty']}}*<span>
													@if($product['item']['promotion_price'] == 0)
													{{number_format($product['item']['unit_price'])}}
													@else
													{{number_format($product['item']['promotion_price'])}}
													@endif
												</span></span>
												</div>
											</div>
										</div>
									@endforeach
								@endif
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart') -> totalPrice)}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a class="beta-btn primary text-center" href="{{route('order')}}">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					@endif
				</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="{{route('home')}}">Trang chủ</a></li>
					<li><a {{-- href="{{route('home')}}" --}}>Loại sản phẩm</a>
						<ul class="sub-menu">
							@foreach($type_product as $type)
							<li><a href="{{route('product-type', $type -> id)}}">{{$type -> name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="{{route('about')}}">Giới thiệu</a></li>
					<li><a href="{{route('contact')}}">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->