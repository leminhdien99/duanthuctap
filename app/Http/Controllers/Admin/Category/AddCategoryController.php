<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    function addFormCategory(){
            

        return view('admin.category.add')->with(['page'=>'addCategory']);
    }
    function addCategory(){
       return redirect()->back()->with('success','Đã thêm danh mucj cầu thành công');
    }
}
