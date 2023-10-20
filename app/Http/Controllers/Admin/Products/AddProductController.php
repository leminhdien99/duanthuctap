<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Intermedia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\AddProductRequest;
use Illuminate\Support\Str;

class AddProductController extends Controller
{
    public $product;
    public $image;
    public $intermedia;
    public function __construct()
    {
        $this->product = new Product();
        $this->image = new Image();
        $this->intermedia = new Intermedia();
    }
    public function addFormProduct(){
        $condition = [];
        $category = $this->product->Show($condition, 'categories');
        return view('admin.product.add', ['page' => 'product', 'category'=>$category]);
    }
    public function addProduct(AddProductRequest $request){
        $value = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'describe'=> $request->describe,
            'price'=> $request->price,
            'quantify'=>$request->quantify,
            'created_at'=>now(),
        ];
        $idProduct = $this->product->addProduct($value);
        $countId = count($request->category);
        if ($countId>0){
            for ($i = 0; $i < $countId; $i++){
                $idCategory = $request->category[$i];
                $request->merge(['idCategory'=>$idCategory]);
                $data = [
                    "id_category" => $request->idCategory,
                    "id_products"=> $idProduct,
                ];
                $this->intermedia->addIntermedia($data);
            }
        }
        if ($request->hasFile('uploadfile')) {
            // Xử lý khi trường uploadfile không rỗng
            $countImg = count($request->uploadfile);
            if ($countImg > 0) {
                for ($i = 0; $i < $countImg; $i++) {
                    $randomName = Str::random(10);
                    $filename = time().$randomName.'-'.'product'.'.'.$request->uploadfile[$i]->extension();
                    $request->uploadfile[$i]->move(public_path("images"), $filename);
                    $request->merge(['image' => $filename]);
                    // Thay đổi 'image' thành 'images' trong mảng dữ liệu
                    $data = [
                        "image" => $request->image, // Thay đổi 'image' thành 'images' ở đây
                        "id_products" => $idProduct,
                    ];
                    $this->image->addImage($data); // Chỉnh sửa thành 'addMedia'
                }
            }
        }
        return redirect()->route('listProduct')->with('success', 'Thêm sản phẩm " ' . $request->name . ' " thành công');
    }
}
