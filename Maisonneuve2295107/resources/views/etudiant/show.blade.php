@extends('layouts.app')
@section('title', 'Etudiant')
@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <a href="{{route('etudiant.index')}}" class="btn btn-primary btn-sm" >Return</a>
            @if ($etudiant)
            <h2 class="display-8 pt-3">
                {{ $etudiant->name}}
            </h2>
            <hr>
              <p>Addresse: {!! $etudiant->adresse !!}</p>
              <p>Telephone: {{ $etudiant->phone}}</p>
              <p>Courriel: {{ $etudiant->email}}</p>
              <p>Date de naissance: {{ $etudiant->date_de_naissance}}</p>
              <p>Ville: {{ $etudiant->ville->name }}</p>
              
              @else
                <p>Etudiant not found</p>
              @endif
            <hr>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
        <a href="{{ route('etudiant.edit', $etudiant->id)}}" class="btn btn-success btn-sm">Modifier</a>
        </div>
        <div class="col-md-6">
                <input type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" value="Effacer">
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you to delete the  : {{ $etudiant->name }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger"> Effacer </button>
            </form>
      </div>
    </div>
  </div>
</div>

@endsection
