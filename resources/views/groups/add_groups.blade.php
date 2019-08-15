
<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
<div class="panel-body">

@include('common.errors')

<form action="" method="POST" class="form-horizontal">
{{ csrf_field() }}

<div class="form-group">
<label for="task" class="col-sm-3 control-label">Name of group</label>
<div class="col-sm-6">
<input type="text" name="name" id="task-name" class="form-control">
</div>
</div>


    
    
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
    <button type="submit" class="btn btn-default">
    <i class="fa fa-plus"></i> Add group
    </button>
    </div>
    </div>
    </form>
    </div>
    
    @endsection
                