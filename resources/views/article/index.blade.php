@extends('layouts.app')
@section('content')
    <main class="container my-5">
        @php $locale = session()->get('locale'); @endphp
        <div class="row">
            <div class="col-12">
                <div class="card m-5">
                    <div class="card-header">
                        <h4>@lang('lang.article')</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('lang.author')</th>
                                    <th scope="col">@lang('lang.title')</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <th scope="row">{{$article->ArticleHasUser->name}}</th>
                                    <td>
                                        <a href="{{route('article.show', $article->id)}}">
                                            @if($locale == 'en') 
                                                {{ $article->title }} 
                                            @else 
                                                {{ $article->title_fr }} 
                                            @endif 
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $articles }}
                    </div>
                </div>
            </div>
        </div> 
    </main>
@endsection