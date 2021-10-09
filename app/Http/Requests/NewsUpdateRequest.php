<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
    public function rules():array
    {
        return [
            'category_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'min:3'],
            'author' => ['required'],
            'image' => ['sometimes'],
            'description' => ['sometimes']
        ];
    }

    public function messages()
    {
        return [
            'requared' => 'Поле :attribute нужно заполнить'
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'заголовок',
            'author' => 'автор'
        ];
    }
}
