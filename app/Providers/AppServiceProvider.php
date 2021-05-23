<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer('*', function($view) {
        $new_user = DB::table('user_registers')->where('accept', 0)->orderBy('id', 'DESC')->get();
        $count = count($new_user);
        $new_news = DB::table('news_lists')->where('status', 0)->orderBy('id', 'DESC')->get();
        $count_news = count($new_news);
        return $view->with(['noti_users'=>$new_user, 'count'=>$count, 'noti_news'=>$new_news, 'count_news'=>$count_news]);
      });
    }
}
