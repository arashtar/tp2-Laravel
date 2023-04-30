@extends('layouts.app')
@section('title', 'Repertoire - Modifier')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-5">
                    Modifier @lang('lang.text_repertoire')
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                    @method('put')
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="title">Ttile of the Message</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $repertoire->title }}">
                                </div>
                                <hr>
                                <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="title">Titre du message</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $repertoire->title_fr }}">
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
                                
                                
                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" class="btn btn-success">
                            <a href="{{ route('repertoire.page') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog
@endsection