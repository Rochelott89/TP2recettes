<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//controller exo.7
//Créez un nouveau contrôleur de type “ressource” d’administration des recettes qui va permettre
//l’affichage d’une liste complète des recettes ainsi que l’ajout, l’édition et la suppression d’une recette.


//https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers
class AdmRecettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              // get all the sharks
              $sharks = \App\Models\Recipe::all();

              // load the view and pass the sharks
              return view('sharks.index')
                  ->with('sharks', $sharks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
