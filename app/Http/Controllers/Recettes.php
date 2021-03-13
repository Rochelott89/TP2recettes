<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recettes extends Controller
{
    //exo2.2 function pour view recettes
   function index() {
        return view('recettes');

    }

}
