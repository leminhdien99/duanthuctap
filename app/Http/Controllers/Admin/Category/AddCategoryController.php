<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddCategoryController extends Controller
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    function addFormCategory()
    {
        return view('admin.category.add')->with(['page'=>'addCategory']);
    }

    function addCategory(AddCategoryRequest $request)
    {
        $value = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'note' => $request->input('note', ''),
            'created_at' => now(),
        ];
        $data = $this->category->AddCategory($value);
       return redirect()->route('listCategory')->with('success', 'Thêm danh mục " ' . $request->name . ' " thành công');
    }
}
