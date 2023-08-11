<?php

use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\SigninAuth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'welcome');
Route::post("/signin", [Usercontroller::class, 'signin']);
Route::post("/signup", [Usercontroller::class, 'signup']);
Route::middleware([SigninAuth::class])->group(function (){
    Route::get('/todo', [Usercontroller::class, "list"]);;
    Route::get("/add", function(){
        return view("todoform");
    });
    Route::get('/complete', [Usercontroller::class, "complete"]);;
    Route::post("/add", [Todocontroller::class, "add"]);
    Route::get("/delete/{id}", [Todocontroller::class, "delete"]);
    Route::get("/done/{id}", [Todocontroller::class, "done"]);
    Route::get("/signout", function(){
        session()->forget("signin");
        return redirect("/");
    });

});
