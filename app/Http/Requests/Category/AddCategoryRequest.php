<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100|unique:categories,name',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập vào tên danh mục',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'name.min' => 'Tên danh mục từ 5 ký tự trở lên',
            'name.max' => 'Tên danh mục dưới 100 ký tự',
        ];
    }
}
