@extends('layouts.app')
@section('title', 'Etudiant')


@section('content')
<h1>Étudiant </h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Étudiant</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $etudiant->nom }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nom: {{ $etudiant->nom }}</p>
                        <p class="card-text">date de naissance: {{ $etudiant->date_naissance }}</p>
                        <p class="card-text">Adresse: {{ $etudiant->adresse }}</p>
                        <p class="card-text">Téléphone: {{ $etudiant->telephone }}</p>
                        <p class="card-text">courriel: {{ $etudiant->email }}</p>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-primary">Modifier</a>
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Supprimer le profil
                            </button> -->
                            <form method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le profil</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Voulez-vous vraiment supprimer le profil de: {{ $etudiant->nom }} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <form method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection