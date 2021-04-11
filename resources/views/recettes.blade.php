<!DOCTYPE html>





@extends('layouts/main')

@section('content')

 <ul>
    @foreach ( $recipes as $recipe )






      <li> <a href="{{ $recipe->url }}">{{ $recipe->title }}</a></li>








    @endforeach


 </ul>



@endsection
