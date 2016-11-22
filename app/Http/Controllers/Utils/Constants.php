<?php

namespace App\Http\Controllers\Utils;
    
class Constants {
    
    //PATH Constants
    const HOME = "/";
    const GET_LOGIN = "/login";
    const DO_LOGIN = "/login"; //uses post method
    const GET_LOGOUT = "/logout";
    const GET_SIGNUP = "/signup";
    const DO_SIGNUP = "/signup";
    const GET_DASHBOARD = "/contacts/";
    
    const POST_CONTACT = "/contact/";
    const PUT_CONTACT = "/contact/";
    const DELETE_CONTACT = "/contact/{id}";
    
    //Constants used in SESSION
    const USER_ID = "USER_ID";
    const USERNAME = "USERNAME";
    const EMAIL = "EMAIL";
    
    
    
    
}












?>