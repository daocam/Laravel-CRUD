@extends('layouts.app')
@section('content')
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <form action="" method="post">
                        @csrf
                        <div class="card-header fs-4">@lang('lang.new_article')</div>
                            <div class="card-body">   
                                <div class="control-group col-12 mb-2">
                                    <label for="title">@lang('lang.title')</label>
                                    <input type="text" placeholder="@lang('lang.title')" id="title" name="title" class="form-control">
                                </div>
                                <div class="control-group col-12 mb-2">
                                    <label for="textarea">@lang('lang.content')</label>
                                    <textarea class="form-control" id="textarea" rows="3">@lang('lang.text_content')</textarea>
                                </div>
                                <input type="submit" value="@lang('lang.submit')" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection