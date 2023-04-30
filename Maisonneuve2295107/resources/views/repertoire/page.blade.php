@extends('layouts.app')
@section('title', 'Repertoire')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-3">
        <h1 class="display-3 mt-3"> @lang('lang.text_indexlist')</h1>
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
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>@lang('lang.text_repertoire')</th>
                    <th>date creation</th>
                    <th>author</th>
                </tr>
            </thead>
            <tbody>
            @if($repertoires && count($repertoires) > 0)
  @foreach($repertoires as $repertoire)
    <tr>
      <td  class="page-blade-a"> <a  href="{{route('repertoire.show', $repertoire->id)}}">{{ $repertoire->title }} {{ $repertoire->title_fr }}</td>
      <td>{{$repertoire->created_at}} </td>
      <td>
    @if ($repertoire->repertoireHasUser)
        {{ $repertoire->repertoireHasUser->name }} 
    @endif
</td>

    </tr>
  @endforeach
@else
  <p>No repertoire found.</p>
@endif

            </tbody>
        </table>
        {{$repertoires}}
    </div>
</div>
@endsection