<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\ImageGallary;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//login
//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/platform', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

//users
Route::get('/user', '\App\Http\Controllers\Userplatform@index');
Route::post('/user', '\App\Http\Controllers\Userplatform@create');
Route::put('/user{id}', '\App\Http\Controllers\Userplatform@update');
Route::get('/user/{id}', '\App\Http\Controllers\Userplatform@getDetail');



//Page1
Route::get('/page1', '\App\Http\Controllers\Page1Controller@index');
Route::post('/page1', '\App\Http\Controllers\Page1Controller@create');
Route::put('/page1/{id}', '\App\Http\Controllers\Page1Controller@update');
Route::delete('/page1/{id}', '\App\Http\Controllers\Page1Controller@soft_delete');
Route::get('/page1/{id}', '\App\Http\Controllers\Page1Controller@show');
Route::get('page1/{id}', '\App\Http\Controllers\Page1Controller@getDetail');
Route::post('/Page1/{id}', '\App\Http\Controllers\Page1Controller@restore');




//page2
Route::get('/page2', '\App\Http\Controllers\Page2Controller@index');
Route::post('/page2', '\App\Http\Controllers\Page2Controller@create');
Route::put('/page2/{id}', '\App\Http\Controllers\Page2Controller@update');
Route::delete('/page2/{id}', '\App\Http\Controllers\Page2Controller@soft_delete');
Route::get('/page2/{id}', '\App\Http\Controllers\Page2Controller@show');
Route::get('page2/{id}', '\App\Http\Controllers\Page2Controller@getDetail');
Route::post('/Page2/{id}', '\App\Http\Controllers\Page2Controller@restore');
// Route::delete('/page2/{id}', '\App\Http\Controllers\Page2Controller@soft_delete');
// Route::post('/Page2/{id}', '\App\Http\Controllers\Page2Controller@restore');

//page2
Route::get('/page3', '\App\Http\Controllers\Page3Controller@index');
Route::post('/page3', '\App\Http\Controllers\Page3Controller@create');
Route::put('/page3/{id}', '\App\Http\Controllers\Page3Controller@update');
Route::delete('/page3/{id}', '\App\Http\Controllers\Page3Controller@soft_delete');
Route::get('/page3/{id}', '\App\Http\Controllers\Page3Controller@show');
Route::get('page3/{id}', '\App\Http\Controllers\Page3Controller@getDetail');
Route::post('/Page3/{id}', '\App\Http\Controllers\Page3Controller@restore');
// Route::delete('/page2/{id}', '\App\Http\Controllers\Page2Controller@soft_delete');
// Route::post('/Page2/{id}', '\App\Http\Controllers\Page2Controller@restore');

//page2
Route::get('/page4', '\App\Http\Controllers\Page4Controller@index');
Route::post('/page4', '\App\Http\Controllers\Page4Controller@create');
Route::put('/page4/{id}', '\App\Http\Controllers\Page4Controller@update');
Route::delete('/page4/{id}', '\App\Http\Controllers\Page4Controller@soft_delete');
Route::get('/page4/{id}', '\App\Http\Controllers\Page4Controller@show');
Route::get('page4/{id}', '\App\Http\Controllers\Page4Controller@getDetail');
Route::post('/Page4/{id}', '\App\Http\Controllers\Page4Controller@restore');
// Route::delete('/page2/{id}', '\App\Http\Controllers\Page2Controller@soft_delete');
// Route::post('/Page2/{id}', '\App\Http\Controllers\Page2Controller@restore');
Route::get('images', [ImageController::class, 'index'])->name('images');
Route::post('images', [ImageController::class, 'upload'])->name('images');

Route::get('pelamars', [PelamarController::class, 'index'])->name('pelamars');
Route::post('pelamars', [PelamarController::class, 'upload'])->name('pelamars');


Route::post('upload',[ImageGallary::class,'saveImage']);
