<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Validator;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use  Hash;
use App\User;
use DB;

class HomeController extends Controller
{


	public function showLogin()
	{
	    // show the form
	    //return View::make('login');
	    return view('auth.login');
	}

	public function doLogin()
	{
		//$errormsg='<span style="color:red;font-size: 250%;text-align: center;padding:20%;">Wrong Password</span>';


    	$email = $_POST['email'];
    	$password = $_POST['password'];
		   // parse_str($formdatas);
		//return $email."" .$password;

				// validate the info, create rules for the inputs
		$rules = array(
		    'email'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {


		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		        //echo $errormsg; 
		       // return view('auth.login');

		} else {

		    // create our user data for the authentication
		    $userdataadmin = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password'),
		        'role'		=> 'admin'
		    ); 
		    $userdataemployee = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password'),
		        'role'		=> 'employee'
		    );
		    $userdata1 = array(
		        'email'     =>$email,
		        'password'  => 	$password
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdataadmin)) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        // return Redirect::to('secure');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        //echo 'SUCCESS!';
		        return view('londrymaster');
		        //return  "SUCCESS";

		    } if (Auth::attempt($userdataemployee)) {

		    	//return view('londrymaster');
		    	return  "employee";
		    }
		    else {        

		        // validation not successful, send back to form
		        //echo $errormsg; 
		        return view('auth.login');
		        //return Redirect::to('login');

		    }

		}
	}





			// app/controllers/HomeController.php
		public function doLogout()
		{
		    Auth::logout(); // log the user out of our application
		    return Redirect::to('login'); // redirect the user to the login screen
		}


		public function createuser(Request $request){

			$role = $_POST['role'];
			//return $role;



			$rules = array(
			    'name'    => 'required',
			    'role'    => 'required',
			    'email'    => 'required|email', // make sure the email is an actual email
			    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);
			return  ($validator);

			// if the validator fails, redirect back to the form
			if ($validator->fails()) {


				 return Redirect::to('register')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			}else{


		     		// $request->merge(['password' => Hash::make($request->password)]);
			        //$request->merge(['role' => $request->role ]);
		        
		        
			        //$user = User::create($request->all());
					/*return User::create([
			            'name' => $request['name'],
			            'email' => $request['email'],
			            'role' => $request['role'],
			            'password' => bcrypt($request['password']),
			        ]);*/
					DB::table('users')->insert([
			            'name' => $request['name'],
			            'email' => $request['email'],
			            'role' => $request['role'],
			            'created_at' => (DB::raw('CURRENT_TIMESTAMP')),
			            'updated_at' => (DB::raw('CURRENT_TIMESTAMP')),
			            'password' => bcrypt($request['password']),
			        ]);


			        // return Redirect::to('register')
				       //  ->withErrors("added") // send back all errors to the login form
				       //  ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

			        //return $role;



			}








	  

		}


		public function showcreateuser(){

			return view('auth.register');
	    

		}

		public function deleverynotepdf(){

			return view('deleverynotepdf');
	    

		}
		public function dbbackup(){

			return view('dbbackup');
	    

		}
}
