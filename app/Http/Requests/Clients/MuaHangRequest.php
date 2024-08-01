<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class MuaHangRequest extends FormRequest
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
        "ten_nguoi_nhan" => "required|max:255",
        "email_nguoi_nhan" => "required|max:255|email",   
        "so_dien_thoai_nguoi_nhan"=> "required|max:255",
        "dia_chi_nguoi_nhan" => "required|max:255",   
        ];
    }
    public function messages(){
        return [
            "required" =>":attribute không được để trống",
            "max" => ":attribute tối đa :max ký tự",
            "email" => ":attribute không được để trống",
        ];
    }
    public function attributes(){
        return [
            "ten_nguoi_nhan" => "Tên người nhận",
            "email_nguoi_nhan" => "Email người nhận",
            "so_dien_thoai_nguoi_nhan" => "Số điện thoại người nhận",
            "dia_chi_nguoi_nhan" => "Địa chỉ người nhận"    
        ];
    }
}
