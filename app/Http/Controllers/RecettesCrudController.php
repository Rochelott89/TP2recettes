<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecettesCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recipe::latest()->paginate(5);

        return view('recettesCrud.index', compact('recettes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recettesCrud.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'date' => 'required',
            'status' => 'required'

        ]);

        Recipe::create($request->all());

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Recette créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recette)
    {
        return view('recettesCrud.show', compact('recette'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recette)
    {
        return view('recettesCrud.edit', compact('recette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recette)
    {
        $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);
        $recette->update($request->all());

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recette)
    {
        $recette->delete();

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Project deleted successfully');
    }
}
