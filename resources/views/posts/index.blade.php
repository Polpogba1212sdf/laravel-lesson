<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app') @section('content')

<div class="container">
    <div class="panel-body">
    
    @include('common.errors')
    <a href="/create-post/" style="float:right;">Create new post</a> 
    
        
        @if (count($posts) > 0)
            <div class="panel-body">
                @foreach ($posts as $post)
                    <div class="task">
                    	<h3>{{ $post->title }}</h3>
                    	<div class="task-description">{{ $post->post }}</div>
                    	<a href="/update-post/{{$post->id}}">Update</a>
                    	<a href="/delete-post/{{$post->id}}">Delete</a>
                    </div>
                 @endforeach
             </div>
         @endif 
 </div>
</div>
         <div style="position:absolute;bottom:0;left: 50%;">	
              @if ($count_pages > 0)
                <div class="panel-body" style="width: 100px; justify-content: space-between; display: flex;">
                    @for ($i=1;$i<=$count_pages;$i++)
                        	<a href="/posts?page={{$i}}">{{$i}}</a>
                     @endfor
                 </div>
             @endif 
         </div>
   
 @endsection
            