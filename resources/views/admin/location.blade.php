@extends('layouts.app')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')

<div class="s-heading">
    <h1>Locations</h1>
    <p> <button type="button" class="button btn btn-outline-dark font-weight-bold"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>  Add</button></p>
</div>
<div class="container">

    <div class="row">
    @foreach ($locations as $location)
        <div class="col-md-4">
       
            <div class="s-box">
                <div class="s-b-img">
                    <!-- <div class="s-type">Front-End</div> -->
                    <img src="<?php echo $location->image ?>">
                </div>
                <div class="s-b-text">
                <a href="/tasks">  {{ $location->location_name }}</a>	
            </div>
        </div>
        <form method="POST" action="/location/{{ $location->id }}">
                        @csrf 
                        {{ method_field('DELETE') }}
                        <div class="form-group col-md-6">
                            <button class="btn btn-danger btn-circle btn-sm fas fa-trash-alt" type="submit"></button>
                        </div>
                        <div class="form-group col-md-6">
                             <a href="/location/{{ $location->id }}/edit" class="btn btn-warning btn-circle btn-sm fas fa-edit "></a>
                        </div>
                        </form>
        <!-- <button type="button" class="button1 btn btn-outline-dark font-weight-bold"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
        <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 
        01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5
         .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 
         10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 
         1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25
          0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path></svg>  -->
           Delete</button>
    </div>
    @endforeach
    
    <!-- <div class="col-md-4">
        <div class="s-box">
            <div class="s-b-img"> -->
                <!-- <div class="s-type">Front-End</div> -->
                    <!-- <img src="img/loc2.jpg">
                </div>
                <div class="s-b-text">
                    <a href="#"> Galolhu </a>	
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="s-box"> -->
                <!-- <div class="s-b-img"> -->
                    <!-- <div class="s-type">Front-End</div> -->
                        <!-- <img src="img/loc3.jpg">
                    </div>
                    <div class="s-b-text">
                        <a href="#"> GulhiFaru </a>	
                    </div>
                </div>
            </div>
        </div> -->
</div>

<div>
<!-- <button type="button" class="button btn btn-outline-dark font-weight-bold"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>  Add</button> -->
<!-- <button type="button" class="button1 btn btn-outline-dark font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path></svg>  Delete</button> -->
</div>


@endsection
