@extends('layouts.app')
@section('title', 'Repertoire - Welcome')
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
            <a href="{{ route('repertoire.create' )}}" class="btn btn-success">@lang('lang.text_add')  @lang('lang.text_repertoire')</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-5">@lang('lang.text_indexlist')</h2>
                </div>
                <div class="card-body">
                    <ul>
                    @forelse($repertoires as $repertoire)
                        <li> <a href="{{route('repertoire.show', $repertoire->id)}}">{{ $repertoire->title }} {{ $repertoire->title_fr }} Created at: {{$repertoire->created_at}} by: {{$repertoire->user_id}} {{Auth::user()->id}}</a></li>
                    @empty
                        <li class="text-danger">There is no repertoire</li>
                    @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div> 
@endsection


