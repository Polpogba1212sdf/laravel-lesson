<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
	<div class="panel-body">

		@include('common.errors')

		
	
		
		
			@foreach ($groups as $group)
				<div>
    			    <span>{{ $group->name }}</span>
    			    <a href="update-group/{{$group->id}}">update</a>
			    </div>
			@endforeach
			<br/>
			@if(Auth::user())
			    	<a href="add-group">Add group</a>
			@endif
		
          

		
	</div>
</div>
 @endsection
