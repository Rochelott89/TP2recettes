<!DOCTYPE html>





@extends('layouts/main')

@section('content')
<strong>Recette:</strong><div>{{ $recipe->title }}</div>
<strong>Contenu:</strong><div>{{ $recipe->content }}</div>
<strong>Author:</strong><div>{{ $recipe->author->name }}</div>




@endsection
