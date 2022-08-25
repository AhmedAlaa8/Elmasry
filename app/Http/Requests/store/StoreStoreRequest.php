<?php

namespace App\Http\Requests\store;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoreRequest extends FormRequest
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
            'name_category' => 'required',
            'salary_category' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'name_category.required' => 'هذه الخانه مطلوبه',
            'name.salary_category' => 'هذه الخانه مطلوبه',


        ];
    }
}
