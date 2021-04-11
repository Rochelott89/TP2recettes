<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    //exo2.1 final return la vista 'welcome'
   function index() {
    //recuperamos los datos de nuestro modelo
    $recipes = \App\Models\Recipe::all();
    //$ids = \App\Models\Recipe::all();
    //aca deberiamos trabajar las 3 ultimas recetas


    //lo pasamos a la vista
    return view('welcome',array(
    'recipes' => $recipes

    ));

   }



}

