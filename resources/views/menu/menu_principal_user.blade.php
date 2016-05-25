@extends('layouts.layout_menu_principal')

@section('content')

<br><br>
		<div class="space-menu">

				@include('alerts.success')

	  			

<a href="{{asset('/report-docs')}}">

     <div class="col-lg-4 col-md-6">

         <div class="panel boton-bluedark">
             <div class="panel-heading">
                    <div class="row">
                         <div class="col-xs-2">
                             <img src="{{asset('img/searchrep.png')}}"  class="height-78"> 
                         </div>

                         <div class="col-xs-9 text-right">
                             <div class="huge" >{{$docs}}</div>
                             <div >Search Records</div>
                         </div>
                    </div>
            </div>
        </div>
      </div>
    </a>


		</div>


@stop