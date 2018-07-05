<!-- newsletter section -->
<div class="newsletter-section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2>Newsletter</h2>
			</div>
			<div class="col-md-9">
				<!-- newsletter form -->
				@if($errors->has('newsletter'))
					<div class="text-danger">{{$errors->first('newsletter')}}</div>
				@endif
				<form class="nl-form" action="{{route('newsletter.store')}}" method="POST">
					@csrf
					@method('POST')
					<input type="text" placeholder="Votre adresse email" name="newsletter" value="{{old('newsletter')}}">
					<button class="site-btn btn-2" type="submit">Newsletter</button>
				</form>
			</div>
		</div>
	</div>
</div>