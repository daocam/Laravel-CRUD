@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{route('etudiant.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
                <h4 class="display-one mt-5 fw-bold fs-1">{{ $etudiant->name }}</h4> 
                <hr>
                <p>Address : <span class="fw-bold">{!! $etudiant->address !!}</span></p>
                <p>Phone : <span class="fw-bold">{!! $etudiant->phone !!}</span></p>
                <p>Email : <span class="fw-bold">{!! $etudiant->email !!}</span></p>
                <p>Birthday : <span class="fw-bold">{!! $etudiant->birth_date !!}</span></p>
                <p>Country : <span class="fw-bold">{{ $etudiant->EtudiantHasCountry->name }}</span></p>
            </div>
            <div class="col-6">
                <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-success">Modifier</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Effacer</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('etudiant.edit', $etudiant->id )}}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="modal-header bg-danger text-white">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous certain de vouloir supprimer l'étudiant : <p><strong>{{ $etudiant->name }}</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                            <button type="submit" class="btn btn-danger">Effacer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
