<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "ho_ten" => "required|max:255|min:1",
            "email"=> "required|email|max:255|unique:tb_tai_khoan",
            "mat_khau" => "required|max:255|min:1"
        ];
    }
    public function messages(){
        return [
            "required" => ":attribute không được để trống",
            "max" => ":attribute tối đa :max ký tự",
            "min" => ":attribute tối thiểu :min ký tự",
            "email" => ":attribute phải đúng định dạng email",
            "unique" => ":attribute có vẻ đã tồn tại "
        ];
       
    }
    public function attributes(){
        return [
            "ho_ten" => "Họ tên",
            "email" => "Email",
            "mat_khau" => "Mật khẩu"
        ];
    }
}
