@extends('layouts.layout_menu_principal')

@section('content')


<br>
   <div class="row">
           
          <div class="panel panel-bluedark">
                 <div class="panel-heading">
                       <img src="{{asset('img/searchrep.png')}}" class="user_group">  <div class="divmanagement"> Preview File</div>
                   </div>

                    <div class="panel-body" >

                        @include('alerts.success')
               
                       <br>


              <div class="col-lg-8"> 
               
                  <div class="form-group"> 
                  DocName  {!!Form::text('s_field',$docs->DocName,[ 'class' =>"form-control", 'placeholder' => 'Docs', 'disabled' => 'disabled'])!!}

                  </div>

              </div>

   <div class="col-lg-4"> 
               

                   <div class="col-lg-10"> 
                  <div class="form-group"> 
                    Number Of Pages {!!Form::text('s_field',$docs->NumberOfPages,[ 'class' =>"form-control", 'placeholder' => 'Docs', 'disabled' => 'disabled'])!!}
  
                  </div>  </div>




         <div class="col-lg-2"> 
              
                  <div class="form-group"> 
                   
                       <br>
                   {!!Form::button('<i class="fa fa-shopping-cart  fa-1x"></i>',[ 'type'=>'submit',  'class' => 'btn btn-success' , 'style' => 'margin-right: 15px; ' , 'title' => 'ADD TO CART'])!!}  
                  </div>

              </div>

              </div>

 <iframe src="{{asset('pdf/'.$docs->DocName.'.pdf')}}" style="width:200px; height:200px; position: relative;" frameborder="0"></iframe>
    
{!!Form::button('<i class="fa fa-shopping-cart  fa-1x"></i> PREVIEW',[ 'type'=>'submit',  'class' => 'btn btn-success' , 'style' => 'margin-right: 15px; ' , 'title' => 'ADD TO CART',  'data-toggle' => 'modal' ,  'data-target' => '#popupAgregarFilo' ])!!}  

        

              
                   <br>


                         <div class="col-lg-12 botons-form" > 


                                  <a href="{{url('/report-docs')}}">
                                  {!!Form::button(' <i class="fa fa-arrow-circle-o-left fa-1x"></i> CANCEL',['class' => 'btn btn-primary' , 'style' => 'margin-right: 15px;' ])!!}</a>
 
  

                         </div>
        
                        </div> 


                        <div class="panel-footer">
                       This is the preview.
                        </div>
                    </div>
                  
           
            </div>

                    <!-- /.col-lg-4    ,'style' =>"background-color:#040B1F;"              -->

 <div class="modal fade" id="popupAgregarFilo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> <font id="adreino">Preview</font></h4>
      </div>
      <div id="nuevaAventura" class="modal-body">


    
    <iframe src="{{asset('pdf/'.$docs->DocName.'.pdf')}}" style="width:100%; height:500px; position: relative;" frameborder="0"></iframe>
           

      </div>
      <div class="modal-footer"> <center>
  
       <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button> </center>
        
      </div>
  

    </div>
  </div>
</div>                   

@stop