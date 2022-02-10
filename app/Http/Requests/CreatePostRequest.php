<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required | min:5',
            'summary' => 'required | min:10',
            'description' => 'max:100',
            'access' => '',
            'expired' => '',
            'commentable' => '',
            'date_publication' => 'required',
        ];
    }
}
