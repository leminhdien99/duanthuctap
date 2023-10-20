<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;
class EditProductRequest extends FormRequest
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
            'name' => [
                'required',
                'min:5',
                'max:255',
                Rule::unique('products', 'name')->ignore($this->slug, 'slug'),
            ],
            'describe' => 'required',
            'price' => 'required|numeric|min:0',
            'quantify' => 'required|numeric|min:0',
            'category' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm ',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'name.min' => 'Tên sản phẩm từ 5 ký tự trở lên',
            'name.max' => 'Tên sản phẩm tối đa 255 kí tự',
            'category.required' => 'Vui lòng chọn danh mục ',
            'describe.required' => 'Vui nhập nội dung ',
            'price.required' => 'Vui lòng nhập giá',
            'price.numeric' => 'Giá phải là một số',
            'price.min' => 'Giá không được là số âm',
            'quantify.required' => 'vui lòng nhập số lượng',
            'quantify.numeric' => 'Số lượng phải là một số',
            'quantify.min' => 'Số lượng không được âm',
        ];
    }
}
