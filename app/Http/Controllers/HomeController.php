<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //exo2.1 final return la vista 'welcome'
   function index() {
    //recuperamos los datos de nuestro modelo
    $recipes = \App\Models\Recipe::all();
    //$ids = \App\Models\Recipe::all();



    //lo pasamos a la vista
    return view('recettes',array(
    'recipes' => $recipes

    ));

   }



}

