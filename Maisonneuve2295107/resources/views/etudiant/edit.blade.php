@extends('layouts.app')
@section('title', 'Blog - Modifier')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-5">
                    Modifier un etudiant
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
                <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('etudiant.update', $etudiant) }}">
                        @csrf
                        @method('put')
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="name">Nom de l'étudiant</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $etudiant->name }}">
                                </div>
                                
                                <div class="control-grup col-12">
                                    <label for="adresse">Addresse</label>
                                    <textarea class="form-control" id="adresse" name="adresse" >{{ $etudiant->adresse }}</textarea>
                                </div>
                                <div class="form-group">

                                <div>
                                    <label for="ville_id">Choisissez une ville:</label>
                                    <select name="ville_id" id="ville_id" class="form-control">
                                        @foreach($villes as $ville)
                                            <option value="{{ $ville->id }}" @if($ville->id == $etudiant->ville_id) selected @endif>{{ $ville->name }}</option>
                                                {{ $ville->name }}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>

                                <div class="control-grup col-12">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $etudiant->phone }}" >
                                </div>
                                <div class="control-grup col-12">
                                    <label for="email">Courriel</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ $etudiant->email }}" >
                                </div>
                                <div class="control-grup col-12">
                                    <label for="dateNaissance">Date de Naissance</label>
                                    <input type="text" id="dateNaissance" name="date_de_naissance" class="form-control" value="{{ $etudiant->date_de_naissance }}" >
                                </div>
                        </div>
                        
                        <div class="card-footer text-center">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection