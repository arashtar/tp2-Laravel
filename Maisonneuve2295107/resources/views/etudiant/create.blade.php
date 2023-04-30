@extends('layouts.app')
@section('title', 'Etudiant - Create')
@section('content')
<div class="row">
<div class="col-12 text-center pt-2">
<h1 class="display-5">
Ajouter un étudiant
</h1>
</div>
</div>
<hr>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<form method="post">
@csrf
<div class="card-header">
Formulaire
</div>
<div class="card-body">
<div class="mb-3">
<label for="name" class="form-label">Nom de l'étudiant</label>
<input type="text" id="name" name="name" class="form-control">
</div>
<div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea class="form-control" id="adresse" name="adresse"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="ville_id" class="form-label">Choisissez une ville:</label>
                        <select name="ville_id" id="ville_id" class="form-select">
                            @foreach($villes as $ville)
                                <option value="{{ $ville->id }}" @if($ville->id == $etudiant->ville_id) selected @endif>{{ $ville->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Courriel</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="dateNaissance" class="form-label">Date de Naissance</label>
                        <input type="date" id="dateNaissance" name="date_de_naissance" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
