<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Pagination\Paginator;


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

        Paginator::useBootstrap();


         view()->composer('layouts.header_css', function ($view) {
         $homesetting = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();

            $view->homesetting = $homesetting;
          
        });

            view()->composer('layouts.footer_js', function ($view) {
         $footerdes = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();
         $slidesetdata = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();

            $view->footerdes = $footerdes;
            $view->slidesetdata = $slidesetdata;
          
        });

            view()->composer('layouts.footer_js', function ($view) {
         $socialicon = DB::table('social')->orderBy('id', 'asc')->get();

            $view->socialicon = $socialicon;
          
              });


         view()->composer('adminlayouts.admin_css', function ($view) {
           $countcontact = DB::table('contactus')
          ->select([
                'status',
                DB::raw("COUNT(status) as cuntcon"),
            ])
          ->groupBy('status')
          ->where('status','no')
          ->get();

            $view->countcontact = $countcontact;
          
              });



    
    }
}
