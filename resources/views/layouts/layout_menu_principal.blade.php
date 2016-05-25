<!DOCTYPE html>
<html  xml:lang="en" lang="en">
<head>
    <title>Pets at Park</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="{{asset('sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('sbadmin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
     
       <link href="{{asset('sbadmin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{asset('plantilla/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
      

      <link href="{{asset('plantilla/css/footer_menu.css')}}" rel='stylesheet' type='text/css' />
            <link href="{{asset('plantilla/css/personalizado.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery -->
<link rel="stylesheet" href="{!! asset('css/theme_default.css') !!}">
</head>
<body>

         <div id="wrapper">

  
                  <nav class="navbar navbar-default navbar-static-top menu-bgcolor" role="navigation" >

                    <div class="page_title">
                      <div class="wrap">
                        <div class="page_title_image"></div>
                        <div class="page_title_text">
                          <h1>Dashboard - Pets at Park</h1>     
                        </div>
                        <div class="social_media">
                        <div class="textwidget">
                          <a href="https://www.facebook.com/pages/Pets-at-Park-LLC/1662208377348735?fref=ts" target="_blank"><img class="alignnone size-full wp-image-57" src="http://www.petsatpark.com/site/wp-content/uploads/2015/07/facebook.png" alt="facebook" width="44" height="44" /></a>
                          <a href="https://twitter.com/petsatpark" target="_blank"><img class="alignnone size-full wp-image-57" src="http://www.petsatpark.com/site/wp-content/uploads/2015/07/twitter.png" alt="twitter" width="44" height="44" /></a><a href="https://www.instagram.com/pets_at_park_llc/" target="_blank">
                      <img class="alignleft size-full wp-image-536" src="http://www.petsatpark.com/site/wp-content/uploads/2016/02/instagram.png" alt="instagram" width="44" height="44" /></a>
                      </div>           
                      </div>                        
                      </div>  

</div>
<div class="shadow">
     <table  class="table-menu-principal">
      <tr>
        <td> 
          <a style="" href="{{asset('/main')}}"> <i class="fa fa-dashboard  fa-fw"></i> Dashboard</a>
        </td>
        <td>
           <ul class="nav navbar-top-links navbar-right">
           <!-- /.dropdown -->
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              {!!Auth::user()->name!!} /

               @if(Auth::user()->role==1)Administrator @endif 

               @if(Auth::user()->role==2)Customer @endif 

               @if(Auth::user()->role==3)Staff @endif 

               <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>

               </a>
          <ul class="dropdown-menu dropdown-user">           
            <li><a href="{{asset('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
         </ul>
         </li>
         </ul>
         </td>
    </tr>
</table> 
</div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
</nav>

</div>
 
    
    <div id="main_content">
            
        @yield('content') 

                  
         </div>


        <script src="{{asset('sbadmin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="{{asset('sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('sbadmin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('sbadmin/dist/js/sb-admin-2.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <script src="{{asset('assets/js/admin.js')}}"></script>

     
   </body>
<br><br>
@include('layouts.footer')