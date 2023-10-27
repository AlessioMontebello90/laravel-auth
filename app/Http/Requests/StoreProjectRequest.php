<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'git_url' => ['string'],
            'description' => ['string']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'the name is mandatory',
            'name.string' => 'the name must be text',
            'name.max' => 'the name must be a maximum of 50 characters',

            'git_url.url' => 'enter a URL',

            'description.string' => 'the description must be of text type',
        ];
    }
}