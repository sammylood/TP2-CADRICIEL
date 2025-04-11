@extends('layouts.app')
@section('title', 'Article')


@section('content')
<h1>Article</h1>

<div class="card mb-4">
    <div class="card-header">

        <h5 class="card-title">{{ $article->titre }}</h5>

    </div>
    <div class="card-body">

        @guest
        <p>Vous devez être connecté pour lire cet article</p>
        @endguest


        @auth
        <p class="card-text">Titre: {{ $article->titre }}</p>
        <p class="card-text">date de parution: {{ $article->date_parution }}</p>
        <p class="card-text">Contenu: {{ $article->contenu }}</p>
        <p class="card-text">langue: @if ($article->lang == 0)
        <p>Langue: français</p>
        @endif
        @if ($article->lang == 1)
        <p>Language: english</p>
        @endif</p>
        @endauth

    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-between">



            @auth
            <a href="#" class="btn btn-primary">Modifier</a>
            @endauth
            @guest
            <div class="btn" style="background-color:gray; color:white; cursor: default">Modifier</div>
            @endguest

            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Supprimer le profil
                            </button> 
                            <form method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>-->
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
                Voulez-vous vraiment supprimer le profil de: {{ $article->titre }} ?
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