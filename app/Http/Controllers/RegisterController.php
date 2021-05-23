<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index() {
      return view('register');
    }

    public function register(Request $request) {
      $email = $request->email;
      $name = $request->name;
      $password = md5($request->password);
      $date = "2020-10-26 17:07:48";

      $name_search = DB::table('users')->where('name', $name)->first();
      $email_search = DB::table('users')->where('email', $email)->first();
      if(isset($name_search) || isset($email_search)) {
        return response()->json(['data' => '0']);
      }
      
      $data = array('name' => $name, 'email' => $email, 'email_verified_at' => $date, 'password' => $password, 'remember_token' => $password, 'created_at' =>$date, 'updated_at' =>$date);
      $res = DB::table('users')->insert($data);
      if($res == true) {
        return response() -> json(['data' => '1']);
      } 
    }
}
