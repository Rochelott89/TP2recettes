<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Recettes;
use App\Http\Controllers\AdmRecettesController;
use App\Http\Controllers\ContactController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RecettesCrudController;


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

Route::get('/recettes', [Recettes::class, 'index']);


    // $recipes = \App\Models\Recipe::all();

        //$recipes = Recipe::all();

        //return view('welcome', array('recipes' => $recipes
       // ));

   //return view('recettes');














    //return view('recettes');
    //});



    //route de contact, necesario para exo.6
/*Route::get('/contact', function () {
     return view('contact');
});*/


Route::get('/contact-us', function () {
    return view('contact-us');
});

/*
Route::get('/contact-us', 'Contact@getContact');

Route::post('/contact-us', 'Contact@saveContact');

*/

//exo.6

Route::get('/contact', [ContactController::class, 'createForm']);

Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//exo 5, après controller Recettes

//Route::get('/recettes/{url}'
Route::get('/recettes/{title}', [Recettes::class, 'show']);



//exo.7 'admin/recettes'
//  Route::resource('/recipes', AdmRecettesController::class);



//exo.complementario Socialite Facebook
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


//nos falta la vista /login **en realidad ya esta creada en auth/login
/*Route::get('/login', 'Web\AppController@getLogin' )
      ->name('login')
      ->middleware('guest');*/



//exo.7 este si funciona
Route::resource('projects', ProjectController::class);

//exo.7 definitivo poner al final, cambiar projects
Route::resource('recettesCrud', RecettesCrudController::class);

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/{provider}/callback','SocialController@Callback');

//exo.sup.6
Route::get('images', [ ImageController::class, 'index' ]);
Route::post('images', [ ImageController::class, 'store' ])->name('images.store');



/*Route::get( '/login/{social}', 'Web\AuthenticationController@getSocialRedirect' )
      ->middleware('guest');

Route::get( '/login/{social}/callback', 'Web\AuthenticationController@getSocialCallback' )
      ->middleware('guest');*/


//qui va permettre l’affichage d’une liste complète des recettes
//ainsi que l’ajout, l’édition et la suppression d’une recette.
/*
Route::resource('/recipes', AdmRecettesController::class)->except([
    'show', 'create', 'edit', 'destroy'
    ]);*/




require __DIR__.'/auth.php';
