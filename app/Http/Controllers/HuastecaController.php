<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HuastecaController extends Controller
{
    public function index() {
      $hua_data = DB::table('news_lists')->where('category_list_id', 3)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('huasteca')->with([
        'hua'=>$hua_data
      ]);
    }
}
