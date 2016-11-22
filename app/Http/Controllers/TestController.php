<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

	public function __construct() {
		$this->middleware("role:Seun Matt");
	}


    public function index() {
    	echo "<br>Test Controller";

    }
}
