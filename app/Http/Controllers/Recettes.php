<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recettes extends Controller
{
    //exo2.2 function pour view recettes



    function index() {
        //return view('recettes');

        $recipes = \App\Models\Recipe::all();

        return view('recettes',array('recipes' => $recipes));

         }

    function show($recipe_name) {

       $recipe = \App\Models\Recipe::where('recipe_name',$recipe_name)->first(); //get first recipe with recipe_nam == $recipe_name

        return view('recettes/single',array('recipe' => $recipe)); //Pass the recipe to the view

        }






    }









