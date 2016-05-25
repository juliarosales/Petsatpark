
	<div class="col-lg-12"> 

		<div class="form-group"> 
			<b> {!!Form::label('Name')!!}</b> 	<font style="color:red">*</font>

			{!!Form::text('name',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Enter a name'])!!}
		</div>
	
	</div>



	<div class="col-lg-12"> 

		<div class="form-group"> 
			{!!Form::label('Email')!!}

			{!!Form::text('email',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Will use it for login'])!!}
		</div>

	</div>



	<div class="col-lg-12"> 

		<div class="form-group"> 

		{!!Form::label('Phone')!!}

		{!!Form::text('phone',null,['class'=>'form-control' , 'maxlength'=>'30','placeholder'=>'Enter your number phone' ])!!}

		</div>

	</div>



	<div class="col-lg-6"> 

		<div class="form-group"> 
			<b>{!!Form::label('Password')!!}</b>	 	<font style="color:red">*</font>

			{!!Form::password('password',['class'=>'form-control', 'maxlength'=>'20', 'placeholder'=>'Enter a  password'])!!}
		</div>

	</div>




	<div class="col-lg-6"> 

		<div class="form-group"> 
			<b>{!!Form::label('Confirm password')!!}</b>	 <font style="color:red">*</font>

			{!!Form::password('password_confirmation',['class'=>'form-control', 'maxlength'=>'20', 'placeholder'=>'Confirm password'])!!}
		</div>

	</div>


  @if (Auth::check())        

	<div class="col-lg-12"> 

		<div class="form-group"> 

			<b>{!!Form::label('Role')!!}</b>	    <font style="color:red">*</font>

			{!!Form::select('role', array('1' => 'Administrator', '2' => 'Customer', '3' => 'Staff'),null,['class'=>'form-control'])!!}
		
		</div>

	</div>

 @endif