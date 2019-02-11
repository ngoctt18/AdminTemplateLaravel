<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class LoginAdminRequest extends FormRequest
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
            'phone' => 'bail|required|exists:admins,phone',
            // 'phone' => 'required',
            'password' => 'required|min:6'
        ];
    }
    
    public function withValidator($validator){
        if($validator->fails()) return;

        $validator->after(function($validator){
            $admin = Admin::where('phone', request('phone'))->first();
            // dd(request('phone'));
            if(!Hash::check(request('password'), $admin->password)){
                $validator->errors()->add('password', 'Mật khẩu không chính xác.');
                return;
            }
        });
    }
}
