<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RioVerdeController extends Controller
{
    public function index() {
      $rio_data = DB::table('news_lists')->where('category_list_id', 4)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('rio')->with([
        'rio'=>$rio_data
      ]);
    }
}
