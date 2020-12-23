@extends('layouts.app')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <a href="/location">
                <p class="marvel">Location</p> </a>
                <!-- <p class="marvel">Location</p> -->
                <img src="img/location.png" class="model">
                <div class="details">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <p class="marvel">Users</p>
                <img src="img/User.png" class="model">
                <div class="details">
                </div>	
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <p class="marvel">Report</p>
                <img src="img/report.png" class="model">
                <div class="details">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection