@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">{{ $category->name }} Videos</h2>

    <div class="entry-content">
      

      <div class="row">

        @foreach($videos as $v)

        <div class="col-md-6">
          <div class="card mb-4">
            <img src="{{ asset('uploads/'.$v->thumb) }}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('site.video.details', $v->id) }}">{{ $v->title }}</a>
              </h5>
              <i class="bi bi-calendar text-muted"></i> {{ $v->created_at->diffForHumans() }} &nbsp;
              <i class="bi bi-person text-muted"></i> {{ $v->user->name }}
            </div>
          </div>
        </div>
        
        @endforeach
        

      </div>

      


    </div>

  </article>

@endsection