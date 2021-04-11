<!DOCTYPE html>





@extends('layouts/main')

@section('content')
{{ $recipe->title }}
{{ $recipe->content }}
{{ $recipe->author->name }}




@endsection
