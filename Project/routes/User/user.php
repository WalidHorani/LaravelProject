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
        ->name('registerForm.createUser');

    Route::get('login/{lang?}', function(){return view('User.Auth.login'); })
        ->where(['lang'=>'^(en|ar)$'])
        ->name('loginForm');

    Route::post('login/{lang?}', function(){})
        ->where(['lang'=>'^(en|ar)$'])
        ->name('loginForm.createSession');

    Route::get('forgotPassword/{token}/{lang?}', function(){return view('User.Auth.forgotPassword'); })
        ->where(['lang'=>'^(en|ar)$'])
        ->name('forgotPasswordForm');

    Route::post('forgotPassword/{lang?}', function(){})
        ->where(['lang'=>'^(en|ar)$'])
        ->name('forgotPasswordForm.createNewPassword');

    Route::get('resetPassword/{token}/{lang?}', function(){return view('User.Auth.resetPassword'); })
        ->where(['lang'=>'^(en|ar)$'])
        ->name('resetPasswordForm');

    Route::post('resetPassword/{lang?}', function(){})
        ->where(['lang'=>'^(en|ar)$'])
        ->name('resetPassword.createNewPassword');

});

Route::middleware(['SetLang'])->group(function(){
    Route::get('verifyEmail/{lang?}',function(){return view('User.Auth.verifyEmail');})
        ->where(['lang'=>'^(en|ar)$'])
        ->name('verifyEmail');

    Route::get('confirmPassword/{lang?}', function(){return view('User.Auth.confirmPassword'); })
        ->where(['lang'=>'^(en|ar)$'])
        ->name('confirmPassword');

    Route::post('confirmPassword/{lang?}', function(){})
        ->where(['lang'=>'^(en|ar)$'])
        ->name('resetPassword.createNewPassword');
})
?>
