<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function store(CreateCommentRequest $request, $id)
    {
        
        Movie::find($id)->addComment($request->validated()['content']);

        return redirect()->back();
    }
}
