@extends('layouts.app')
@section('name', 'Etudiant - Pagination')
@section('content')
    <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">
                {{ config('app.name')}}
            </h1>
        </div>
        <hr>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->name}}</td>
                        <td>{{ $etudiant->etudiantHasUser->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$blogs}}
        </div>
    </div>
@endsection