<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $articles = DB::table('articles')->get();
  //  $articles = DB::table('articles');
    // $email = DB::table('users')->where('name', 'John')->value('email');
    // ->where('name', 'nahid')->first();
   // dd($email);
    dd($articles);
    return view('index');
});
Route::get('/shop-item', function () {
    return view('shop-item');
});

Route::prefix('/app')->group(function (){
    Route::get('/{article}/{user}', function ($article){

        return view('index' , [
            'title' => $article,
            'status' => true,
            'articles' =>[
                'article 1',
                'article 2',
                'article 3' 
            ],
            'body' => "<script>console.log('hello rockket')</script>"
        ]);
    });
    
    Route::get('/user', function (){
    
        return  '---usee--';
    });
    Route::get('/{user}', function ($user){
    
        return $user. '-----' ;
    });
    Route::get('/', function (){
    
        return  '-----' ;
    });
});

