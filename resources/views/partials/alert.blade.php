<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
@if (Session::has('info'))
<div class="alert alert-info" role="alert">
	{{Session::get('info')}}
</div>
@endif

@if (Session::has('warning'))

<div class="alert alert-danger" role="alert">
	{{Session::get('warning')}}
</div>
@endif
</div>
</div>