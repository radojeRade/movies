@extends('layouts.master')

@section('content')


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://lajoyalink.com/wp-content/uploads/2018/03/Movie.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$movie->title}}</h5>
    <p class="card-text">{{$movie->story_line}}</p>
    <p>{{$movie->director}}</p>
    <p class="card-text"><a href="{{ route('genres', ['genre' => $movie->genre]) }}" > {{$movie->genre}}</a></p>
    <p class="card-text">{{$movie->year}}</p>

    <div>
        <h4>Comments:</h4>

        <ul>
            @foreach($movie->comments as $comment)
                <li>
                    {{ $comment->created_at }}
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>        
    </div>
    <div>
    <form method="POST" action="/movies/{{ $movie->id }}/comments">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Leave a comment:</label>
            <textarea name="content" rows="2" class="form-control"></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>
@endsection