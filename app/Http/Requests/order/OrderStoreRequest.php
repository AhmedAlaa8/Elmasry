<?php

namespace App\Http\Requests\order;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'phone' => 'required',
            'phone2' => 'required',
            'adress' => 'required',
            'salary' => 'required',
            'user_id' => 'required|exists:users,id',
            'spare_parts_id' => 'required|exists:spare_parts,id',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'هذه الخانه مطلوبه',
            'name.min' => 'يجب ان يزيد الاسم عن 3 احرف',
            'phone.required' => 'هذه الخانه مطلوبه',
            'phone2.required' => 'هذه الخانه مطلوبه',
            'adress.required' => 'هذه الخانه مطلوبه',
            'salary.required' => 'هذه الخانه مطلوبه',
            'user_id.required' => 'هذه الخانه مطلوبه',
            'spare_parts_id.required' => 'هذه الخانه مطلوبه',
            'user_id.exists' => 'هذا المستخدم غير موجود',
            'spare_parts_id.exists' => 'هذا المستخدم غير موجود',


        ];
    }
}
