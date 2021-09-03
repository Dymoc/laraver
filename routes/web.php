<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

Route::get('/', function () {
    return view('index');
});

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('news', AdminNewsController::class);
    Route::resource('category', AdminCategoryController::class);
});

//news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news/');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show/');

Route::get('/news/category', [NewsController::class, 'category'])
    ->name('news.category/');

Route::get('/news/category/{category}', [NewsController::class, 'categoryOne'])
    ->name('news.category.one/');











//test
Route::get('hy', function () {
    return view('hello');
});

Route::get('hello', function () {
    return 'welcome';
});

Route::get('info', function () {
    return phpinfo();
});
