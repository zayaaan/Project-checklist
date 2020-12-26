@extends('layouts.app')

<link href="{{ asset('css/task.css') }}" rel="stylesheet">

@section('content')

<div id="wrapper">
  <h1 class="h11">Users</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>#</span></th>
        <th><span>User_name</span></th>
        <th><span>email</span></th>
        <th><span></span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($getusers as $getuser)
        <td>{{ $getuser->id }}</td>
        <td>{{ $getuser->name }}</td>
        <td>{{ $getuser->email }}</td>
        <td><form action="/users/{{ $getuser->id }}" method="post">
                    @csrf
                    {{ method_field('delete') }}
                    <button class="btn btn-default" type="submit">Delete</button>
                </form></td>
      </tr>
      @endforeach
  </tbody>
  </table>
 </div>
 @endsection