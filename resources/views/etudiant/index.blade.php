@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">Your best social network</h1>
                <div class="row">
                    <p>Viens échanger avec les autres étudiants !!!</p>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="btn btn-primary">S'inscire avec Facebook</a>
                        <a href="#" class="btn btn-primary">S'inscire avec Google</a>
                        <a href="#" class="btn btn-secondary">S'inscire avec un courriel</a>
                        <a href="{{route('etudiant.create')}}" class="btn btn-success">Ajouter un étudiant</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des étudiants</h4>
                    </div>
                    <div class="card-body">
                        <ul class="row">
                            @forelse($posts as $post)
                                <li class="col-3"><a href="{{route('etudiant.show', $post->id)}}">{{ $post->name }}</a></li>
                            @empty
                                <p class="text-danger">Aucun étudiants en ligne</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
@endsection