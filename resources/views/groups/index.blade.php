<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
	<div class="panel-body">

		@include('common.errors')

		
	
		
		
			@foreach ($groups as $group)
				<div>
    			    <span>{{ $group->name }}</span>
    			    @if(Auth::user())
        			    <a href="update-group/{{$group->id}}">update</a>
        			    <a href="delete-group/{{$group->id}}">delete</a>
    			    @endif
			    </div>
			@endforeach
			<br/>
			@if(Auth::user())
			    	<a href="add-group">Add group</a>
			@endif
		
          

		
	</div>
</div>
 @endsection
