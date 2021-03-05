<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfomationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'height'=> 'required',
            'weight' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => '名前を入力してください',
            'height.required' => '身長を入力してください',
            'weight.required' => '体重を入力してください',
        ];
    }
}
