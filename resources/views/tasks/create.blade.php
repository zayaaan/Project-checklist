@extends('layouts.app')

<link href="{{ asset('css/addtask.css') }}" rel="stylesheet">

@section('content')

<h1 class="add">Add task</h1>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Tasks</div>
                <div class="card-body">
                    <form method="POST" action="/tasks">
                        @csrf
                        <div class="form-group row">
                            <label for="location_name" class="col-md-4 col-form-label text-md-right">{{ __('Location Name') }}</label>
                            <div class="col-md-6">
                            <select class="browser-default custom-select" name="location_id">
                              @foreach ($locations as $location)
                              <option selected value="{{ $location->id }}">{{ $location->location_name }}</option>
                              @endforeach
                            </select>

                      
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Name of Tasks</label>
                            <div class="col-md-6">
                            <input class="form-control form-control-user {{ $errors->has('thumbnail') ? 'is-invalid' : ''}} "  type="text" name="task_name" placeholder="Task name" value="{{ old('thumbnail') }}" required >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                   Create
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection