@extends('layouts.blog')

@section('blog')
<!-- page section -->
<!-- Single Post -->
<div class="single-post">
	<div class="post-thumbnail">
		<img src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="{{$article->title}}">
		<div class="post-date">
			<h2>{{$article->created_at->format('d')}}</h2>
			<h3>{{$article->created_at->format('M Y')}}</h3>
		</div>
	</div>
	<div class="post-content">
		<h2 class="post-title">{{$article->title}}</h2>
		<div class="post-meta">
			<a>{{$article->user->name}}</a>
			<a>
				@foreach($article->tags as $tag)
					{{$tag->name}}
				@endforeach
			</a>
			<a>
				@if($article->comments->count() == 1)
				{{$article->comments->count()}} Comment
				@else
				{{$article->comments->count()}} Comments
				@endif
			</a>
		</div>
		<p>
			{{$article->content}}
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.

		</p>
		<p>
			Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.
		</p>
	</div>
	<!-- Post Author -->
	<div class="author">
		<div class="avatar">
			<img src="{{Storage::disk('imgUser')->url($article->user->image)}}" alt="{{$article->name}}">
		</div>
		<div class="author-info">
			<h2>
				{{$article->user->name}}, <span>Author</span>
			</h2>
			<p>
				Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
			</p>
		</div>
	</div>
	<!-- Post Comments -->
	<div class="comments">
		<h2>Comments ({{$article->comments->count()}})</h2>
		<ul class="comment-list">
			@foreach($article->comments as $comment)
			<li>
				<div class="avatar">
					<img src="{{asset('theme/img/avatar/01.jpg')}}" alt="">
				</div>
				<div class="commetn-text">
					<h3>{{$comment->name}} | {{$comment->created_at->format('d M')}}, {{$comment->created_at->format('Y')}}</h3>
					<p>
						{{$comment->message}}
					</p>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
	<!-- Commert Form -->
	<div class="row">
		<div class="col-md-9 comment-from">
			<h2>Leave a comment</h2>
			<form class="form-class" action="{{route('comment')}}" method="post">
				@csrf
				<input type="hidden" name="articles_id" value="{{$article->id}}">
				<div class="row">
					<div class="col-sm-6">
						@if($errors->has('name'))
							<div class="text-danger">{{$errors->first('name')}}</div>
						@endif
						<input type="text" name="name" placeholder="Votre nom" value="{{old('name')}}">
					</div>
					<div class="col-sm-6">
						@if($errors->has('email'))
							<div class="text-danger">{{$errors->first('email')}}</div>
						@endif
						<input type="text" name="email" placeholder="Votre email" value="{{old('email')}}">
					</div>
					<div class="col-sm-12">
						@if($errors->has('subject'))
							<div class="text-danger">{{$errors->first('subject')}}</div>
						@endif
						<input type="text" name="subject" placeholder="Sujet" value="{{old('subject')}}">
						@if($errors->has('message'))
							<div class="text-danger">{{$errors->first('message')}}</div>
						@endif
						<textarea name="message" placeholder="Votre message">{{old('message')}}</textarea>
						<button class="site-btn" type="submit">send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- page section end-->
@endsection