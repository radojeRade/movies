<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMoviesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() 
    {
        return [
            'title' => 'required',
            'story_line' => 'max:1000',
            'genre' => 'required',
            'director' => 'min:4',
            'year' => 'integer|min:1900|max:2000'
        ];
    }
}
