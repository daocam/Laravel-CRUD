@extends('layouts.app')
@section('content')
    <main class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <form  method="post" >
                        @csrf
                        @method('PUT')
                        <div class="card-header fs-4">@lang('lang.update_file')</div>
                        <div class="card-body">   
                            <div class="control-group col-12 mb-2">
                                <input type="text" name="title" placeholder="@lang('lang.filename')" class="form-control">
                            </div>
                            <div class="control-group col-12 mb-2">
                                <input type="text" name="title_fr" placeholder="@lang('lang.filename_fr')" class="form-control">
                            </div>
                            <div class="control-group col-12 mb-2">
                                <input type="file" name="file" accept=".pdf,.zip,.doc" class="form-control">
                            </div>
                            <input type="submit" value="@lang('lang.submit')" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection