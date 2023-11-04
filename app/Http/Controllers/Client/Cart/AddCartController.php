<?php

namespace App\Http\Controllers\client\cart;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AddCartController extends Controller{

    public $cart;
    public $product;

    function __construct(){
        $this->cart    = new Cart();
        $this->product = new Product();
    }

    function addCart($slug, Request $request){

        $condition = [
            ['products.slug', '=', $slug]
        ];
        $product   = $this->product->getProductFirst($slug);
        $user = Auth::user();
        // cắt hình trong chuỗi kí tự
        $quantify = 1;
        // Tách chuỗi thành mảng
        $images = $product->images;
        $imageArray = explode(',', $images);

        // Lấy tên file ảnh đầu tiên
        $firstImage = reset($imageArray);
        $condition = [
            ['id_product', '=', $product->id_products],
            ['id_user', '=', $user->id],
            ['status', '=', 0],
        ];
        $cart = $this->cart->getCart($condition);
//        dd($cart);
        if ($cart) {
            $value = [
                'quantity' => $cart->quantity + 1,
                'total' => $cart->price * ($cart->quantity + 1),
            ];
            $this->cart->updateCart($condition, $value);
            return redirect()->route('listCart',Auth::user()->id);
        } else {
            $value = [
                'id_user'    => $user->id,
                'id_product' => $product->id_products,
                'quantity'   => $quantify,
                'price'      => ($product->sale_price == null ? $product->price : $product->sale_price ),
                'total'      => ($product->sale_price == null ? $product->price : $product->sale_price ) * $quantify,
                'date_input' => date('Y-m-d H:i:s'),
                'images'     => $firstImage,
                'name'       => $product->name_product,
                'token'      => $user->token,
            ];

            $this->cart->addCart($value);
            return redirect()->route('listCart',Auth::user()->id);
        }

    }
    public function updateCart($value, Request $request)
    {
        $newQuantity = $request->input('quantity');
        $product = $this->cart->getIdProduct($value);
        // Cập nhật số lượng và giá trị sản phẩm trong cơ sở dữ liệu
        $this->cart->updateQuantity($product, $newQuantity);
        $this->cart->updatePrice($product);
        return redirect()->route('client.pages.cart');
    }
    public function updateQuantity(Request $request)
    {
        $quantity = $request->quantity;
        $id_product = $request->id_product;
        $product = Cart::find($id_product);
        if (!$product){
            return response()->json([
                'errol' => 'lỗi'
            ],404);
        }
        $product->update([
            'quantity' => $quantity
        ]);
        return Response()->json([
            'price' => $product->price * $quantity
        ], 201);
    }
}
