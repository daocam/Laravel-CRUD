@extends('layouts.app')
@section('content')
    <main class="container my-5">
        <div class="card mt-5">
            <h5 class="card-header fw-bold fs-1">{{ $article->title }}</h5>
            <div class="card-body">
                <p class="card-text">
                    <span class="fw-bold">
                    @if($locale == 'en') 
                        {{ $article->title }} 
                    @else 
                        {{ $article->title_fr }} 
                    @endif
                    </span>
                </p>
                <p class="card-text">
                    <span class="fw-bold">
                    @if($locale == 'en') 
                        {{ $article->content }} 
                    @else 
                        {{ $article->content_fr }} 
                    @endif
                    </span>
                </p>
                <a href="{{route('article.edit', $article->id)}}" class="btn btn-primary">@lang('lang.edit')</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">@lang('lang.delete')</button>               
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('article.edit', $article->id )}}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="modal-header bg-danger text-white">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.delete')</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @lang('lang.text_delete') : <p><strong>{{ $article->title }}</strong></p>
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
