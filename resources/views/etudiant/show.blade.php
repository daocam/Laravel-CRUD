@extends('layouts.app')
@section('content')
    <main class="container my-5">
        <div class="card mt-5">
            <h5 class="card-header fw-bold fs-1">{{ $etudiant->name }}</h5>
            <div class="card-body">
                <p class="card-text">@lang('lang.address') : <span class="fw-bold">{!! $etudiant->address !!}</span></p>
                <p class="card-text">@lang('lang.phone') : <span class="fw-bold">{!! $etudiant->phone !!}</span></p>
                <p class="card-text">@lang('lang.email') : <span class="fw-bold">{!! $etudiant->email !!}</span></p>
                <p class="card-text">@lang('lang.birthday') : <span class="fw-bold">{!! $etudiant->birth_date !!}</span></p>
                <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-primary">@lang('lang.edit')</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">@lang('lang.delete')</button>               
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.delete')</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @lang('lang.text_delete') : <p><strong>{{ $etudiant->name }}</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">@lang('lang.no')</button>
                            <button type="submit" class="btn btn-danger">@lang('lang.delete')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
