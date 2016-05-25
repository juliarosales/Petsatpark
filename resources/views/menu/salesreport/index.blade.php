@extends('layouts.layout_menu_principal')

@section('content')


<br>
   <div class="row">
           
          <div class="panel panel-bluedark" >
                 <div class="panel-heading">
                       <img src="{{asset('img/sales_report_256.png')}}" class="user_group">  <div class="divmanagement"> Report -> Sales Report</div>
                   </div>

                    <div class="panel-body">

                        @include('alerts.success')
               
                       <br>


            
            {!! Form::open(['url' => 'sales-report', 'method' => 'GET']) !!}
   

   			  <div class="col-lg-3"> 

                
                <div class="form-group"> 
                	{!!Form::date('date-start', null,['class'=>'form-control'])!!}	
                </div>


              </div>

              <div class="col-lg-3"> 

                
                <div class="form-group"> 
                   {!!Form::date('date-end', null,['class'=>'form-control'])!!}
                </div>


              </div>


              <div class="col-lg-3"> 

                  <div class="form-group"> 
                    {!!Form::text('s_email',null,[ 'class' =>"form-control", 'placeholder' => 'Search By User Email'])!!}
                  </div>

              </div>



            <div class="col-lg-1"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control" title="clic to search"><i class="fa fa-search fa-1x"></i></button>
                 </div>

            </div>

             <div class="col-lg-1"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control" title="Export to CSV"><i class="fa  fa-file-text-o fa-1x"></i></button>
                 </div>

            </div>

             <div class="col-lg-1"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control" title="Download Pdf file"><i class="fa  fa-download  fa-1x"></i></button>
                 </div>

            </div>

           
      {!!Form::close()!!}



        <div class="tablescroll"> 

                  <div class="table-responsive">
                            
                           <table class="table table-hover">
                                    <thead>
                                        <tr class="trblue">
                                            <th>#</th>
                                            <th>Sale Date</th>
                                            <th>User</th>
                                            <th>Confirmation Number</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                        @if(false)

                                 <?php $numeracion=0;?>



                             @foreach($users as $user)

                                          <tr>
                                            <td><?php echo ++$numeracion;?></td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->email}} </td>
                                            <td>{{$user->movil}} </td>
                                            <td><a href="{{url('user-system/'.$user->id.'/edit')}}">
                                           {!!Form::button('<i class="fa fa-search fa-1x"></i> Details',['class' =>"form-control btn btn-primary"])!!}</a></td>
                                              </tr>
     

                              @endforeach

                             @else 
                                No records found

                        @endif
                                      
                                    
                                    </tbody>
                                </table>

                  </div>
         

 		 </div>  

                        </div>
                        <div class="panel-footer">
                       Fill in the fields you want to search.
                        </div>
                    </div>
                  
           
            </div>

                    <!-- /.col-lg-4    ,'style' =>"background-color:#040B1F;"              -->

@stop