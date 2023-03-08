<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required|min:5|max:20',
            'message' => 'required|min:10|max:500',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" обязательно',
            'email.required' => 'Поле "Email" обязательно, введите почту',
            'subject.required' => 'Поле "Тема сообщения" обязательно',
            'subject.min' => 'Поле "Тема сообщения" должно содержать минимум 5 символа',
            'subject.max' => 'Поле "Тема сообщения" должно содержать максимум 20 символов',
            'message.required' => 'Поле "Ввода" обязательно',
            'message' => 'Поле "Ввода" должно содержать минимум 10 символа',
            'message' => 'Поле "Ввода" должно содержать максимум 500 символов',
        ];
    }
}
