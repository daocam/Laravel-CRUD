@extends('layouts.app')
@section('content')
    <main class="container my-5">
        @php $locale = session()->get('locale'); @endphp
        <div class="row">
            <div class="col-12">
                <div class="card m-5">
                    <div class="card-header">
                        <h4>@lang('lang.document')</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('lang.author')</th>
                                    <th scope="col">@lang('lang.title')</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $document)
                                <tr>
                                    <th scope="row">{{$document->DocumentHasUser->name}}</th>
                                    <td>
                                        <a href="{{route('document.show', $document->id)}}">
                                            @if($locale == 'en') 
                                                {{ $document->title }} 
                                            @else 
                                                {{ $document->title_fr }} 
                                            @endif 
                                        </a>
                                    </td>
                                    <td><a href="{{url('/document-download' . $document->id)}}" class="btn btn-primary">@lang('lang.download')</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $documents }}
                    </div>
                </div>
            </div>
        </div> 
    </main>
@endsection