@extends('layouts.app')
@section('content')
    <main class="container my-5">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">Your best social network</h1>
                <div class="row">
                    <p>@lang('lang.text_welcome')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-5">
                    <div class="card-header">
                        <h4>@lang('lang.list_students')</h4>
                    </div>
                    <div class="card-body">
                        <ul class="row">
                            @forelse($posts as $post)
                                <li class="col-3"><a href="{{route('etudiant.show', $post->id)}}">{{ $post->name }}</a></li>
                            @empty
                                <p class="text-danger">@lang('lang.warning_empty')</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </main>
@endsection