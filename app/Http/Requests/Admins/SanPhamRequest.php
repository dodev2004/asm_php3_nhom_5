<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
        'ten_san_pham' => 'required|max:255',
        'ma_san_pham' => 'required|max:255|unique:tb_san_pham,ma_san_pham,' . $this->route('id'),
        'hinh_anh' => 'required|image',
        'so_luong' => 'required|integer|min:0',
        'gia_san_pham' => 'required|numeric|min:0',
        'gia_khuyen_mai' => 'numeric|min:0|lt:gia_san_pham',
        'ngay_nhap' => 'required|date',
        'danh_muc_id' => 'required|integer|exists:tb_danh_muc,id',
    ];
}

public function messages(): array
{
    return [
        'ten_san_pham.required' => 'Tên sản phẩm là bắt buộc.',
        'ten_san_pham.max' => 'Tên sản phẩm không được dài quá 255 ký tự.',
        
        'ma_san_pham.required' => 'Mã sản phẩm là bắt buộc.',
        'ma_san_pham.max' => 'Mã sản phẩm không được dài quá 255 ký tự.',
        'ma_san_pham.unique' => 'Mã sản phẩm đã tồn tại.',

        'hinh_anh.required' => 'Hình ảnh là bắt buộc.',
        'hinh_anh.image' => 'Hình ảnh phải là một tệp hình ảnh hợp lệ.',

        'so_luong.required' => 'Số lượng là bắt buộc.',
        'so_luong.integer' => 'Số lượng phải là một số nguyên.',
        'so_luong.min' => 'Số lượng không được nhỏ hơn 0.',

        'gia_san_pham.required' => 'Giá sản phẩm là bắt buộc.',
        'gia_san_pham.numeric' => 'Giá sản phẩm phải là một số.',
        'gia_san_pham.min' => 'Giá sản phẩm không được nhỏ hơn 0.',

        'ngay_nhap.required' => 'Ngày nhập là bắt buộc.',
        'ngay_nhap.date' => 'Ngày nhập phải là một ngày hợp lệ.',

        'danh_muc_id.required' => 'Danh mục là bắt buộc.',
        'danh_muc_id.integer' => 'Danh mục phải là một số nguyên.',
        'danh_muc_id.exists' => 'Danh mục không tồn tại.',

        'gia_khuyen_mai.numeric' => 'Giá khuyến mãi phải là một số.',
        'gia_khuyen_mai.min' => 'Giá khuyến mãi không được nhỏ hơn 0.',
        'gia_khuyen_mai.lt' => 'Giá khuyến mãi phải nhỏ hơn giá sản phẩm.',
    ];
}


}
