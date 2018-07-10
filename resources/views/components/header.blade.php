<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('theme/img/logo.png')}}" alt="">
			<!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive">
			<i class="fa fa-bars"></i>
		</div>
		<nav>
			<ul class="menu-list">
				<li class="{{Route::is('welcome')?'active':''}}">
					<a class="" href="{{route('welcome')}}">Home</a>
				</li>
				<li class="{{Route::is('services')?'active':''}}">
					<a href="{{route('services')}}">Services</a>
				</li>
				<li class="{{Route::is('blog')?'active':'' || Route::is('tags') || Route::is('categories') ? 'active' : ''}} ">
					<a href="{{route('blog')}}">Blog</a>
				</li>
				<li class="{{Route::is('contact')?'active':''}}">
					<a href="{{route('contact')}}">Contact</a>
				</li>
				<li class="{{Route::is('login')?'active':''}}">
					<a href="{{route('login')}}">Login</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->