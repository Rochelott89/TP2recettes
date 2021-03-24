<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    //exo2.2 function pour view contact
   function index() {
        return view('contact');

    }

}
