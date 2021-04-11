<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Contact;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\Auth\LoginRequest;




class ContactController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //exo2.2 function pour view contact
    //getcontact
    //public function getContact() {

      //  return view('contact_us');
     //}



    public function createForm(Request $request) {
        return view('contact');
      }


    //agregadas las dos funciones siguientes
    public function ContactUsForm(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);


        Contact::create($request->all());


        return back()->with('success', 'Merci pour nous contacter!. Vous recevrez une réponse rapidement.');







    }
}
