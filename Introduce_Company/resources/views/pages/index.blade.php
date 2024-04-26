@extends('layout.layout')
@section('body')
	<body class="page1">
<!--==============================header=================================-->
		<div class='container_1'>
        <div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="{{ asset('img/1.jpg')}}"></div>
				<div data-src="{{ asset('img/2.jpg')}}"></div>
				<div data-src="{{ asset('img/3.jpg')}}"></div>
				<div data-src="{{ asset('img/4.jpg')}}"></div>
			</div>
		</div>
        </div>


		<div class="container_12">
			<div class="grid_12">
				<div class="slogan">
					sologan
					<br>
					<a href="#" class="btn">Xem thêm...</a>
				</div>
			</div>
		</div>
		<div class="container_12">
			<section class="grid" id="grid">
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">Tư vấn</div>
						</figcaption>
					</figure>
					<span>Xem</span>
				</a>
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
							<div class="title">Thiết kế</div>
						</figcaption>
					</figure>
					<span>Xem</span>
				</a>
				<a href="{{route('services')}}" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">Sản phẩm</div>
						</figcaption>
					</figure>
					<span>Xem</span>
				</a>
				<a href="{{route('projects')}}" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">Dự án</div>
						</figcaption>
					</figure>
					<span>Xem</span>
				</a>
			</section>
		</div>
@endsection
