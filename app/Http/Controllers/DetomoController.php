<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DetomoController extends Controller
{
    public function index() {
      $det_data = DB::table('news_lists')->where('category_list_id', 7)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('detomo')->with([
        'det'=>$det_data
      ]);
    }
}
