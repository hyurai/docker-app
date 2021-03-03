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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'height' => 'required',
            'weihgt' => 'required',
            'name' => 'required'
        ];
        
    }
    public function message(){
        return[
            'height.required' => '身長が書かれていません',
            'weight.required' => '体重は書かれていません',
            'name.required' => '名前が書かれていません',

        ];
    }
}
