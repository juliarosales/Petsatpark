@extends('layouts.layout_menu_principal')

@section('content')

<br>

<br><br>


   <div class="row div-menu-admin" >


   <a href="{{asset('/user-system')}}">

     <div class="col-lg-4 col-md-6">

         <div class="panel boton-bluedark" >
             <div class="panel-heading">
                    <div class="row">
                         <div class="col-xs-2">
                            <img src="{{asset('img/User-group-1202174719.png')}}" class="height-78"> 
                         </div>

                         <div class="col-xs-9 text-right">
                             <div class="huge " >{{$users}}</div>
                             <div class="panel-title">Manage Users</div>
                         </div>
                    </div>
            </div>
        </div>
      </div>

    </a>




<a href="{{asset('/main')}}">

     <div class="col-lg-4 col-md-6">

         <div class="panel boton-bluedark" >
             <div class="panel-heading">
                    <div class="row">
                         <div class="col-xs-2">
                         <img src="{{asset('img/Search.png')}}"  class="height-78">                          
                         </div>

                         <div class="col-xs-9 text-right">
                             <div class="huge " >0</div>
                             <div class="panel-title">Appointments</div>
                         </div>
                    </div>
            </div>
        </div>
      </div>
    </a>

 
<a href="{{asset('/main')}}">

     <div class="col-lg-4 col-md-6">

         <div class="panel boton-bluedark" >
             <div class="panel-heading">
                    <div class="row">
                         <div class="col-xs-2">
                           <img src="{{asset('img/printer.png')}}"  class="height-78">
                         </div>

                         <div class="col-xs-9 text-right">
                             <div class="huge " >0</div>
                             <div class="panel-title">Print Report</div>
                         </div>
                    </div>
            </div>
        </div>
      </div>
    </a> 

   </div>

<br>

<br><br>

<br><br>

<br><br>

<br><br>

<br>
@stop