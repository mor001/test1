<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('subdomain');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {
      echo 'Hello '.$request->subdomain;
      //var_dump(func_get_args());
        /*

http://account1.laravel.localhost/sample/1にアクセスすると

            array(2) { [0]=> string(8) "account1" [1]=> string(1) "1" }

            というような結果になる
        */
    }
}
