<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
	<div class="panel-body">

		@include('common.errors')

		<form action="" method="POST" class="form-horizontal" id="form">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="task" class="col-sm-3 control-label">Name</label>
				<div class="col-sm-6">
					<input type="text" name="name" id="task-name" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="task" class="col-sm-3 control-label">Description</label>
				<div class="col-sm-6">
					<textarea type="text" name="description" id="task-name"
						class="form-control"></textarea>
				</div>
			</div>
		
			

			


			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add subtask
					</button>
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript">

$(function())
	$('#form').submit(function(e){
	alert(1);


	
})





</script>	
	@endsection