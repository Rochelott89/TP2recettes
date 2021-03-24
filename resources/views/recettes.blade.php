<!DOCTYPE html>





@extends('layouts/main')

@section('content')

<ul>
    @foreach ( $recipes as $recipe )



        @if($loop->iteration > 3)

            @break

        @endif


      <li>{{ $recipe->title }}</li>

    @endforeach


</ul>



@endsection
