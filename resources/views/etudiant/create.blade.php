@extends('layouts.app')
@section('title', 'Creer Etudiant')
@section('content')
<h1>Add Etudiant</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ajouter nouvel Etudiant</h5>
            </div>
           
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom')}}">
                        @if($errors->has('nom'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('nom') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea id="adresse" name="adresse" class="form-control"value="{{ old('adresse')}}"></textarea>
                        @if($errors->has('adresse'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('adresse') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone')}}">
                        @if($errors->has('telephone'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('telephone') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Courriel</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email')}}">
                        @if($errors->has('email'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="date_naissance" class="form-label">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ old('date_naissance')}}">
                        @if($errors->has('date_naissance'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('date_naissance') }}
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