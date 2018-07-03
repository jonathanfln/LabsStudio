@extends('layouts.layout')

@section('content')
<!-- Intro Section -->
<div class="hero-section">
	<div class="hero-content">
		<div class="hero-center">
			<img src="{{asset('theme/img/big-logo.png')}}" alt="">
			<p>Get your freebie template now!</p>
		</div>
	</div>
	<!-- slider -->
	<div id="hero-slider" class="owl-carousel">
		@foreach($carouselImgs as $img)
			<div class="item  hero-item" data-bg="{{Storage::disk('imgCarousel')->url($img->image)}}"></div>
			
		@endforeach
	</div>
</div>
<!-- Intro Section -->


<!-- About section -->
<div class="about-section">
	<div class="overlay"></div>
	<!-- card section -->
	<div class="card-section">
		<div class="container">
			<div class="row">
				<!-- single card -->
				@foreach($servicesRand as $service)
				<div class="col-md-4 col-sm-6">
					<div class="lab-card">
						<div class="icon">
							<i class="{{$service->image}}"></i>
						</div>
						<h2>{{$service->name}}</h2>
						<p>
							{{$service->content}}
						</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- card section end-->


	<!-- About contant -->
	<div class="about-contant">
		<div class="container">
			<div class="section-title">
				<h2>Get in
					<span>the Lab</span> and discover the world</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
						Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus
						ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
				</div>
				<div class="col-md-6">
					<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum
						velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi.
						Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
				</div>
			</div>
			<div class="text-center mt60">
				<a href="" class="site-btn">Browse</a>
			</div>
			<!-- popup video -->
			<div class="intro-video">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<img src="{{asset('theme/img/video.jpg')}}" alt="">
						<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About section end -->


<!-- Testimonial section -->
<div class="testimonial-section pb100">
	<div class="test-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="section-title left">
					<h2>What our clients say</h2>
				</div>
				<div class="owl-carousel" id="testimonial-slide">
					@foreach($testimonials as $testimonial)
					<!-- single testimonial -->
					<div class="testimonial">
						<span>‘​‌‘​‌</span>
						<p>
							{{$testimonial->content}}
						</p>
						<div class="client-info">
							@if($testimonial->client != NULL)
							<div class="avatar">
								<img src="{{Storage::disk('imgClient')->url($testimonial->client->image)}}" alt="{{$testimonial->client->name}}">
							</div>
							<div class="client-name">
								<h2>{{$testimonial->client->name}}</h2>
								<p>{{$testimonial->client->company}}</p>
							</div>
							@endif
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial section end-->

@include('components.services', $services)

<!-- Team Section -->
<div class="team-section spad">
	<div class="overlay"></div>
	<div class="container">
		<div class="section-title">
			<h2>
				Get in<span>the Lab</span> and meet the team
			</h2>
		</div>
		<div class="row">
			@foreach($team as $person)
			<!-- single member -->
			<div class="col-sm-4">
				<div class="member">
					<img src="{{Storage::disk('imgUser')->url($person->image)}}" alt="">
					<h2>{{$person->name}}</h2>
					@if($person->job != NULL)
						<h3>{{$person->job}}</h3>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Team Section end-->


<!-- Promotion section -->
<div class="promotion-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>Are you ready to stand out?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
			</div>
			<div class="col-md-3">
				<div class="promo-btn-area">
					<a href="{{route('blog')}}" class="site-btn btn-2">Browse</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Promotion section end-->

@include('components.contact')

@endsection