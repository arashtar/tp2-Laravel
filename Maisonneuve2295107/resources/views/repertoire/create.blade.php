@extends('layouts.app')
@section('title', 'Reoertoire - Create')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create a new Repertoire') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_fr" class="col-md-4 col-form-label text-md-right">{{ __('Title in French') }}</label>

                                <div class="col-md-6">
                                    <input id="title_fr" type="text" class="form-control @error('title_fr') is-invalid @enderror" name="title_fr" value="{{ old('title_fr') }}" autocomplete="title_fr">

                                    @error('title_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_path" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                                <div class="col-md-6">
                                    <input id="file_path" type="file" class="form-control-file @error('file_path') is-invalid @enderror" name="file_path" required>

                                    @error('file_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
        </button>
        
       
    </div>
    
</div>
<a href="{{ route('repertoire.page') }}" class="btn btn-secondary">Cancel</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection








