@extends('layouts.layout_menu_principal')

@section('content')


<br>

      <div class="row" >
           
                <div class="panel panel-bluedark" >
                       <div class="panel-heading">
                           <img class="user_group" src="{{asset('img/User-group-1202174719.png')}}">  <div class="divmanagement">  Create User</div>
                        </div>


                     <div class="panel-body" >

                        @include('alerts.error')

                        @include('alerts.success')
	
                        {!!Form::open(['route'=>'user-system.store','method'=>'POST'])!!}

	
                        @include('menu.usersystem.form.form')


	     <br>


	                       <div class="col-lg-12 botons-form" > 


                              {!!Form::button('<i class="fa fa-save fa-1x"></i> REGISTER',[ 'type'=>'submit',  'class' => 'btn btn-success' , 'style' => 'margin-right: 15px; margin-top: 0px;' ])!!}     


                                  <a href="{{url('user-system')}}">
                                  {!!Form::button(' <i class="fa fa-arrow-circle-o-left fa-1x"></i> CANCEL',['class' => 'btn btn-primary' , 'style' => 'margin-right: 15px;' ])!!}</a>
 

                                  {!!Form::button(' <i class="fa fa-refresh fa-1x"></i> CLEAN',[ 'type'=> 'reset', 'class' => 'btn btn-primary' ])!!}     

	                       </div>

	
                  {!!Form::close()!!}

                        </div>
                        <div class="panel-footer">
                            Please complete all fields with   <font class="color-red">*</font>    </div>
                    </div>
                  
           
            </div>





@stop