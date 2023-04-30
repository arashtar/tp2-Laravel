@extends('layouts.app')
@section('title', 'User List')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-3">
        <h1 class="display-3 mt-3"> @lang('lang.text_userList')</h1>
    </div>
    <hr>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>@lang('lang.text_user')</th>
                    <th>@lang('lang.text_email')</th>
                    <th>Article</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach($user->userHasArticles as $article)
                          <p>{{ $article->title }}</p>
                        @endforeach        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users}}
    </div>
</div>
@endsection