<!DOCTYPE html>


@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Recettes </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recettesCrud.create') }}" title="Créer une recette"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Autor Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th>Ingrédients</th>
            <th>Url</th>
            <th>Tags</th>
            <th>Date</th>
            <th>Status</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($recettes as $recette)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $recette->author_id }}</td>
                <td>{{ $recette->title }}</td>
                <td><img src="{{ Storage::url($recette->image) }}" height="75" width="75" alt="" /></td>
                <td>{{ $recette->content }}</td>
                <td>{{ $recette->ingredients }}</td>
                <td>{{ $recette->url }}</td>
                <td>{{ $recette->tags }}</td>
                <td>{{ $recette->date }}</td>
                <td>{{ $recette->status }}</td>

                <td>
                    <form action="{{ route('recettesCrud.destroy', $recette->id) }}" method="POST">

                        <a href="{{ route('recettesCrud.show', $recette->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('recettesCrud.edit', $recette->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $recettes->links() !!}

@endsection
