<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Recettes;

//use App\Models\Recipe;

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

//Route::get('/', function () {

Route::get('/', [HomeController::class, 'index']);

    //return view('welcome');
//});


//$recipes = \App\Models\Recipe::all();


//posible exo 4.2 route recettes
//uso de parametros entregados en TP

 Route::get('/recettes', function () {


      //$recipes = \App\Models\Recipe::all();

        //$recipes = Recipe::all();

        //return view('welcome',array(
        //'recipes' => $recipes

    return view('recettes');



 });










    //return view('recettes');
    //});




Route::get('/contact', function () {
        return view('contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//exo 5, après controller Recettes

//Route::get('/recettes/{url}'
Route::get('/recettes/{url}', [Recettes::class, 'show']);




require __DIR__.'/auth.php';
