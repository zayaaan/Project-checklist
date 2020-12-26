@extends('layouts.app')

<link href="{{ asset('css/task.css') }}" rel="stylesheet">

@section('content')

<div id="wrapper">
  <h1>Tasks allocated to this location</h1>
  <a href="/tasks/create" class="btn btn-secondary" type="submit">Add</a>
  <hr>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>#</span></th>
        <th><span>Tasks</span></th>
        <th><span>Created date</span></th>
        <th><span>Completed date</span></th>
        <th><span>Completed by</span></th>
        <th><span>Status</span></th>
        <th><span>Task completion</span></th>
        <th><span></span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($taskLocations as $taskLocation)
      
        
        <td class="lalign">{{ $taskLocation->id }}</td>
        <td>{{ $taskLocation->task_name }}</td>
        <td>{{ $taskLocation->created_at }}</td>
        <td>{{ $taskLocation->completed_at }}</td>
        <td>{{ $taskLocation->completed_by }}</td>
        <td>{{ $taskLocation->status }}</td>
       
        <td><a href="/tasks/{{ $taskLocation->id }}/edit" type="submit" class="btn btn-secondary">complete</a></td>
        <td><form method="POST" action="/tasks/{{ $taskLocation->id }}">
        @csrf 
        {{ method_field('DELETE') }}
        <button class="btn btn-secondary" type="submit">Delete</button>
        </form></td>
        
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection