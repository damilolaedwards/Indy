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
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						 <form class="form-vertical" role="form" method="post" action="{{route('Auth.login')}}">
				<div class="form-group {{ $errors->has('name') ?  ' has-error' : '' }}" >
							<input type="text" placeholder="Username"  name="name" value="{{ Request::old('name') ?: ''}}" required="required" />
							 @if($errors->has('name'))
              <span class="help-block">{{$errors->first('name')}}</span>
            @endif
							</div>
				<div class="form-group {{ $errors->has('password') ?  ' has-error' : '' }}" >
							<input type="password" placeholder="Password" name="password" value="{{ Request::old('password') ?: ''}}" required="required" />
							 @if($errors->has('password'))
              <span class="help-block">{{$errors->first('password')}}</span>
            @endif
							</div>
							<span>
								<input type="checkbox" class="checkbox" checked="checked" > 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default pull-right">Login</button>
							<input type="hidden" name="_token" value="{{Session::token()}}">
						</form>
					</div><!--/login form-->
				</div>
				</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
	@stop