@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3">
                <form method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header fs-4">@lang('lang.title_edit')</div>
                    <div class="card-body">   
                        <div class="control-group col-12 mb-2">
                            <label for="name">@lang('lang.name')</label>
                            <input type="text" placeholder="@lang('lang.name')" id="name" name="name" value="{{ $etudiant->name }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="address">@lang('lang.address')</label>
                            <input type="text" placeholder="@lang('lang.address')" id="address" name="address" value="{{ $etudiant->address }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="phone">@lang('lang.phone')</label>
                            <input type="phone" placeholder="@lang('lang.phone')" id="phone" name="phone" value="{{ $etudiant->phone }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="email">@lang('lang.email')</label>
                            <input type="email" placeholder="@lang('lang.email')" id="email" name="email" value="{{ $etudiant->email }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="birth_date">@lang('lang.birthday')</label>
                            <input type="date" id="birth_date" name="birth_date" value="{{ $etudiant->birth_date }}" class="form-control">
                        </div>
                        <div class="control-group col-12 mb-2">
                            <label for="ville">@lang('lang.country')</label>
                            <select name="ville_id" id="ville" class="form-select">
                                <option value="">@lang('lang.country')</option>
                                @foreach($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="@lang('lang.submit')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection