@extends('layouts.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Appointment Schedule</div>
				<div class="panel-body">
				<p>Appointment service is quick and easy</p>
				<a href="{{ route('logout') }}"><input type="button" name="Submit" value="Log Out" class="buttons" /></a> 
				<!--<span class="label label-warning">
					<a href="{{ route('logout') }}">LOGOUT</a>
				</span>-->
				@if(Session::has('flash_message'))
					{{Session::get('flash_message')}}
				@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection