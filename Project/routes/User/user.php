<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['guest','SetLang'])->group(function () {
    Route::get('/{lang?}',function(){return view('User.Landing.landing');})
                ->where(['lang'=>'^(en|ar)$'])
                ->name('landing');

    Route::get('register/{lang?}', function(){ return view('User.Auth.register'); })
                ->where(['lang'=>'^(en|ar)$'])
                ->name('registerForm');

    Route::post('register/{lang?}', function(){})
                ->where(['lang'=>'^(en|ar)$'])
                ->name('registerForm.createUser');;

    Route::get('login/{lang?}', function(){return view('User.Auth.login'); })
                ->where(['lang'=>'^(en|ar)$'])
                ->name('loginForm');

    Route::post('login/{lang?}', function(){})
                ->where(['lang'=>'^(en|ar)$'])
                ->name('loginForm.createSession');
});

?>
