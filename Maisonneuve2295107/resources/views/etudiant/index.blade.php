@extends('layouts.app')
@section('title', 'Maisonneuve - Bienvenue')
@section('content')
    <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">
                {{ config('app.name')}}
            </h1>
        </div>
        <hr>
        <div class="col-md-8">
            <p>
          
            </p>
        </div>
        <div class="col-md-4">
            <a href="{{ route('etudiant.create')}}" class="btn btn-success">Ajouter un nouvel étudiant</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-5">Liste des étudiants</h2>
                </div>
                <div class="card-body">
                    <ul>
                    @forelse($etudiants as $etudiant)
                        <li> <a href="{{route('etudiant.show', $etudiant->id)}}">{{ $etudiant->name }}</a></li>
                    @empty
                        <li class="text-danger">Il n'y a pas d'étudiant</li>
                    @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; College de Maisonneuve 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
@endsection
