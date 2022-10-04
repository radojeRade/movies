@extends('layouts.master')


@section('content')
    <form method="POST" action="/movies">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Story Line</label>
            <textarea name="story_line" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text" name="director" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" name="year" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"></button>

    </form>
    @endsection