@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-one">Mettre à jour les informations</h1>
        </div> 
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header">Formulaire</div>
                    <div class="card-body">   
                        <div class="control-group col-12 mb-2">
                            <label for="name">Entrez votre prénom puis votre nom</label>
                            <input type="text" placeholder="Alex Hobb" id="name" name="name" value="{{ $etudiant->name }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="address">Entrez votre adresse</label>
                            <input type="text" placeholder="12 avenue des Bleuet" id="address" name="address" value="{{ $etudiant->address }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="phone">Entrez votre numéro de téléphone</label>
                            <input type="phone" placeholder="1-514-254-4532" id="phone" name="phone" value="{{ $etudiant->phone }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="email">Entrez votre courriel</label>
                            <input type="email" placeholder="ad@lest.com" id="email" name="email" value="{{ $etudiant->email }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="birth_date">Entrez votre date de naissance</label>
                            <input type="date" id="birth_date" name="birth_date" value="{{ $etudiant->birth_date }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="ville">Entrez votre ville</label>
                            <select name="ville_id" id="ville" class="form-select">
                                <option value="">Selectionnez une ville</option>
                                @foreach($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection