@extends('layouts.empty')

@section('content')
<div class="container">
   <div class="row">
	 <div class="col-md-4 col-md-offset-4">
	    <div class="login-panel panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Please Sign In</h3>
		  </div>
		  <div class="panel-body">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
			   <strong>Whoops!</strong> There were some problems with your input.<br><br>
			   <ul>
				 @foreach ($errors->all() as $error)
				 <li>{{ $error }}</li>
				 @endforeach
			   </ul>
			</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="/auth/login">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">

			   <div class="form-group">
				 <div class="col-md-12">
				    <input type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}">
				 </div>
			   </div>

			   <div class="form-group">
				 <div class="col-md-12">
				    <input type="password" placeholder="Password" class="form-control" name="password">
				 </div>
			   </div>

			   <div class="form-group">
				 <div class="col-md-12">
				    <div class="checkbox">
					  <label>
						<input type="checkbox" name="remember"> Remember Me
					  </label>
				    </div>
				 </div>
			   </div>

			   <div class="form-group">
				 <div class="col-md-12">
				    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
				    <a class="btn btn-link" href="/password/email">Forgot Your Password?</a>
				 </div>
			   </div>
			</form>
		  </div>
	    </div>
	 </div>
   </div>
</div>
@endsection
