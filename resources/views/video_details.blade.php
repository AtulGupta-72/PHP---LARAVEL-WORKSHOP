@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">{{ $video->title }}</h2>

  <div class="entry-meta">
      <i class="bi bi-calendar text-muted"></i> {{ $video->created_at->diffForHumans() }} &nbsp;
      <i class="bi bi-person text-muted"></i> {{ $video->user->name }} &nbsp;
      <i class="bi bi-tags text-muted"></i> Funny
           
  </div>

  <div class="entry-content">
    
  <video controls style="height: 300px; width: 100%; border: 1px solid #e1e1e1; padding: 5px;">  
    <source src="{{ asset("uploads/".$video->video_file) }}" type="video/mp4">  
    Your browser does not support the html video tag.  
  </video>  

    {{ $video->description }}

  </div>

  </article>

@endsection