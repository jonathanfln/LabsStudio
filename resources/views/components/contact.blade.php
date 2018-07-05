<!-- Contact section -->
<div class="contact-section spad fix">
	<div class="container">
		<div class="row">
			<!-- contact info -->
			<div class="col-md-5 col-md-offset-1 contact-info col-push">
				<div class="section-title left">
					<h2>Contact us</h2>
				</div>
				<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum
					velit a orci facilisis rutrum. </p>
				<h3 class="mt60">Main Office</h3>
				<p class="con-item">C/ Libertad, 34
					<br> 05200 Arévalo </p>
				<p class="con-item">0034 37483 2445 322</p>
				<p class="con-item">hello@company.com</p>
			</div>
			<!-- contact form -->
			<div class="col-md-6 col-pull">
				<form class="form-class" id="con_form" action="{{route('contactMail')}}" method="post">
					@csrf
					@method('POST')
					<div class="row">
						<div class="col-sm-6">
							@if($errors->has('name'))
								<div class="text-danger">{{$errors->first('name')}}</div>
							@endif
							<input type="text" name="name" placeholder="Votre nom" value="{{old('name')}}" class="">
						</div>
						<div class="col-sm-6">
							@if($errors->has('email'))
								<div class="text-danger">{{$errors->first('email')}}</div>
							@endif
							<input type="text" name="email" placeholder="Votre email" value="{{old('email')}}" class="">
						</div>
						<div class="col-sm-12">
							@if($errors->has('subject'))
								<div class="text-danger">{{$errors->first('subject')}}</div>
							@endif
							<input type="text" name="subject" placeholder="Sujet" value="{{old('subject')}}" class="">
							@if($errors->has('message'))
								<div class="text-danger">{{$errors->first('message')}}</div>
							@endif
							<textarea name="message" placeholder="Message" class="">{{old('message')}}</textarea>
							<button class="site-btn" type="submit">send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Contact section end-->