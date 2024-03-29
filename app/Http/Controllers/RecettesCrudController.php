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
            //'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'date' => 'required',
            'status' => 'required'

        ]);

        Recipe::create($request->all());

       // $imageName = time().'.'.$request->image->extension();

        //$request->image->move(public_path('images'), $imageName);

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Recette créée avec succès.');

          /*  //ver si es recettes/images o recette/images o recipes/images
        $path = $request->file('image')->store('images');
        $recette = new Recipe;
        $recette->author_id = $request->author_id;
        $recette->title = $request->title;
        $recette->image = $path;
        $recette->content = $request->content;
        $recette->ingredients = $request->ingredients;
        $recette->url = $request->url;
        $recette->tags = $request->tags;
        $recette->date = $request->date;
        $recette->status = $request->status;

        $recette->save();

        return redirect()->route('recettesCrud.index')
                        ->with('success','Post has been created successfully.');*/



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recette = \App\Models\Recipe::find($id);

        return view('recettesCrud.show', compact('recette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recette = \App\Models\Recipe::find($id);

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
            //'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);
            /*
        $recette->author_id = request("author_id");
        $recette->title = request("title");
        //$recette->image = $path;
        $recette->content = request("content");
        $recette->ingredients = request("ingredients");
        $recette->url = request("url");
        $recette->tags = request("tags");
        $recette->date = request("date");
        $recette->status = request("status");
        $recette->update(request(["author_id", "title", "content", "ingredients", "url", "tags", "date", "status"]));*/

        Recipe::create($request->all());

        $recette->update($request->all());

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Project updated successfully');
    }

                            /*
                        $recette->author_id = request("author_id");
                        $recette->title = request("title");
                        //$recette->image = $path;
                        $recette->content = request("content");
                        $recette->ingredients = request("ingredients");
                        $recette->url = request("url");
                        $recette->tags = request("tags");
                        $recette->date = request("date");
                        $recette->status = request("status");

                        $recette->update(request(["author_id", "title", "content", "ingredients", "url", "tags", "date", "status"]));*/

                    // Recipe::create($request->all());

                        //$recette->update($request->all());



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
    {
        $recette = \App\Models\Recipe::find($id);
        $recette->delete();

        return redirect()->route('recettesCrud.index')
            ->with('success', 'Project deleted successfully');
    }
}
