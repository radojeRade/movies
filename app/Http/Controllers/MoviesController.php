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
        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }

    public function create(){
        return view('movies.create');
    }
    public function store(CreateMoviesRequest $request){

        $validated = $request->validated();
        Movie::create([
            'title'=>$validated['title'], // moze i ovako validacija
            'genre'=>$validated['genre'],
            
            'story_line' => $validated['story_line'],
            'year' => $validated['year']
            
        ]);
        return redirect('/movies');
    }
}
