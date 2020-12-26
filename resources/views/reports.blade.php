@extends('layouts.app')

<link href="{{ asset('css/task.css') }}" rel="stylesheet">

@section('content')


<div id="wrapper">
  <h1>REPORT</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>#</span></th>
        <th><span>Tasks</span></th>
        <th><span>Created date</span></th>
        <th><span>Completed date</span></th>
        <th><span>Completed by</span></th>
        <th><span>Status</span></th>
        <th><span></span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($tasks as $task)
        <td class="lalign">{{ $task->id }}</td>
        <td>{{ $task->task_name }}</td>
        <td>{{ $task->created_at }}</td>
        <td>{{ $task->completed_at }}</td>
        <td>{{ $task->completed_by }}</td>
        <td>{{ $task->status }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection