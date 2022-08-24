<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'adress' => 'nullable',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'هذه الخانه مطلوبه',
            'email.required' => 'هذه الخانه مطلوبه',
            'email.email' => 'يجب ان يكون بريد الكتروني',
            'phone.required' => 'هذه الخانه مطلوبه',
            'phone.min' => 'الهاتف غير صحيح',

        ];
    }
}
