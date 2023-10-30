<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Intermedia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\EditProductRequest;
use Illuminate\Support\Str;

class EditProductController extends Controller
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
    public function editFormProduct($slug){
        $where = [
            'products.slug' => $slug,
        ];
        $idProduct = $this->product->getIdProduct($where);
        $whereImg =[
            'id_products' => $idProduct,
        ];
        $data = $this->product->getProduct($where);
        $img = $this->product->getProductImage($whereImg);
        $category = $this->product->Show($condition = [], 'categories');
        return view('admin.product.edit',['page'=>'product', 'data'=>$data, 'category'=>$category ,'img'=>$img]);
    }
    function deleteImage($id)
    {
        $condition = [
            ['id', '=', $id],
        ];
        $data = $this->image->deleteImage($condition);
        return redirect()->back()->with('success', 'Đã xóa ảnh thành công');
    }
    public function updateProduct(EditProductRequest $request, $slug){
        $value = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'describe'=> $request->describe,
            'price'=> $request->price,
            'sale_price' => $request->sale_price,
            'quantify'=>$request->quantify,
        ];
//        $salePrice = $request->sale_price;

        if ($request->sale_price && $request->sale_price >= $request->price) {
            return redirect()->back()->withInput()->withErrors(['sale_price' => 'Giá khuyến mãi phải nhỏ hơn giá bán.']);
        }

        $condition = [
            ['slug', '=', $slug],
        ];
        $condition1 = [
            ['id_products', '=', $request->id_product],
        ];
        $this->intermedia->deleteInter($condition1);
        $data = $this->product->updateProduct($condition, $value);
        if ($request->hasFile('uploadfile')) {
            // Nếu 'uploadfile' có file được tải lên
            $countImg = count($request->uploadfile);
            if ($countImg > 0) {
                for ($i = 0; $i < $countImg; $i++) {
                    $filename = time().$i.'-'.'product'.'.'.$request->uploadfile[$i]->extension();
                    $request->uploadfile[$i]->move(public_path("images/products"), $filename);
                    $request->merge(['image' => $filename]);
                    // Thay đổi 'image' thành 'images' trong mảng dữ liệu
                    $data = [
                        "image" => $request->image, // Thay đổi 'image' thành 'images' ở đây
                        "id_products" =>  $request->id_product,
                    ];
//                    dd($data);
                    $this->image->addImage($data); // Chỉnh sửa thành 'addMedia'

                }
            }
        }
        $countId = count($request->category);
            for ($i = 0; $i < $countId; $i++){
                $idCategory = $request->category[$i];
                $request->merge(['idCategory'=>$idCategory]);
                $data = [
                    "id_category" => $request->idCategory,
                    "id_products"=> $request->id_product,
                ];
                $this->intermedia->addIntermedia($data);
            }
        return redirect()->route('listProduct')->with('success', 'Sửa sản phẩm "' . $request->name . '" thành công!');
    }
}
