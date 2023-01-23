@extends('admin.master')

@section("content")
    
    <article class="entry">

    <h2 class="entry-title">Login</h2>
    
    <div class="entry-content">

        @if($errors->any())

        <div class="alert alert-danger">

            @foreach($errors->all() as $e)
            {{ $e }} <Br>
            @endforeach

        </div>

        @endif

        <form action="{{ route('admin.login') }}" method="post">
        @csrf
    
        <label>Username</label>
        <input type="text" class="form-control mb-3" name="name" value="{{ old("name") }}">

        <label>Password</label>
        <input type="password" class="form-control mb-3" name="password">

        <hr>
        <button class="btn btn-primary" type="submit">Login</button>

        </form>

    </div>

    </article>

@endsection