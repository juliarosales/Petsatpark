@extends('layouts.layout_menu_principal')

@section('content')


<br>
   <div class="row">
           
          <div class="panel panel-bluedark panel-bluedark2" >
                 <div class="panel-heading">
                       <img src="{{asset('img/searchrep.png')}}" class="user_group">  <div class="divmanagement">Search Records</div>
                   </div>

                    <div class="panel-body">

                        @include('alerts.success')
               
                       <br>

            
            {!! Form::open(['url' => 'report-docs', 'method' => 'GET']) !!}
   

              <div class="col-lg-9"> 

                  <div class="form-group"> 
                    {!!Form::text('s_field',$request->s_field,[ 'class' =>"form-control", 'placeholder' => 'Search by all fields'])!!}
                  </div>

              </div>



            <div class="col-lg-3"> 

                 <div class="form-group"> 
                      <button type="submit" class="form-control" title="clic to search by advanced options"><i class="fa fa-search fa-1x"></i> Advanced Options</button>
                 </div>

            </div>

        
           
      {!!Form::close()!!}



        <div class="tablescroll"> 

                  <div class="table-responsive">
                            
                           <table class="table table-hover" >
                                    <thead>
                                        <tr class="trblue">
                                            <th  width="100px;">DocName</th>
                                            <th width="150px;">File Date</th>
                                            <th width="110px;">BookType</th>
                                            <th width="80px;">Book</th>

                                             <th width="50px;">Page</th>

                                            <th>Gantor</th>
                                            <th>Grantee</th>
                                            
                                            <th>Description</th>
                                            <th  width="110px;">N. Of Pages</th>
                                           
                                            <th width="100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                        @if(count($books)>0)

                                
                             @foreach($books as $book)

                                          <tr>
                                            <td>{{$book->DocName}} </td>
                                            <td>{{$book->RecordedDateTime}} </td>
                                            <td>{{$book->DtName}} </td>
                                            <td>{{$book->Book}} </td>
                                             <td>{{$book->Page}} </td>

                                            <td>
                                              {{$book->Grantor}} 
                                            </td>

                                            <td>
                                              {{$book->Grantee}} 
                                            </td>

                                            <td>
                                              {{$book->Description}} 
                                             </td>
                                                                                       
                                            <td>{{$book->NumberOfPages}} </td>

                                            <td>

                                           <!-- <a href="{{url('/preview-file?id='.$book->id.'')}}">
                                            {!!Form::button('<i class="fa fa-eye fa-1x"></i>',['class' =>"btn btn-success",'title' =>"Preview"])!!}</a> -->
                                             {!!Form::button('<i class="fa fa-eye fa-1x"></i>',['class' =>"btn btn-success prev",'title' =>"Preview" ,  'data-toggle' => 'modal' ,  'data-target' => '#popupAgregarFilo' ,'value'=>$book->DocName ])!!}

                                               <a href="{{url('#')}}">
                                           {!!Form::button('<i class="fa fa-shopping-cart  fa-1x"></i>',['type' =>'confirm("wanna add it");','class' =>"btn btn-primary",'title' =>"Add to cart"])!!}
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
<?php $_SESSION['pageCurrent']=$books->currentPage(); $_SESSION['lastPage']=$books->LastPage();  ?> 

    {!!$books->render()!!}
                        </div> 
                        <div class="panel-footer">
                       Fill in the fields you want to search.
                        </div>
                    </div>
                  
           
            </div>

                    <!-- /.col-lg-4    ,'style' =>"background-color:#040B1F;"              -->




    <div class="modal fade" id="popupAgregarFilo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> <font id="adreino"></font></h4>
      </div>
      <div id="nuevaAventura" class="modal-body">


<iframe src=""  id="ifrma" style='width:100%; height:500px; position: relative;' frameborder='0'></iframe>
    

           

      </div>
      <div class="modal-footer"> <center>
  
       <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button> </center>
        
      </div>
  

    </div>
  </div>
</div>                   
                 

@stop