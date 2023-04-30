@extends('layouts.app')
@section('title', 'Article - Welcome')
@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <a href="{{route('article.index')}}" class="btn btn-primary btn-sm" >Return</a>
            <h2 class="display-8 pt-3">
                {{ $article->title}}
                {{ $article->title_fr}}
            </h2>
            <hr>
                {!! $article->body !!}
                {!! $article->body_fr !!}
                <p>
                    Author : {{ $article->articleHasUser->name }}
                </p>
                <p>
                  Category: {{ $article->articleHasCategory->category ?? 'Aucune categorie'}}
                  {{-- $article->articleHasCategory?->category --}}
                </p>
            <hr>
        </div>
    </div>
    <div class="row text-center">
    @if (Auth::user() && Auth::user()->id == $article->user_id)
        <div class="col-md-6">
            <a href="{{ route('article.edit', $article->id)}}" class="btn btn-success btn-sm">Modifier</a>
        </div>
        <div class="col-md-6">
                <input type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" value="Effacer">
        </div>
        @else
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalUnauthorized" disabled>Modifier</button>
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
        Are you sure to delete the article : {{ $article->title }}
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