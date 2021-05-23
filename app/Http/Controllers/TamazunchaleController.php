<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TamazunchaleController extends Controller
{
    public function index() {
      $tam_data = DB::table('news_lists')->where('category_list_id', 5)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('tamazunchale')->with([
        'tam'=>$tam_data
      ]);
    }
}
