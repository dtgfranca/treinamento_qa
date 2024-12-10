<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required'],
            'author' => ['required'],
            'year' => ['required'],
            'publisher' => ['required'],
            'isnb_number' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
