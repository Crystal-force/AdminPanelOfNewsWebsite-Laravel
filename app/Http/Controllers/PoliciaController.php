<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PoliciaController extends Controller
{
  public function index() {
    $pol_data = DB::table('news_lists')->where('category_list_id', 6)->where('status', '1')->orderBy('id', 'DESC')->get();
    return view('policia')->with([
      'pol'=>$pol_data
    ]);
  }
}
