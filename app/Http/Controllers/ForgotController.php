<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ForgotController extends Controller
{
    public function index() {
      return view('forgotpwd');
    }

    public function reset(Request $request) {
      $email = $request->reset_email;
      $name = $request->reset_name;
      $password = md5($request->reset_pwd);
      $date = "2020-10-26 17:07:48";

      $get_data = DB::table('users')->where('email', $email)->where('name', $name)->first();
      if($get_data == "") {
        return response()->json(['data'=>'0']);
      }
      $reset_id = $get_data->id;
      $reset_data = array('name' => $name, 'email' => $email, 'email_verified_at' => $date, 'password' => $password, 'remember_token' => $password, 'created_at' =>$date, 'updated_at' =>$date);
      $res = DB::table('users')->where('id', $reset_id)->update($reset_data);
      if($res == 0) {
          return response()->json(['data'=>'1']);        
      }
      else {
          return response()->json(['data'=>'2']);
      }
    }
}
