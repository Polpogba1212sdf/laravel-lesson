<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
	<div class="panel-body">

		@include('common.errors')

		
	
		
		
			@foreach ($students as $student)
				<div>
    			    <span>{{ $student->first_name }}</span>
    			    <span>{{ $student->last_name }}</span>
    			    <span>{{ $student->groups()->name }}</span>
    			    @if(Auth::user())
        			    <a href="update-group/{{$group->id}}">update</a>
        			    <a href="delete-group/{{$group->id}}">delete</a>
    			    @endif
			    </div>
			@endforeach
			<br/>
			@if(Auth::user())
			    	<a href="add-student">Add students</a>
			@endif
		
          

		
	</div>
</div>
 @endsection
