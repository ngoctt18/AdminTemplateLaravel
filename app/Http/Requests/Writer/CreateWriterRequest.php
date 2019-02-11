<?php

namespace App\Http\Requests\Writer;

use Illuminate\Foundation\Http\FormRequest;

class CreateWriterRequest extends FormRequest
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
            'name' => 'required|min:6|max:30',
            'username' => 'required|alpha|unique:writers,username',
            'phone' => 'required|unique:writers,phone',
            'email' => 'required|email|unique:writers,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password',
        ];
    }
}
