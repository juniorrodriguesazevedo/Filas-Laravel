<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'min:5', 'max:100', 'email', 'unique:contacts,email'],
            'description' => ['required', 'min:3', 'max:2000', 'string']
        ];
    }
}
