@extends('layouts.app')

<link href="{{ asset('css/task.css') }}" rel="stylesheet">

@section('content')

	<h1>Add task</h1>
<form class="cf" method="POST" action="/tasks">
@csrf
{{ method_field('PATCH') }}
<div class="form-row">
				<div class="form-group col-md-4">
					<label for="forecast">Select Location</label>
					<div class="input-group" >
					<select class="browser-default custom-select" name="location_id">
          

          <option selected value=></option>
          
					</select>
        </div>
        
<div>
  <div class="half left cf">
    <input name="task_name" value=" {{ $tasks->task_name }} " type="text" id="input-name" placeholder="Name of the task">
    <input type="text" id="input-subject" placeholder="Description">
  </div>
  <input type="submit" value="Submit" id="input-submit" >
</form>
</div>


@endsection