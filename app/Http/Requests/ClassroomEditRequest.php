<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomEditRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:class_rooms|',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama kelas',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama kelas wajib diisi',
            'name.unique' => 'Nama kelas sudah ada',
        ];
    }
}