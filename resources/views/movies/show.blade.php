@extends('layouts.master')

@section('title', '$movie->title')  


@section('content')

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://lajoyalink.com/wp-content/uploads/2018/03/Movie.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$movie->title}}</h5>
    <p class="card-text">{{$movie->story_line}}</p>
    <p>{{$movie->director}}</p>
    <p class="card-text">{{$movie->genre}}</p>
    <p class="card-text">{{$movie->year}}</p>

  </div>
</div>
@endsection