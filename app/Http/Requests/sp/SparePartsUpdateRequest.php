<?php

namespace App\Http\Requests\sp;

use Illuminate\Foundation\Http\FormRequest;

class SparePartsUpdateRequest extends FormRequest
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
            'image_s' => 'image',
            'salary' => 'required',
            'detilse' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'هذه الخانه مطلوبه',
            'image_s.image' => 'يجب ان تكون صوره',
            'password.min' => 'يجب ان تزيد كلمه السر عن 6 ارقام',
            'salary.required' => 'هذه الخانه مطلوبه',
            'detilse.required' => 'هذه الخانه مطلوبه',


        ];
    }
}
