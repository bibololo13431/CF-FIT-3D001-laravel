<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ScheduleCatProRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name'=>'required|min:6|max:255',
            'type' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!in_array($value, ['Giường nằm', 'Ghế ngồi', 'Ghế nằm'])) {
                        $fail('Vui lòng chỉ nhập "Giường nằm" , "Ghế ngồi" hoặc "Ghế nằm');
                    }
                },
            ],
            'schedule'=>'required',
        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Yeu cau nhap ten lo trinh',
            'type.required' => 'Vui long chỉ nhap "Giường nằm" hoac "Ghế ngồi"',
            'schedule.required' => 'Vui long nhap lo trinh xe'
        ];
    } 
}
