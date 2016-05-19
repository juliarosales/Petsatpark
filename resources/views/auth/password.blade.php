@extends('layout')

@section('content')
<style type="text/css">
	
	#email {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px !important;
    color: #555555;
    display: block;
    font-size: 14px;
    height: 34px;
    padding: 6px 12px;
    width: 50%;
}
</style>

<div class="wrap">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="hidden-xs hidden-sm">
<div class="textwidget">
<h2>Our Services</h2>
<ul class="left_navigation">
<li>
<a href="http://www.petsatpark.com/site/services/angels-reiky-therapy/">Angels & Reiky Therapy</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/pets-at-park-taxi/">Pets at Park Taxi</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/senior-dog-relax-package/">Senior Dog Relax Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/pets-at-park-package/">Pets at Park Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/daily-dog-jogging-and-run-package/">Dog Jogging & Run Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/daily-walking-package/">Daily Walking Package</a>
</li>
</ul>
<img class="alignleft size-full wp-image-466" width="291" height="70" alt="gps-satellite-tracking" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/gps-satellite-tracking.png">
<div class="clear"></div>
<img class="alignleft wp-image-296 size-full" width="90" height="83" alt="eco-logo" src="http://www.petsatpark.com/site/wp-content/uploads/2015/08/eco-logo.png">
<img class="alignright wp-image-410 size-full" width="90" height="90" alt="" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/napps.png">
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner ">
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h4>Reset Password</h4>
<div id="wpmem_reg">

<form class="form-horizontal" role="form" method="POST" action="{{ route('password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
<legend>Reset Password</legend>
@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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
<label class="text" for="email">
E-Mail Address
<span class="req">*</span>
</label>
<div class="div_text">
<input type="email" class="username" name="email" value="{{ old('email') }}" id="email">
</div>
<div class="clear"></div>
<div class="button_div">
<input class="buttons" type="submit" value="Send Password Reset Link" name="submit">
</div>
<div class="req-text">
<span class="req">*</span>
Required field
</div>
</fieldset>
</form>
</div>
<p></p>
</div>
<p></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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

					<form class="form-horizontal" role="form" method="POST" action="{{ route('password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection