<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class TaiKhoanRequest extends FormRequest
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
        'ho_ten' => 'required|string|max:255',
        'email' => 'required|email|unique:tb_tai_khoan,email,' . $this->route('id'),
        'mat_khau' => 'required|min:6',
        'xac_nhan_mk' => 'required|same:mat_khau',
        'so_dien_thoai' => 'required|string|max:20',
        'dia_chi' => 'required|string|max:255',
        'gioi_tinh' => 'required|in:Nam,Nữ',
        'ngay_sinh' => 'required|date',
        'chuc_vu_id' => 'required|exists:tb_chuc_vu,id',
        'anh_dai_dien' => 'required|image',
        'trang_thai' => 'required|in:0,1',
    ];
}

public function messages(): array
{
    return [
        'ho_ten.required' => 'Họ và tên là bắt buộc.',
        'ho_ten.string' => 'Họ và tên phải là một chuỗi ký tự.',
        'ho_ten.max' => 'Họ và tên không được dài quá 255 ký tự.',
    
        'email.required' => 'Email là bắt buộc.',
        'email.email' => 'Email phải có định dạng hợp lệ.',
        'email.unique' => 'Email đã được sử dụng.',
    
        'mat_khau.required' => 'Mật khẩu là bắt buộc.',
        'mat_khau.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        'xac_nhan_mk.required' => 'Xác nhận mật khẩu là bắt buộc.',
        'xac_nhan_mk.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
    
        'so_dien_thoai.required' => 'Số điện thoại là bắt buộc.',
        'so_dien_thoai.string' => 'Số điện thoại phải là một chuỗi ký tự.',
        'so_dien_thoai.max' => 'Số điện thoại không được dài quá 20 ký tự.',
    
        'dia_chi.required' => 'Địa chỉ là bắt buộc.',
        'dia_chi.string' => 'Địa chỉ phải là một chuỗi ký tự.',
        'dia_chi.max' => 'Địa chỉ không được dài quá 255 ký tự.',
    
        'gioi_tinh.required' => 'Giới tính là bắt buộc.',
        'gioi_tinh.in' => 'Giới tính phải là "Nam" hoặc "Nữ".',
    
        'ngay_sinh.required' => 'Ngày sinh là bắt buộc.',
        'ngay_sinh.date' => 'Ngày sinh phải là một ngày hợp lệ.',
    
        'chuc_vu_id.required' => 'Chức vụ là bắt buộc.',
        'chuc_vu_id.exists' => 'Chức vụ không tồn tại.',
    
        'anh_dai_dien.required' => 'Ảnh đại diện là bắt buộc.',
        'anh_dai_dien.image' => 'Ảnh đại diện phải là một tệp hình ảnh.',
        
    
        'trang_thai.required' => 'Trạng thái là bắt buộc.',
        'trang_thai.in' => 'Trạng thái phải là "Không kích hoạt" (0) hoặc "Kích hoạt" (1).',
    ];
}

    
}
