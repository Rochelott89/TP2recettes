<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\ContactRequest;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    public function create()
    {
        return view('contact');
    }

    //On injecte dans la méthode une instance de la classe ContactRequest que l’on a précédemment créée.
    //Si la validation échoue parce qu’une règle n’est pas respectée c’est la classe ContactRequest qui s’occupe de tout.
    //Elle renvoie le formulaire en complétant les contrôles qui étaient corrects et
    //crée une variable $errors pour transmettre les messages d’erreurs qu’on
    //utilise dans la vue.

    public function store(ContactRequest $request)
    {
        return view('confirm');
    }


*/


}
