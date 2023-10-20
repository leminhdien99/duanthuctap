<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EditCategoryController extends Controller
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    function editFormCategory($slug)
    {
        $condition = [
            ['slug', '=', $slug],
        ];
        $data = $this->category->editCategory($condition);
        return view('admin.category.add', ['page'=>'editCategory', 'data' => $data]);
    }

    function editCategory(EditCategoryRequest $request, $slug)
    {
        $condition = [
            ['slug', '=', $slug],
        ];
        $value = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'note' => $request->input('note', ''),
            'updated_at'  => date('y-m-d H:i:s')
        ];
        $data = $this->category->updateCategory($value, $condition);
       return redirect()->route('listCategory')->with('success', 'Đã sửa danh mục " ' . $request->name . ' " thành công');
    }
}
