@extends('layout')

@section('content')
	<div class="container">
		<div class="row text-center">
			<h1>Vent About Your Work</h1>
		</div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul class="">
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			</div>
		</div>

		<div class="row">
			<form class="form-horizontal" action="/publish" method="POST">
				<fieldset>
	
					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="message">Message</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="message" name="message" placeholder="What's bothering you?"></textarea>
					  </div>
					</div>

					<!-- Multiple Radios -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="type">Message Type</label>
					  <div class="col-md-4">
					  <div class="radio">
					    <label for="type-0">
					      <input type="radio" name="type" id="type-0" value="text" checked="checked">
					      Plaintext (character limit: 1024)
					    </label>
						</div>
					  <div class="radio">
					    <label for="type-1">
					      <input type="radio" name="type" id="type-1" value="image">
					      Text-Image (character limit: 512)
					    </label>
						</div>
					  </div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="agreement">Term of Use</label>
						<div class="col-md-4">
							<ol>
								<li>You agree not to bullying and to follow <a href="http://facebook.com/communitystandards" target="_blank">Facebook’s Community Standard</a></li>
								<li>You will not bully, intimidate, harass any user, or post content that: is hate speech, threatening, or pornographic; incites violence; or contains nudity or graphic or gratuitous violence, otherwise, your post will be eliminate.</li>
							</ol>
							<label><input type="checkbox" name="agreement" value="1"> I have read and accept the license</label>
						</div>
					</div>

					<div class="form-group">
                        <label for="comment" class="col-sm-4 control-label">Human Verify</label>
                        <div class="col-sm-4">
                            {!! Recaptcha::render() !!}
                        </div>
                    </div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="submit"></label>
					  <div class="col-md-8">
					  	{{ csrf_field() }}
					    <button id="submit" type="submit" name="submit" class="btn btn-primary">Publish My Vent</button>
					    <a href="#" id="cancel" name="cancel" class="btn btn-default">Change My Mind</a>
					  </div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>	

@endsection