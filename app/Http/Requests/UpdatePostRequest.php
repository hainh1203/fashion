<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|max:150',
            'file' => 'nullable|image',
            'excerpt' => 'nullable',
            'description' => 'nullable',
            'status' => [
                'required',
                Rule::in([
                    'published',
                    'not_published',
                ]),
            ],
        ];
    }
}