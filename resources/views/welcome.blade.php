<!DOCTYPE html>
  <!-- extends exo2.2 -->
@extends('layouts/main')

@section('content')
<style>
    div {text-align: center;}
</style>
<div>Notres dernières recettes</div>
<ul>
    @foreach ( $recipes as $recipe )



        @if($loop->iteration > 3)

            @break

        @endif


      <div><a href="/recettes/{{ $recipe->title }}">{{ $recipe->title }}</a></div>








    @endforeach


</ul>




@endsection
