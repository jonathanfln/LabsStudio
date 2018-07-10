@extends('layouts.layout')

@section('content')
<!-- Page header -->
<div class="page-top-section">
	<div class="overlay"></div>
	<div class="container text-right">
		<div class="page-info">
			<h2>Blog</h2>
			<div class="page-links">
				<a href="#">Home</a>
				<span>Blog</span>
			</div>
		</div>
	</div>
</div>
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-7 blog-posts">
				
				@yield('blog')

			</div>
			<!-- Sidebar area -->
			<div class="col-md-4 col-sm-5 sidebar">
				<!-- Single widget -->
				<div class="widget-item">
					<form action="" class="search-form">
						<input type="text" placeholder="Search">
						<button class="search-btn" type="submit">
							<i class="flaticon-026-search"></i>
						</button>
					</form>
				</div>
				<!-- Single widget -->
				<div class="widget-item">
					<h2 class="widget-title">Categories</h2>
					<ul>
						@foreach($categories as $category)
							<li>
								<a href="{{route('categories', ['category'=>$category->id])}}">{{$category->name}}</a>
							</li>
						@endforeach
					</ul>
				</div>
				<!-- Single widget -->
				<div class="widget-item">
					<h2 class="widget-title">Instagram</h2>
					<ul class="instagram">
						<li>
							<img src="{{asset('theme/img/instagram/1.jpg')}}" alt="">
						</li>
						<li>
							<img src="{{asset('theme/img/instagram/2.jpg')}}" alt="">
						</li>
						<li>
							<img src="{{asset('theme/img/instagram/3.jpg')}}" alt="">
						</li>
						<li>
							<img src="{{asset('theme/img/instagram/4.jpg')}}" alt="">
						</li>
						<li>
							<img src="{{asset('theme/img/instagram/5.jpg')}}" alt="">
						</li>
						<li>
							<img src="{{asset('theme/img/instagram/6.jpg')}}" alt="">
						</li>
					</ul>
				</div>
				<!-- Single widget -->
				<div class="widget-item">
					<h2 class="widget-title">Tags</h2>
					<ul class="tag">
						@foreach($tags as $tag)
						<li>
							<a href="{{route('tags', ['tag'=>$tag->id])}}">{{$tag->name}}</a>
						</li>
						@endforeach
					</ul>
				</div>
				@foreach($testimonialRand as $testimonial)
				<!-- Single widget -->
				<div style="background-color:coral">
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p class="">
								{{$testimonial->content}}
							</p>
							@if($testimonial->client != NULL)
							<div class="client-info">
								<div class="avatar">
									<img src="{{Storage::disk('imgClient')->url($testimonial->client->image)}}" alt="{{$testimonial->client->name}}">
								</div>
								<div class="client-name">
									<h2 class="">{{$testimonial->client->name}}</h2>
									<p>{{$testimonial->client->company}}</p>
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@include('components.newsletter')

<!-- page section end-->
@endsection