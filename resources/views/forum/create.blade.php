@extends('layouts.app')
@section('title', 'Creer article')
@section('content')



<div class="main row justify-content-center mt-5 mb-5">
    <!-- <h1 class="justify-content-left">Ajout Étudiant</h1> -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ajouter nouvel article</h5>
            </div>

            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Titre</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{ old('titre')}}">
                        @if($errors->has('titre'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('titre') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Contenu</label>
                        <textarea id="adresse" name="adresse" class="form-control" value="{{ old('contenu')}}"></textarea>
                        @if($errors->has('contenu'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('contenu') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">langue de l'article</label>
                        <select name="lang">
                            <option value="0">Français</option>
                            <option value="0">Anglais</option>
                        </select>
                        @if ($errors->has('lang'))
                        <div class="text-danger">
                            {{$errors->first('lang')}}
                        </div>
                        @endif
                    </div>


                    <input type="submit" value="Save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection