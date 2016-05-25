@extends('layouts.layout_menu_principal')

@section('content')

<br>
   <div class="row">
           
          <div class="panel panel-bluedark" >
                 <div class="panel-heading">
                       <img src="{{asset('img/User-group-1202174719.png')}}" class="user_group">  
                       <div class="divmanagement">Website Users List</div>
                   </div>

                    <div class="panel-body">

                        @include('alerts.success')

                        <a href="{{url('user-system/create')}}">

                         <button class="btn btn-success adduser"> 
                        
                           <img id="btnimguser" src="{{asset('img/user.png')}}" >
                            <b >Add new user !</b>

                        </button> </a>
               
                       <br>


            
            {!! Form::open(['route' => 'user-system.index', 'method' => 'GET', 'role' => 'search']) !!}
   
              <div class="col-lg-4"> 

                
                <div class="form-group"> 
                   {!!Form::text('name',null,[ 'class' =>'form-control', 'placeholder' => 'Search By Name'])!!}
                </div>


              </div>


              <div class="col-lg-4"> 

                  <div class="form-group"> 
                    {!!Form::text('email',null,[ 'class' =>'form-control', 'placeholder' => 'Search By Email'])!!}
                  </div>

              </div>


              <div class="col-lg-3"> 

                 <div class="form-group"> 
                    <select name="status" class="form-control" >
                        <option value="active" @if($status=="active")selected @endif >Active Users</option>
                        <option value="inactive" @if($status=="inactive")selected @endif>Inactive Users</option>
                    </select>
                 </div>

              </div>


            <div class="col-lg-1"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control" title="clic to search"><i class="fa fa-search fa-1x"></i></button>
                 </div>

            </div>


      {!!Form::close()!!}



        <div class="tablescroll"> 

                  <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="trgreen">
                                            <th align="center">#</th>
                                            <th align="center">Name</th>
                                            <th align="center">Email</th>
                                            <th align="center">Phone</th>
                                            <th align="center">Role</th>
                                            <th align="center">Action</th>
                                            <th align="center"></th>

                                        </tr>
                                    </thead>
                                    <tbody>


                        @if(count($users)>0)

                                 <?php $numeracion=0;?>



          	            @foreach($users as $user)

                                          <tr data-id="{{ $user->id }}">
                                            <td><?php echo ++$numeracion;?></td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->email}} </td>
                                            <td>{{$user->phone}} </td>
                                            <td>@if ($user->role==1)Administrator @endif   
                                            @if ($user->role==2)Customer @endif
                                            @if ($user->role==3)Staff @endif
                                            
                                            </td>

                                            <td><a href="{{url('user-system/'.$user->id.'/edit')}}">
                                           {!!Form::button('<i class="fa fa-search fa-1x"></i> Details',['class' =>"form-control btn btn-details"])!!}</a>
                                           </td>
                                            <td>
                                            <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete" onclick="return confirm('Do you really want to delete this user?');">
                                            Delete</a>
                                            </td>
                                      			  </tr>
  	 

                           @endforeach

                             @else 
                                No records found

                        @endif
                                      
                                    
                                    </tbody>
                                </table>
                            </div>
         

    </div>  <?php $_SESSION['pageCurrent']=$users->currentPage(); $_SESSION['lastPage']=$users->LastPage();  ?> 

    {!!$users->render()!!}


                        </div>
                        <div class="panel-footer">
                            Clic over button details to edit it.
                        </div>
                    </div>
                  
           
            </div>


                    <!-- /.col-lg-4    ,'style' =>"background-color:#040B1F;"              -->
               

{!!Form::open(array('route' => array('user-system.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete'))!!}
{!!Form::close()!!}



@stop

