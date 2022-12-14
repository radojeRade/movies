<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMoviesRequest;
use App\Models\Movie;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function index(){
        $movies = Movie::all();
         return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie = Movie::with('comments')->find($id);

        return view('movies.show', compact('movie'));
    }
    public function getLastFiveMovies(){
        $movies = Movie::latest()->take(5)->get();
        return view('partials.sidebar', compact('movies'));
    }

    public function create(){
        return view('movies.create');
    }
    public function store(CreateMoviesRequest $request){

        $validated = $request->validated();
        Movie::create([
            'title' => $validated['title'], // moze i ovako validacija
            'genre' => $validated['genre'],
            'story_line' => $validated['story_line'],
            'director' => $validated['director'],
            'year' => $validated['year']
            
        ]);
        return redirect('/movies');
    }
}
