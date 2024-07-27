<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentEditRequest extends FormRequest
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
        $studentId = $this->route('id');
        return [
            'NIS' => [
                'required',
                'string',
                'max:255',
                Rule::unique('students')->ignore($studentId), // Exclude current record from uniqueness check
            ],

            'name' => 'required|min:3|max:50',
            'class_id' => 'required',
            'gender' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'Class',
            'NIS' => 'NIS',
            'name' => 'Name',
            'gender' => 'Gender',
        ];
    }

    public function messages()
    {
        return [
            'NIS.required' => 'NIS wajib di isi',
            'NIS.unique' => 'NIS sudah ada',
            'NIS.max' => 'NIS tidak boleh lebih dari :max karakter',
            'name.required' => 'Nama wajib di isi',
            'name.min' => 'Nama minimal :min karakter',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'class_id.required' => 'Class wajib di isi',
            'gender.required' => 'Gender wajib di isi',
        ];
    }
}