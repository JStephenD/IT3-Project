@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Add Region') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('regions.store') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Region Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}" 
                                    autocomplete="name" 
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Region Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" 
                                    type="text" 
                                    class="form-control @error('latitude') is-invalid @enderror" 
                                    name="latitude" 
                                    value="{{ old('latitude') }}" 
                                    autocomplete="latitude" 
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Region Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" 
                                    type="text" 
                                    class="form-control @error('longitude') is-invalid @enderror" 
                                    name="longitude" 
                                    value="{{ old('longitude') }}"                                    
                                    autocomplete="longitude" 
                                    autofocus>

                                @error('longitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection