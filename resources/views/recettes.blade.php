<!DOCTYPE html>





@extends('layouts/main')

@section('content')

 <ul>
    @foreach ( $recipes as $recipe )






    <div><a href="/recettes/{{ $recipe->title }}">{{ $recipe->title }}</a></div>








    @endforeach


 </ul>



@endsection
