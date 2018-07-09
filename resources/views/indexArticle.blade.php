@extends('layouts.blog')

@section('blog')
@foreach($articles as $article)
<!-- Post item -->
<div class="post-item">
	<div class="post-thumbnail">
		<img src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="{{$article->name}}">
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
				{{$article->comments->where('validation', 1)->count()}} Comment
				@else
				{{$article->comments->where('validation', 1)->count()}} Comments
				@endif
			</a>
		</div>
		<p>
			{{$article->content}}
		</p>
		<a href="{{route('showBlog', ['article'=>$article->id])}}" class="read-more">Read More</a>
	</div>
</div>
@endforeach
<!-- Pagination -->
<div>
	{{$articles->links('components.pagination')}}
</div>
@endsection