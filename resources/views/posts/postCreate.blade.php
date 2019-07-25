<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
	<div class="panel-body">

		@include('common.errors')

		<form action="{{ url('/create-post') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="task" class="col-sm-3 control-label">Title</label>
				<div class="col-sm-6">
					<input type="text" name="title" id="task-name" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="task" class="col-sm-3 control-label">Post</label>
				<div class="col-sm-6">
					<textarea type="text" name="post" id="task-name"
						class="form-control"></textarea>
				</div>
			</div>

			


			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add post
					</button>
				</div>
			</div>
		</form>
	</div>
	@endsection