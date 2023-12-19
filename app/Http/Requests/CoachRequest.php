<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->method == 'POST') {
            return [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required|min:8',
                'phone' => 'required|min:11|unique:users',
                'sex' => 'required',
                'image_url' => 'required',
            ];
        } else {
            return [
                'name' => 'required',
                'username' => 'required',
                'phone' => 'required|min:11',
                'sex' => 'required',
            ];
        }
    }
}
