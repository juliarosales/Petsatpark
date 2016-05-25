@extends('layouts.layout_menu_principal')

@section('content')


<br>
   <div class="row">
           
          <div class="panel panel-bluedark" >
                 <div class="panel-heading">
                       <img src="{{asset('img/new_cart_box.png')}}" class="user_group">  <div class="divmanagement">My Cart -> List </div>
                   </div>

                    <div class="panel-body">

                        @include('alerts.success')
               
                       <br>

            
            {!! Form::open(['url' => 'my-cart', 'method' => 'GET']) !!}
   

              <div class="col-lg-9"> 

                  <div class="form-group"> 
                    {!!Form::text('s_field',null,[ 'class' =>"form-control", 'placeholder' => 'Search in my cart'])!!}
                  </div>

              </div>



            <div class="col-lg-3"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control btn-success" title="clic to search by advanced options"><i class="fa fa-shopping-cart fa-1x"></i> Buy all</button>
                 </div>

            </div>

        
           
      {!!Form::close()!!}



        <div class="tablescroll"> 

                  <div class="table-responsive">
                            
                           <table class="table table-hover" >
                                    <thead>
                                        <tr class="trblue">
                                            <th>Request Date</th>
                                            <th>Doc Num</th>
                                            <th>Number of Pages</th>
                                            <th>DtCode</th>
                                            <th>DtName</th>
                                            <th width="100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                        @if(count($carts)>0)

                                
                             @foreach($carts as $cart)

                                          <tr>
                                            <td>{{$cart->requestdate}} </td>
                                            <td>{{$cart->id_doc}} </td>
                                            <td>{{$cart->NumberOfPages}} </td>
                                            <td>{{$cart->DtCode}} </td>
                                            <td>{{$cart->DtName}} </td>

                                            <td>
                                            <a href="{{url('#')}}">
                                            {!!Form::button('<i class="fa fa-eye fa-1x"></i>',['class' =>"btn btn-success",'title' =>"Preview"])!!}</a>
                                           <a href="{{url('#')}}">
                                           {!!Form::button('<i class="fa fa-times fa-1x"></i>',['class' =>"btn btn-danger",'title' =>"Remove from cart"])!!}
                                           </a>

                                           </td>
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