@extends('layouts.master')

@section('content')
@include('partials.header')
<section ><!--form-->
		<div class="container">
		@include('partials.alert')
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-default">
  <div class="panel-body">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						 <form class="form-vertical" role="form" method="post" action="{{route('Auth.register')}}">
					<div class="form-group {{ $errors->has('name') ?  ' has-error' : '' }}" >
							<input type="text" placeholder="Username" name="name" value="{{ Request::old('name') ?: ''}}" required="required" />
							 @if($errors->has('name'))
              <span class="help-block">{{$errors->first('name')}}</span>
            @endif
            </div>
				<div class="form-group {{ $errors->has('email') ?  ' has-error' : '' }}" >			<input type="email" placeholder="Email Address" name="email" value="{{ Request::old('email') ?: ''}}" required="required" />
				@if($errors->has('email'))
              <span class="help-block">{{$errors->first('email')}}</span>
            @endif
				</div>
				<div class="form-group {{ $errors->has('password') ?  ' has-error' : '' }}" >	<input type="password" placeholder="Password" name="password" value="{{ Request::old('password') ?: ''}}" required="required" />
				 @if($errors->has('password'))
              <span class="help-block">{{$errors->first('password')}}</span>
            @endif
            </div>
							<button type="submit" class="btn btn-default pull-right">Signup</button>
							<input type="hidden" name="_token" value="{{Session::token()}}">
						</form>
					</div><!--/sign up form-->
					</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section><!--/form-->
	@stop