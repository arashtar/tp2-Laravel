@extends('layouts.app')
@section('title', 'Article - Create')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-5">
                    Ajouter un article
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                        <div class="card-header">
                            Register Form
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">Message Title</label>
                                    <input type="text" id="title" name="title" class="form-control" >
                                </div>
                                <div class="control-grup col-12">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="body"></textarea>
                                </div>
                                <div class="control-grup col-12">
                                    <label for="category">Category</label>
                                    <select id="category" name="categories_id" class="form-control">
                                       <option value="">Choose a category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id}}">{{ $category->category}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr>
                            Formulaire
                            <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title_fr">Titre du message</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" >
                                </div>
                                <div class="control-grup col-12">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="body_fr"></textarea>
                                </div>
                                <div class="control-grup col-12">
                                    <label for="category">Category</label>
                                    <select id="category" name="categories_id" class="form-control">
                                       <option value="">Choisir une categorie</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id}}">{{ $category->category}} </option>
                                        @endforeach
                                    </select>
                                </div>
                               
                            </div>


                        <div class="card-footer text-center">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                    <hr>
                </div>
                <hr>



                




            </div>
        </div>
@endsection





