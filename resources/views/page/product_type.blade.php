@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Loại sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('home')}}">Trang chủ</a> / <span>Loại sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space15">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						@foreach($list_type as $ls_type)
							<li><a href="{{route('product-type', $ls_type -> id)}}">{{$ls_type -> name}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						@foreach($type_product as $type_pro)				
						<h4>{{$type_pro -> name}}</h4>
						@endforeach
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($pro_with_type)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">							
							@foreach($pro_with_type as $pro)								
								<div class="col-sm-4">
									<div class="single-item">
										@if($pro -> promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('product-details', $pro -> id)}}"><img src="source/image/product/{{$pro -> image}}" alt="" height="250px"></a>
										</div>																					
										<div class="single-item-body">
											<a class="single-item-title" href="{{route('product-details', $pro -> id)}}">{{$pro -> name}}</a>											
											<p class="single-item-price" style="font-size: 15px">
												@if($pro -> promotion_price == 0)
													<span class="flash-sale">{{number_format($pro -> unit_price)}}</span>										
												@else
													<span class="flash-del">{{number_format($pro -> unit_price)}}</span>
													<span class="flash-sale">{{number_format($pro -> promotion_price)}}</span>
												@endif												
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('add-to-cart', $pro -> id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product-details', $pro -> id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>																				
									</div>
								</div>								
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space40">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khác</h4>
						<div class="beta-products-details">
							{{-- <p class="pull-left">Tìm thấy {{count($other_product)}} sản phẩm</p> --}}
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($other_product as $other_pro)
								<div class="col-sm-4">
									<div class="single-item">
										@if($other_pro -> promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('product-details', $other_pro -> id)}}"><img src="source/image/product/{{$other_pro -> image}}" alt="" height="250px"></a>
										</div>																					
										<div class="single-item-body">
											<a class="single-item-title" href="{{route('product-details', $other_pro -> id)}}">{{$other_pro -> name}}</a>											
											<p class="single-item-price" style="font-size: 15px">
												@if($other_pro -> promotion_price == 0)
													<span class="flash-sale">{{number_format($other_pro -> unit_price)}}</span>										
												@else
													<span class="flash-del">{{number_format($other_pro -> unit_price)}}</span>
													<span class="flash-sale">{{number_format($other_pro -> promotion_price)}}</span>
												@endif												
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('add-to-cart', $other_pro -> id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product-details', $other_pro -> id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>																				
									</div>
								</div>
							@endforeach
						</div>
						<div class="row">{{$other_product ->links()}}</div>
						{{-- <div class="space15">&nbsp;</div>--}}
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection