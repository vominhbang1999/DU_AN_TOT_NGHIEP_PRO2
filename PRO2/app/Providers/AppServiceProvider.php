<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\casi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view('*',function($view) 
        // {

        // $nhacviet = App\baihat::where([
        //         ['baihat.id_theloainhac','<>','7'],
        //         ['baihat.id_theloainhac','<>','8'],
        //         ['baihat.id_theloainhac','<>','2']
        //     ])
        //     ->whereMonth('baihat.created_at','=',$thanghientai)
        //     ->orderBy('solannghe','DESC')
        //     ->get();

        
        
        // $nhacaumi = App\baihat::where([
        //         ['baihat.id_theloainhac','=','2']
        //     ])
        //     ->whereMonth('baihat.created_at','=',$thanghientai)
        //     ->orderBy('solannghe','DESC')
        //     ->get();


        // $nhacchaua = App\baihat::where('baihat.id_theloainhac','=','7')
        //     ->orWhere('baihat.id_theloainhac','=','8')
        //     ->whereMonth('baihat.created_at','=',$thanghientai)
        //     ->orderBy('solannghe','DESC')
        //     ->get();
        // });
    }
}
