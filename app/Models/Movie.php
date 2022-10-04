<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['title', 'genre','director', 'year', 'story_line'];

    // public statfunction show($id){
    //     $movie = $this->find($id); //proveriti da li ova metoda treba u model

    //     return $movie; //view('movies.show', compact('movie'))
    // }
}
