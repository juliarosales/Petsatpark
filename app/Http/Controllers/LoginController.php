<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\User;
use App\Docdetail;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller{


  public function __construct(){

            $this->middleware('auth',['only'=>['menu','masterdata']]);
        }



         public function index(){


                 if (Auth::check()){

                            return Redirect::to('principal');

                 }else{

                          Session::flash("message-error","First login");

                          return Redirect::to('/login');

                             }
     
   			 }



     public function forgotpw(){

         if (Auth::check())

             return Redirect::to('/principal');

         else
      
              return view('forgotpw.resetpw');
        

         }


	   public function store(LoginRequest $datos){


		      if(Auth::attempt(['email'=>$datos->username,'password'=>$datos->password,'status'=>1]))

			         return Redirect::to('/principal');

			     else{

			         	Session::flash('message-error','User or password wrong');
				        return Redirect::to('/');

			             }

			}



	   public function menu(){

               
                $users = User::count('id');    
              
               if(Auth::user()->role==1){

                  return view('menu.menu_principal_admin')->with(compact('users'));
                 

                }else{

			            if(Auth::user()->role==2){
                    
                    Session::flash('flash_message', 'Mensaje de prueba');
                    return Redirect::to('/appointment');
                   
                  }
                }
          


			 }


		public function logout(){


            Auth::logout();
            
            return Redirect::to('/');

             }


        public function masterdata(){

            return view('menu.masterdata');# code...

             }



}
