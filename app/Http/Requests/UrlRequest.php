<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlRequest extends FormRequest
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

                'url' => 'required|unique:urls|active_url'

        ];
    }
    public function messages(){
        return[
          'url.required' => 'Вы не заполнили поле URL',
            'url.active_url' =>'Вы не корректно ввели URL',
            'url.unique' => 'Такой URL уже существует. Введите другой URL'
        ];
    }
}
