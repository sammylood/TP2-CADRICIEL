@extends('layouts.app')
@section('title', 'Login')
@section('content')
@if(!$errors->isEmpty())





<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="main row justify-content-center mt-5 mb-5">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Connexion</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection