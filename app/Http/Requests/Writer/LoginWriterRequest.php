<?php

namespace App\Http\Requests\Writer;

use Illuminate\Foundation\Http\FormRequest;
use App\Writer;
use Hash;

class LoginWriterRequest extends FormRequest
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
            'phone' => 'bail|required|exists:writers,phone',
            // 'phone' => 'required',
            'password' => 'required|min:6'
        ];
    }

    public function withValidator($validator){
        if($validator->fails()) return;

        $validator->after(function($validator){
            $writer = Writer::where('phone', request('phone'))->first();
            // dd(request('phone'));
            if(!Hash::check(request('password'), $writer->password)){
                $validator->errors()->add('password', 'Mật khẩu không chính xác.');
                return;
            }
        });
    }
}
