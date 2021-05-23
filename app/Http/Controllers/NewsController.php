<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function index() {
      $ciu_data = DB::table('news_lists')->where('category_list_id', 1)->where('status', '1')->orderBy('id', 'DESC')->get();
      return view('ciudadcalles')->with([
        'ciu'=>$ciu_data
      ]);
    }

    public function newsdetail(Request $request) {
      $id = $request->get('id');
      $detail_news = DB::table('news_lists')->where('id', $id)->first();
      $each_user = DB::table('user_registers')->where('id', $detail_news->user_id)->first();
      return view('newsdetail')->with([
        'detail_news' => $detail_news,
        'user' => $each_user
      ]);
    }

    public function removenews(Request $request) {
      $news_id = $request->remove_id;
      $res = DB::table('news_lists')->delete($news_id);
      if($res == true) {
        return response()->json(['data'=>'1']);
      }
    }

    public function totalnews() {
      $total_data = DB::table('news_lists')->orderBy('id', 'DESC')->get();
      return view('totalnews')->with([
        'total_news' => $total_data
      ]);
    }

    public function new_news(Request $request) {
      $accept_id = $request->get('id');
      $accept_news = DB::table('news_lists')->where('id', $accept_id)->first();
      $news_user = DB::table('user_registers')->where('id', $accept_news->user_id)->first();
      
      return view('check_news')->with([
        'n_news'=>$accept_news,
        'news_user'=>$news_user
      ]);
    }

    public function publishnews(Request $request) {
      $publish_id = $request->news_id;
      $edit_content = $request->editcontent;
      $edit_title = $request->edittitle;
        $res = DB::table('news_lists')->where('id', $publish_id)->update(array('title'=>$edit_title, 'content'=>$edit_content, 'status'=>"1"));
        if($res == 1) {
          return response()->json(['data'=>'1']);
        }
    }

    public function addnewsshow() {
      $added_news = DB::table('news_lists')->where('status', '0')->get();
      return view('addednewslist')->with([
        'added_news'=>$added_news
      ]);
    }

    public function removenewnews(Request $request) {
      $id = $request->new_newsid;
      $res = DB::table('news_lists')->where('id', $id)->delete();
      
      if($res == '1') {
        return response()->json(['data'=>'1']);
      }
      else {
        return response()->json(['data'=>'0']);
      }
    }
}
