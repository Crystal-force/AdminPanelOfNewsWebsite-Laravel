<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
     public function index() {
       $total_users = DB::table('user_registers')->count();
       $total_news = DB::table('news_lists')->count();
       $total_categories = DB::table('category_lists')->count();
       $ciu_num = DB::table('news_lists')->where('category_list_id', 1)->count();
       $slp_num = DB::table('news_lists')->where('category_list_id', 2)->count();
       $hua_num = DB::table('news_lists')->where('category_list_id', 3)->count();
       $rio_num = DB::table('news_lists')->where('category_list_id', 4)->count();
       $tam_num = DB::table('news_lists')->where('category_list_id', 5)->count();
       $pol_num = DB::table('news_lists')->where('category_list_id', 6)->count();
       $det_num = DB::table('news_lists')->where('category_list_id', 7)->count();
       
       return view('dashboard')->with([
         'users' => $total_users,
         'news' => $total_news,
         'categories' => $total_categories,
         'ciu' => $ciu_num,
         'slp' => $slp_num,
         'hua' => $hua_num,
         'rio' => $rio_num,
         'tam' => $tam_num,
         'pol' => $pol_num,
         'det' => $det_num
       ]);
     }
}
