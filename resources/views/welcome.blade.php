<!DOCTYPE html>
  <!-- extends exo2.2 -->
@extends('layouts/main')

@section('content')

<ul>
    @foreach ( $recipes as $recipe )



        @if($loop->iteration > 3)

            @break

        @endif


      <li> <a href="{{ $recipe->url }}">{{ $recipe->title }}</a></li>








    @endforeach


</ul>




@endsection
