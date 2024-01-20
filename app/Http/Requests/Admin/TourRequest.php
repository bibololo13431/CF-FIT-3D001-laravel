<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'=>'required|unique:tour,name,'.$this->route('tour'),
            'image_url'=>'image|max:10240',
            'description'=>'required',
            'date'=>'required|after_or_equal:today',
            'time'=>'required',
            'seatqty' => 'required|numeric|min:8|max:32',
            'price'=>'required|numeric|min:0|max:9999999',
            'status'=>'required',
            'schedule_cat_pro_id'=>'required',
            'type_id'=>'required',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'Vui long nhap mo ta tour',
            'description.required' => 'Vui long nhap mo ta tour',
            'date.required' => 'Vui long chon ngay khoi hanh',
            'time.required' => 'Vui chon gio khoi hanh',
            'seat.required' => 'Vui long nhap so cho ngoi',
            'price.required' => 'Vui long nhap gia 1 tour',
            'status.required' => 'Vui long chon tinh trang tour',
            'schedule_cat_pro_id.required' => 'Vui long chon lo trinh tour',
            'type_id.required' => 'Vui long chon loai xe',
        ];
    }
}
