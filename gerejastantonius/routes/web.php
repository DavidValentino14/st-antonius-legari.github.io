<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Models\DataGereja;
use Illuminate\Support\Arr;

Route::get('auth/google',[ SocialiteController::class, 'googleLogin'])->name('auth.google');

Route::get('/', function () {
    return view('home', ['title'=>'Home', ]);
});

Route::get('/activity', function(){
    return view('activity', ['title'=>'Activity', 'dataGerejas'=> DataGereja::all()]);
});

Route::get('/activity/{dataGereja:slug}', function(DataGereja $dataGereja){
    return view('activityPage', ['title'=>'Activity Page', 'dataGereja' => $dataGereja]);
});