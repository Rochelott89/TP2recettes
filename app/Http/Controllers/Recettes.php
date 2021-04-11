<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Recettes extends Controller
{
    //exo2.2 function pour view recettes




    function index() {
        //return view('recettes');




        //$recipes = Recipe::all();

        //return view('welcome', array('recipes' => $recipes
       // ));

        $recipes = \App\Models\Recipe::all();





        return view('recettes',array('recipes' => $recipes));

    }


    function show($recipe_name) {

       $recipe = \App\Models\Recipe::where('title',$recipe_name)->first(); //get first recipe with recipe_nam == $recipe_name


        return view('recettes.recette',array('recipe' => $recipe)); //Pass the recipe to the view

        }






    }









