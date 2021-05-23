<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SlpController extends Controller
{
    public function index() {
      $slp_data = DB::table('news_lists')->where('category_list_id', 2)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('slp')->with([
        'slp'=>$slp_data
      ]);
    }
}
