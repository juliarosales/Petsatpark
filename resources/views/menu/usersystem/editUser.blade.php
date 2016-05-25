@extends('layouts.layout_menu_principal')

@section('content')


<br>
                    <div class="row">
           
                        <div class="panel panel-bluedark" >
                            <div class="panel-heading">
                                <img src="{{asset('img/User-group-1202174719.png')}}" class="user_group">  <div class="divmanagement">Edit User</div>
                             </div>



                             <div class="panel-body" >

                                @include('alerts.error')
                                
                                @include('alerts.success')
	
                                {!!Form::model($user,['route'=>['user-system.update',$user->id], 'method' => 'PUT', 'class' => 'form'])!!}

	
                                @include('menu.usersystem.form.form')


                                  <div class="col-lg-4"> 

                                     <div class="form-group"> 

                                         {!!Form::checkbox('status', 'true',  $user->status )!!} Active 
 
                                       </div>



                                  </div>


  	<br>

	                               <div class="col-lg-12 botons-form" > 


                                      {!!Form::button(' <i class="fa fa-edit fa-1x"></i>  UPDATE',[ 'type'=>'submit',  'class' => 'btn btn-success' , 'style' => 'margin-right: 15px; margin-top: 0;'])!!}     

                                      
                                      {!!Form::model($user, array('route' => array('user-system.destroy', $user->id), 'method' => 'DELETE', 'class' => 'form'))!!}

                                       {!!Form::button(' <i class="fa fa-edit fa-1x"></i>  DELETE',[ 'type'=>'submit',  'class' => 'btn btn-danger' , 'style' => 'margin-right: 15px;', 'onclick' => "return confirm('Do you really want to delete this user?');"])!!} 
                                       
                                      {!!Form::close()!!}
                                        

                                        <a href="{{url('user-system')}}">{!!Form::button(' <i class="fa fa-arrow-circle-o-left fa-1x"></i> CANCEL',['class' => 'btn btn-details' , 'style' => 'margin-right: 15px;' ])!!}</a>
 

                                        {!!Form::button('<i class="fa fa-refresh fa-1x"></i> CLEAN',[ 'type'=> 'reset', 'class' => 'btn btn-details'])!!}     


	                                 </div>

	
                {!!Form::close()!!}

                        </div>
                        <div class="panel-footer">
                            Please complete all fields with   <font class="color-red">*</font>    </div>
                    </div>
                  
           
            </div>





@stop