<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('test', function () {
    return "Hello World!"; 
});

Route::redirect('/welcome', '/test');
Route::view('/test2', 'test.test'); // test/blade/php.blade.php

Route::get('test3/{name}', function ($name) {
    return "Hello ".$name; 
})->name('post.get');

Route::get('test4/{name?}', function ($name = null) {
    if($name == null) {
        return "Hello World!";
    } else {
        return "Hello ".$name; 
    }
});

//localhost/admin/welcome
//localhost/admin/user/
//localhost/admin/profile

Route::prefix('admin')
        ->name('admin.')
        ->group(function() {
    Route::view('/test1', 'test.test')->name('test1');
    Route::view('/test2', 'test.test')->name('test2');;
    Route::view('/test3', 'test.test')->name('test3');;
});

Route::post('/test', function () {
    return "Hello "; 
})->name('post.name');

// localhost:3000/test

// localhost:8000/admin/user
// localhost:8000/admin/user/test