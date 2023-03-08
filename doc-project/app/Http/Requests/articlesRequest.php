<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articlesRequest extends FormRequest
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
            'nameAutors'  => 'Required|min:3|max:50',
            'nameArticle'  => 'Required|min:3|max:200',
            'articleAnnotation'  => 'Required|min:3|max:500',
            'articleContent'  => 'Required|min:30',
        ];
    }

    public function messages()
    {
        return [
            'nameAutors.required' => 'Поле имя обязательно',
            'nameAutors.min' => 'Поле имя должно содержать минимум 3 символа',
            'nameAutors.max' => 'Поле имя должно содержать максимум 30 символов',
            'articleAnnotation.required' => 'Поле аннотация обязательно',
            'articleContent.required' => 'Поле содержимое обязательно',
            'nameArticle.required' => 'Поле название статьи обязательно',
            
        ];
    }
}
