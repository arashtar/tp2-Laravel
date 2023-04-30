@extends('layouts.app')
@section('title', 'Repertoire - Welcome')
@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <a href="{{route('repertoire.page')}}" class="btn btn-primary btn-sm" >Return</a>
            <h2 class="display-8 pt-3">
                {!! $repertoire->title !!}
                {!! $repertoire->title_fr !!}
            </h2>
            <hr>
                {!! $repertoire->created_at !!}
                <p>
                    Author : {{ $repertoire->repertoireHasUser->name }}
                </p>
                
            <hr>
        </div>
    </div>
    <div class="row text-center">
    @if (Auth::user() && Auth::user()->id == $repertoire->user_id)
    <div class="col-md-6">
            <a href="{{ route('repertoire.edit', $repertoire->id)}}" class="btn btn-success btn-sm">Modifier</a>
        </div>
        
        <div class="col-md-6">
                <input type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" value="Effacer">
        </div>
       
        @endif
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
        Are you sure to delete the repertoire : {{ $repertoire->title }}
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