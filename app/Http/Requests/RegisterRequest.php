<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full-name'=>'required',
            'email'=>'required|email',
            'phone' => 'required',
            'job'=>'required',
            'password'=>'required',
            'password_confirmation' => 'required|same:password',
        ];
    }
}