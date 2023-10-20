<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DeleteProductController extends Controller{

    public $products;
    public function __construct(){
        $this->products = new Product();
    }

    function deleteProduct($id){

        // Tìm bài viết cần xóa
        $product = Product::findOrFail($id);
        // Xóa bài viết và liên kết trong bảng "media" thông qua phương thức trong Model
        $product->deleteProduct();

        return redirect()->back()->with('success', 'sản phẩm đã được xóa thành công.');

    }

    function deleteHistory($slug){
        $condition = [
            ['slug', '=', $slug],
        ];
        $value = [
            'delete' => 1,
            'status' => 0,
        ];
        $data = $this->products->updateProduct($condition, $value);
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa vào thùng rác thành công!');

    }
    function restoreProduct($slug){
        $condition = [
            ['slug', '=', $slug],
        ];
        $value = [
            'delete' => 0,
        ];
        $data = $this->products->updateProduct($condition, $value);
        return redirect()->back()->with('success', 'Đã khôi phục sản phẩm thành công');
    }
}
