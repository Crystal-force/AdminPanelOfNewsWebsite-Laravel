<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserInfoController extends Controller
{
    public function index() {
      $user_data = DB::table('user_registers')->where('accept', 1)->orderBy('id', 'DESC')->get();
      return view('usermanagement')->with([
        'users' => $user_data
      ]);
    }

    public function usershow(Request $request) {
      $id = $request->get('id');
      $user_data = DB::table('user_registers')->where('id', $id)->first();
      if($user_data == null) {
        return redirect('user-management');
      }
      $get_data = DB::table('news_lists')->where('user_id', $user_data->id)->get();
      return view('profile')->with([
        'user' => $user_data,
        'news_data' => $get_data
      ]);
    }

    public function userremove(Request $request) {
      $user_id = $request->re_userid;
      $res = DB::table('user_registers')->delete($user_id);
      if($res == true) {
        return response()->json(['data'=>'1']);
      }
    }

    public function user_reject(Request $request) {
      $id = $request->reject_id;
      $res = DB::table('user_registers')->delete($id);
      if($res == true) {
        return response()->json(['data'=>'1']);
      }
    }

    public function new_show(Request $request) {
        $new_id = $request->get('id');
        $check_user = DB::table('user_registers')->where('id', $new_id)->first();
        return view('check_user')->with([
          'n_user' => $check_user
        ]);
    }

    public function acceptnew(Request $request) {
        $add_id = $request->add_id;
        $res = DB::table('user_registers')->where('id', $add_id)->update(array('accept'=>"1"));
        if($res == 1) {
          return response()->json(['data'=>'1']);
        }
    }

    public function allnewshow() {
        $all_data = DB::table('user_registers')->where('accept', '0')->orderBy('id', 'DESC')->get();
        return view('allnewusers')->with([
          'all_users' => $all_data
        ]);
    }

    public function newuserdetail(Request $request) {
      $user_id = $request->get('id');
      $individual_data = DB::table('user_registers')->where('id', $user_id)->first();
      return view('individualshow')->with([
          'individual' => $individual_data
      ]);
    }
}
