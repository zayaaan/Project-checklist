@extends('layouts.app')

<link href="{{ asset('css/location.css') }}" rel="stylesheet">

@section('content')

<div class="s-heading">
    <h1>Locations</h1>
    <p> <a href="/location/create" class="btn btn-secondary ">Add</a></p>
</div>
<div class="container">
    <div class="row">
        @foreach ($locations as $location)
        <div class="col-md-4">
            <div class="s-box">
                <div class="s-b-img">
                    <img src="<?php echo $location->image ?>">
                </div>
                <div class="s-b-text">
                    <a href="/tasks/{{ $location->id }}">  {{ $location->location_name }}</a>	
                </div>
            </div>
            <form method="POST" action="/location/{{ $location->id }}">
            @csrf 
            {{ method_field('DELETE') }}
            <div class="form-group col-md-6">
                <button class="btn btn-secondary" type="submit">Delete</button>
                <a href="/location/{{ $location->id }}/edit" class="btn btn-secondary ">Edit</a>
            </div>
            <!-- <div class="form-group col-md-6">
                <a href="/location/{{ $location->id }}/edit" class="btn btn-secondary ">Edit</a>
            </div> -->
            </form>
    </div>
    @endforeach
</div>




@endsection
