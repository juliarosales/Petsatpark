<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>DPS - Home</title>
                    
    <link href="{{asset('sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('sbadmin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('sbadmin/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('sbadmin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('plantilla/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('plantilla/js/jquery.min.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('plantilla/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href="{{asset('plantilla/css/personalizado.css')}}" rel='stylesheet' type='text/css' />

    <script src="{{asset('plantilla/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
               </script>    
</head>

<body>
     <div class="header">
           <div class="container header_top">
                <div class="logo">
                     <a href="{{asset('/principal')}}">
                  
                         <img class="logito" src="{{asset('img/loguito.png')}}">
   
                         <img  class="countylogo" src="{{asset('img/countylogo.png')}}">
                         </a>
                </div>

                <div class="menu">

                  @if(Session::has('message-error'))
                        <font class="color-red-msj">{{Session::get('message-error')}}</font><br>
                
                  @endif


                    {!!Form::open(['route'=>'login.store','method'=>'POST','id'=>'login_form'])!!}

                        <table >
                            <tr >
                                <td ><input style="" class="form-control" placeholder="User name" type="text" name="username" value="" size="20" maxlength="" /> 
                                </td>

                                <td> <input type="password" class="form-control btnp-index" placeholder="Password" name="password" value="" size="20" maxlength="" /> 
                                </td>

                                <td>
                                 <button class="btn btn-primary btnlogin-index" type="submit" value="LOGIN" size="" maxlength="" >LOGIN</button> 
                                </td>

                            </tr>


                            <tr>

                                 <td>

                                  <a  href="{{asset('/create-account')}}">Create account</a>

                                 </td>

                                 <td>

                                     <a class="forgotpw-h" href="{{asset('/forgotpw')}}">Forgot your password?</a>
 
                                 </td>


                                    <td>

            
                                    </td>

                            </tr>

                            </table>
                         
                       {!!Form::close()!!}  
            
                </div>  

                <div class="clearfix"> </div>
                <!----//End-top-nav---->
             </div>
        </div>
    <div class="main">
    
    @yield('content')
              
        </div>

<br>    <br>
@include('layouts.footer')