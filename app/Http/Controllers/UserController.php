<?php 

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use Session;
use App\User;
use Redirect;
use Auth;

class UserController extends Controller
{
 

  public function __construct(){

            $this->middleware('auth',['only'=>['index','create','edit']]);
        }




	public function index(Request $request){


     $status = $request->status;
     $name = $request->name;
     $email = $request->email;


        if($request->status=="active" || empty($request->status))
             $s_status=1;

         else 
             $s_status=0;


     
      $users=User::where('status', '=', $s_status)->where('name', 'like', '%' . $name . '%')->paginate(15);

     if($email!="")
        $users=User::where('status', '=', $s_status)->where('email', '=', $email)->paginate(15);

     $users->setPath('user-system?s_name='.$request->s_name.'&s_email='.$request->s_email.'&status='.$request->status);



      return view("menu.usersystem.listUsers")->with(compact('users','status'));

/*

     $status = $request->status;
     $name = $request->name;
     $email = $request->email;

     //dd($name);
    
       if($request->status=="active" || empty($request->status))
             $s_status=1;

         else 
             $s_status=0;


		$users=User::where('status', '=', $status)->where('name', 'like', '%' . $name . '%')->where('email', '=', $email)->paginate(15);

    
     $users->setPath('user-system?name='.$request->name.'&email='.$request->email.'&status='.$request->status);



	   	return view("menu.usersystem.listUsers")->with(compact('users','status')); */


		}




	public function create(){

   	   	return view("menu.usersystem.createUser");

					}



  public function create_account_from_index(){

     if (Auth::check())

       return Redirect::to('/main');

     else
      
      return view("menu.usersystem.createAccount");


          }


	public function store(CreateUserRequest $data){					
					

		$user = new User;


		    $user->name = $data->name;		    		   
		    $user->phone = $data->phone;
		    $user->email = $data->email;
        $user->password =  bcrypt( $data->password);
        $user->status = 1;

        if(isset($data->role))

            $user->role = $data->role;

        else 

            $user->role =2;    


    if ($user->save()){



         if (Auth::check()){ //in case user has been register by panel control

               Session::flash('message','User created successfully');

               return Redirect::to('/user-system?page='.$_SESSION['lastPage']);

         }else{  //in case user has been register by create new account, redirect and login automatic for the new member


              if(Auth::attempt(['email'=>$data->email,'password'=>$data->password,'status'=>1])){


                    Session::flash('message','Congratulations '.$data->name.', Your account has been created successfully, Welcome to your dashboard.');

                     return Redirect::to('/main');


              }else{


                return Redirect::back();


                   } 


            }
          
  
    }else{

          Session::flash('message-error','User was not created');
  
            if (Auth::check()) 

                return Redirect::to('/user-system/create');

            else 

                return Redirect::back();


          }



					}	



	 public function edit($id){


            $user=User::find($id);
      
            return view('menu.usersystem.editUser')->with(compact('user'));

   				 }



  public function update(EditUserRequest $data, $id){



        $user=User::find($id);

        $user->name = $data->name;       
        $user->role = $data->role;
        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->password = $data->password;



         if(empty($data->status))
          
              $user->status = 0;

         else

              $user->status = 1;

          
        if(!empty($data->password) && $data->password!="" )     
                  $user->password =  bcrypt($data->password);


        if ($user->save()){

               Session::flash('message','User edited successfully');

               return Redirect::to('/user-system?page='.$_SESSION['pageCurrent']);
        }else{

                Session::flash('message-error','User was not updated');
  
                return Redirect::back();
        }


    }


     public function destroy($id){

        $user = User::find($id);
        $deleted= User::destroy($id);


        if($deleted){
          
                Session::flash('message','User deleted successfully');
  
                return Redirect::to('/user-system');

        }else{

                Session::flash('message-error','User was no deleted');
  
                return Redirect::to('/user-system');

        }


        if (Request::ajax())
        {
            return Response::json(array (
                'success' => true,
                'msg'     => 'User ' . $user->email . ' was deleted successfully',
                'id'      => $user->id
            ));
        }
        else
        {
            return Redirect::route('/user-system');
        }


    } 				 												


}
