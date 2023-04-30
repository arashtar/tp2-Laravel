@extends('layouts.app')
@section('title', 'Maisonneuve - Bienvenue')
@section('content')
    

<header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">@lang('lang.text_maisonneuveCollege')</h1>
                    <h2 class="masthead-subheading mb-0">@lang('lang.text-page-accueil')</h2>
                    <a href="{{route('etudiant.index')}}" class="btn btn-primary btn-lg ">@lang('lang.text-enter')</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
<!-- 


<div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">
                {{ config('app.name')}}
            </h1>
            <p>
                Cliquez sur le bouton ci-dessous pour pour voir, enregistrer, modifier ou supprimer les informations des étudiants du collège Maisonneuve 
            </p>
            <a href="{{route('etudiant.index')}}" class="btn btn-primary btn-sm">Entrer</a>
        </div>
    </div> -->
@endsection
