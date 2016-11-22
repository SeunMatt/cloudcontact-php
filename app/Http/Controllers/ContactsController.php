<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Log;
use App\Http\Controllers\Utils\Constants;


class ContactsController extends Controller
{
    
    public function __construct() {
        $this->middleware("isLoggedIn");
    }


    
    
    public function serveDashboard(Request $request) {
        
        $user = $request->user();
        $user_id = $user->id; 
        $username = $user->username;
        $email = $user->email;

        Log::info("user details = ". json_encode($user));

        
//        Log::info("hello Logger");
        
        $query = "SELECT * FROM contacts C WHERE C.user_id = ?";
        
        $contacts = DB::select($query, [$user_id]);
        
        $data = json_encode($contacts, JSON_UNESCAPED_UNICODE);
                
        return view("main", ["contacts"=>$contacts, "jsonData" => $data, "username"=>$username, "email"=>$email]);
        
    }
    
    
    public function handleNewContact(Request $req) {
    
        Log::info("Raw input data: ". json_encode($req->all()));
        
        $user_id = $req->session()->get(Constants::USER_ID);
        $date = date('Y-m-d H:i:s');
        
        $data = json_decode( json_encode($req->input("data")), true);
        
        $valArray = array();
        
        foreach($data as $key => $val) {
            array_push($valArray, $val);
            Log::info("val from insert = " . $val);
        }
        
        
        $query = "INSERT INTO contacts (first_name, middle_name, 
                  last_name, mobile, home, work, fax, email,
                  note, user_id, _created_at, _updated_at) values (?,?,?,?,?,?,?,?,?," .$user_id . ",?,?)";
            
        //add the values o updated and created at
        array_push($valArray, $date, $date);
        
        Log::info("val array contains " . count($valArray));
        
        $result = DB::insert($query, $valArray);
        
        if($result != null) {
            return response()->json(["responseText => Hello"], 200);    
        }
        
        return response()->json(["responseText => Error"], 500);
                
        
    }
    
    
    public function handleUpdateContact(Request $req) {
        
      
        Log::info("Raw input data: ". json_encode($req->all()));
        
        $data = json_decode( json_encode($req->input("data")), true);
                 
        $user_id = $req->session()->get(Constants::USER_ID);

        $date = date('Y-m-d H:i:s');
        
        $query = "UPDATE contacts C SET  
                  C.first_name = ?,
                  C.middle_name = ?, 
                  C.last_name = ?,
                  C.mobile = ?,
                  C.home = ?,
                  C.work = ?,
                  C.fax = ?,
                  C.email = ?,
                  C.note = ?,
                  C._updated_at = ' " . $date .
                  " ' WHERE C._id = ? AND C.user_id = ' ". $user_id . " ' ";
        
        $valArray = array();
        
        
        foreach($data as $key => $val) {
            array_push($valArray, $val);
            Log::info( $key . " = " . $val);
        }
        
        
        Log::info("val array contains " . count($valArray));
        
        $result = DB::update($query, $valArray);
        
        if($result > 0) {
            return response()->json(["responseText => Hello"], 200);
        }
        
        return response()->json(["Error => Error"], 500);
    }
    
    
    public function handleDeleteContact($id) {
        
       
        
        Log::info("id from handleDeleteContact = " . $id);
        
        if($id == null) { return redirect(Constants::GET_LOGIN); }
        
        $query = "DELETE FROM contacts WHERE _id = ?";
        
        $result = DB::delete($query, [$id]);
        
        if($result > 0) {
            return response("success", 200);
        }        
        
        return response("failed!", 500);
    }
    
    
    
    
}
