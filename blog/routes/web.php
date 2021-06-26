<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/category/{category_id}', function ($category_id) {
    $posts= DB::table('posts')->join('post_types','posts.post_type_id','=','post_types.id')
    ->join('users','posts.user_id','=','users.id')
    ->join('categories','post_types.category_id','categories.id')
    ->select('posts.*','post_type_name','name','category_id')
    ->where('category_id','=',$category_id)->orderBy('view','asc')->paginate(10);
    $categories=DB::table('categories')->where('id','=',$category_id)->get();
    $menu = DB::table('categories')->get();
    return view('app/categorypost',['posts'=>$posts,'categories'=>$categories,'menu'=>$menu]);
})->name('category');
Route::get('/contact', function () {
    return view('app/contact');
})->name('contact');
Route::prefix('admin')->group(function () {
    Route::resource('advs', AdvController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('posts', PostController::class);
    Route::resource('posttags', PostTagController::class);
    Route::resource('posttypes', PostTypeController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard');
    })->name('dashboard');
    Route::get('/', function () {
        return view('dashboard/dashboard');
    })->name('dashboard');
});