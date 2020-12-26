@extends('layouts.app')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')

<div class="container">
    <div class="row">
        <div class="">
            <div class="box">
                <a href="/location">
                <p class="marvel">Location</p> </a>
                <!-- <p class="marvel">Location</p> -->
                <img src="img/location.png" class="model">
                <div class="details">
                </div>
            </div>
        </div>
        <div class="">
            <div class="box">
                <a href="/users">
                <p class="marvel">Users</p></a>
                <img src="img/User.png" class="model">
                <div class="details">
                </div>	
            </div>
        </div>
        <div class="">
            <div class="box">
                <a href="/reports">
                <p class="marvel">Report</p></a>
                <img src="img/report.png" class="model">
                <div class="details">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection