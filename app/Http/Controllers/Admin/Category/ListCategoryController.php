<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ListCategoryController extends Controller
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    function listCategory(){
        $data = $this->category->listCategory();
        return view('admin.category.list', ['query' => $data]);
    }

    public function StatusCategory($postId)
    {
        $status = Category::find($postId);

        if ($status) {
            if ($status->status) {
                $status->status = 0;
            } else {
                $status->status = 1;
            }
            $status->save();
        }
        return back();
    }
}
