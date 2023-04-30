@extends('layouts.app')
@section('title', 'article - Welcome')
@section('content')
    <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">
                {{ config('app.name')}}
            </h1>
        </div>
        <hr>
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <a href="{{ route('article.create' )}}" class="btn btn-success">Ajouter</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-5">@lang('lang.text_articleList')</h2>
                </div>
                <div class="card-body">
                    <ul>
                    @forelse($articles as $article)
                        <li> <a href="{{route('article.show', $article->id)}}">{{ $article->title }} {{ $article->title_fr }}Created at: {{$article->created_at}} by: {{$article->user_id}} {{Auth::user()->id}}</a></li>
                    @empty
                        <li class="text-danger">There is no article</li>
                    @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection