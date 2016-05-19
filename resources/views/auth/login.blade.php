@extends('layout')

@section('content')


<!---CONTENT--->
<div class="wrap">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="hidden-xs hidden-sm">
		<div class="textwidget"><h2>Our Services</h2>
<ul class="left_navigation">
	<li><a href="http://www.petsatpark.com/site/services/angels-reiky-therapy/">Angels &amp; Reiky Therapy</a></li>
	<li><a href="http://www.petsatpark.com/site/services/pets-at-park-taxi/">Pets at Park Taxi</a></li>
	<li><a href="http://www.petsatpark.com/site/services/senior-dog-relax-package/">Senior Dog Relax Package</a></li>
	<li><a href="http://www.petsatpark.com/site/services/pets-at-park-package/">Pets at Park Package</a></li>
	<li><a href="http://www.petsatpark.com/site/services/daily-dog-jogging-and-run-package/">Dog Jogging &amp; Run Package</a></li>
	<li><a href="http://www.petsatpark.com/site/services/daily-walking-package/">Daily Walking Package</a></li>
</ul>
<img class="alignleft size-full wp-image-466" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/gps-satellite-tracking.png" alt="gps-satellite-tracking" width="291" height="70" />
<div class="clear"></div>
<!-- <img class="alignnone size-full wp-image-59" style="margin-top: 30px;" src="http://www.petsatpark.com/site/wp-content/uploads/2015/07/pethtech.png" alt="pethtech" width="291" height="70" />
<div class="clear"></div> -->
<img class="alignleft wp-image-296 size-full" src="http://www.petsatpark.com/site/wp-content/uploads/2015/08/eco-logo.png" alt="eco-logo" width="90" height="83" />   <img class="alignright wp-image-410 size-full" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/napps.png" alt="" width="90" height="90" /></div>		
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

		<!--<h1>Appointment Schedule</h1>-->
		<p>
<h2 style="margin-top:-15px;">Appointments are restricted to members</h2>
<p>If you are an existing member, please log in.  New members may register on new registrations link.</p>
<h4>Existing members Log in</h4>
	
	@if (count($errors) > 0)
						<div class="alert alert-danger">
							Error:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

<div id="wpmem_login">
	<a name="login"></a>
	<!--<form action="http://www.petsatpark.com/site/appointment-schedule/" method="POST" id="" class="form"> -->
	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
			<legend>Existing Users Log In</legend>
			<label for="log">{{ trans('validation.attributes.email') }}</label>
			<div class="div_text">
				 {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
			</div>
			<label for="pwd">{{ trans('validation.attributes.password') }}</label>
				<div class="div_text">{!! Form::password('password', ['class' => 'form-control']) !!}</div>
				
				<div class="button_div">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" />&nbsp;Remember Me&nbsp;&nbsp;
					<input type="submit" name="Submit" value="Log In" class="buttons" />
				</div>
				<div align="right" class="link-text">Forgot password?&nbsp;
					<a href="{{ route('password/email') }}">Click here to reset</a>
				</div>
				<div align="right" class="link-text">New User?&nbsp;
					<a href="{{ route('register') }}">Click here to register</a></div>
				</fieldset>
		</form>
</div>		

	</div>	
	</div>
</div>	
<!---END CONTENT--->	
<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">New member registration</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Error:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.email') }}</label>
							<div class="col-md-6">
							    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
							<div class="col-md-6">
						    	{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="buttons" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>-->
@endsection