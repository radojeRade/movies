<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['title', 'genre', 'director', 'year', 'story_line'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($content)
    {
        $this->comments()->create([
            'content' => $content
        ]);
    }
}
