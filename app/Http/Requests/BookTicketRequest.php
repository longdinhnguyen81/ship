<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTicketRequest extends FormRequest
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
            'name' => 'required',
            'cmnd' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Bạn chưa nhập Họ và tên.",
            "cmnd.required" => "Bạn chưa nhập số chứng minh nhân dân.",
            "email.required" => "Bạn chưa nhập email.",
            "email.email" => "Email không đúng định dạng",
            "phone.required" => "Bạn chưa nhập số điện thoại.",
        ];
    }
}
