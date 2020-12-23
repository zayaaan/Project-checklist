@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Location</div>

                <div class="card-body">
                    <form method="POST" action="/location">
                        @csrf

                        <div class="form-group row">
                            <label for="location_name" class="col-md-4 col-form-label text-md-right">{{ __('Location Name') }}</label>

                            <div class="col-md-6">
                                <input id="location_name" type="text" class="form-control @error('location_name') is-invalid @enderror" name="location_name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
					<label for="thumbnail">Thumbnail</label>
					<input class="form-control form-control-user {{ $errors->has('thumbnail') ? 'is-invalid' : ''}} "  type="text" name="image" placeholder="Tumbnail" value="{{ old('thumbnail') }}" required >
				</div>

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Create
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
