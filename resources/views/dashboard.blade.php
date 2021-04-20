
@extends('layouts/main')

@section('content')


<style>
    div {text-align: center;}
</style>
<div>Bienvenue {{ auth()->user()->name }}!. Click sur accueil pour commencer a profiter de notres recettes. </div>
<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
