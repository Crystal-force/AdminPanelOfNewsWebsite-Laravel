<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\User;

class LoginController extends Controller
{
  
    public function login(Request $request) {
      $admin_name = $request->admin_name;
      $admin_pwd =md5($request->admin_pwd);
   
      $search_res = DB::table('users')->where('name', $admin_name)->where('password', $admin_pwd)->first();
      dd($search_res);
      Session::put('user_id', $search_res->id);
      if(isset($search_res)){
        return response()->json(['data'=>'1']);
      }
        return response()->json(['data'=>'0']);
      }

    public function logout() {
        return Redirect::to('/'); //redirect back to login
    }
}
