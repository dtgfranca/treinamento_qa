<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'author' => ['required'],
            'ano' => ['required'],
            'edition' => ['required'],
            'isnb_number' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
