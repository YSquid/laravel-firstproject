<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

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
    return view('welcome');
});

//Route to users
Route::get('/users', function () {
    return view('home');
});

//Laravel 8 Method 1

//second argument is a controller we pass in, specified that its a class
//'index' is the function on that class that we are calling 
//basically this does the same thing as returning the view, but additional logic could ahppen in the controll files function
// Route::get('/products', [ProductsController::class, 'index']);

//same as above, but naming the route as products
Route::get('/products', [ProductsController::class, 'index'])->name('products');



//Pattern is integer
//where function takes param as first arg, then pattern as second. Here we match for 1 or more integers
// Route::get('/products/{id}', [ProductsController::class, 'show']) -> where('id', '[0-9]+');

//Pattern is string plus integer allowed
//Passed an array into where function to define pattern for each route param
// Route::get('/products/{name}/{id}', 
// [ProductsController::class, 'show'])->where([
//     'name' => '[a-zA-Z]+',
//     'id' => '[0-9]+'
// ]);


//Laravel 8 Method 2 - same output as above

// Route::get('/products', 'App\Http\Controllers\ProductsController@index');



//Route to users - array - which is converted to JSON
// Route::get('/users', function() {
//     return ['php', 'html', 'laravel'];
// });

//Route to users -returning a JSON object using responses json method (converts ass. array to JSON)
// Route::get('/users', function() {
//     return  response()->json([
//         'name' => 'ahmad',
//         'course' => 'laravel beginners to advanced'
//     ]);
// });

//Route returning a redirect function - here returning to home
// Route::get('/users', function() {
//     return redirect('/');
// });


// ==== ROUTES WITH MORE COMPLEX CONTROLLERS EXAMPLES ======

Route::get('/pages', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// ==== POSTS ENDPOINTS ===/

Route::get('/posts', [PostsController::class, 'index']);