<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Controllers\Utils\Constants;

class AuthController extends Controller
{
    //

    public function serveLoginPage() {
    	return view("signin");
    }

    public function doLogin(Request $req) {

    	$email = $req->email;
    	$password = $req->password;

    	$user_credentials = array("email"=>$email, "password" => $password);

    	if(Auth::attempt($user_credentials, false)) {

    		return redirect(Constants::GET_DASHBOARD);
    	}

    	else {

    		return redirect(Constants::GET_LOGIN)->with("status", "Username/Password Do Not Match");
    	}

    }


    public function doLogout() {

    	Auth::logout();
    	return redirect(Constants::HOME);
    }


    public function serveRegistrationPage() {
    	return view("signup");
    }


    public function doRegistration(Request $req) {

    	$username = htmlentities($req->username);
    	$email = htmlentities($req->email);
    	$password = htmlentities($req->password);

    	DB::table("users")->insert([
    		"email" => $email,
    		"username" => $username,
    		"password" => bcrypt($password)

    	]);

    	return redirect(Constants::GET_LOGIN)->with("status", "You can now login with your Username/Password");

    }


}
