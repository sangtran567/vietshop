<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'categoryName' => 'required|max:100|',
//            'status' => 'required',
        ];
    }
    public function messages()
    {
       return [
           'categoryName.required'=>'Tên danh mục không được để trống',
           'categoryName.max'=>'Tên danh mục không được quá 100 ký tự',
//           'status.required'=>'Vui lòng chọn trạng thái cho danh mục này',
       ];
    }
}
