<?php

use Illuminate\Support\Facades\Route;
use gaiththewolf\lpmanager\Http\Controllers\MainController;

Route::group(['prefix' => config('lpmanager.route', 'lpmanager')],function () {
        if(config('lpmanager.use_middleware')){
            Route::group(['middleware' => config('lpmanager.use_middleware_name', 'isAdmin')], function () {
                Route::get('/', MainController::class);
            });
        }else{
            Route::get('/' , MainController::class );
        }
    }
);
