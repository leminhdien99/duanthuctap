<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model{

    use HasFactory;

    protected $table = 'products';

    public function listProduct($condition){
        return $this->orderBy('id', 'desc')->where($condition)->paginate(5);
    }

    public function Show($condition, $name){
        return DB::table($name)->where($condition)->get();
    }

    public function updateProduct($condition, $value){
        return $this->where($condition)->update($value);
    }

    public function deleteProduct(){
        $this->intermedia()->delete();
        $this->image()->delete();
        // Xóa sản phẩm
        $this->delete();
    }

    public function intermedia(){
        return $this->hasMany(Intermedia::class, 'id_products');
    }

    public function image(){
        return $this->hasMany(Image::class, 'id_products');
    }

    public function addProduct($value){
        return $this->insertGetId($value);
    }

    public function getId($where){
        return $this->select('id')->where($where)->first()->id;
    }

    public function editProduct($where){
        return $this->where($where)->first();
    }

    public function getIdProduct($where){
        return $this->select('id')->where($where)->first()->id;
    }

    public function clientProductAll($condition){
        return $this->select([
            'products.id as id_products',
            'products.name as name',
            'products.slug',
            'describe',
            'price',
            'quantify',
            'products.created_at',
            DB::raw('GROUP_CONCAT(products.name) AS name'),
            DB::raw('GROUP_CONCAT(intermediates_category.id_category) AS id_category')
        ])
                    ->leftJoin('intermediates_category', 'products.id', '=',
                        'intermediates_category.id_products')
                    ->join('categories', 'intermediates_category.id_category', '=', 'categories.id')
                    ->where($condition)
                    ->groupBy('id_products')
                    ->get();
    }

    public function getProduct($condition){
        return $this->select([
            'products.id as id_products',
            'products.name as name_product',
            'products.slug',
            'describe',
            'price',
            'sale_price',
            'quantify',
            'products.created_at',
            DB::raw('GROUP_CONCAT(categories.name) AS name_category'),
            DB::raw('GROUP_CONCAT(intermediates_category.id_category) AS id_category')
        ])
                    ->leftJoin('intermediates_category', 'products.id', '=',
                        'intermediates_category.id_products')
                    ->join('categories', 'intermediates_category.id_category', '=', 'categories.id')
                    ->where($condition)
                    ->groupBy('id_products')
                    ->first();
    }


    public function getProductImage($whereImg){
        return $this->select([
            'products.id as id_product',
            DB::raw('GROUP_CONCAT(images_product.image) AS img'),
            DB::raw('GROUP_CONCAT(images_product.id) AS id_img')
        ])
                    ->join('images_product', 'images_product.id_products', '=', 'products.id')
                    ->where($whereImg)
                    ->groupBy('id_product')
                    ->get();
    }

    public function getProductList($condition, $order){
        $query = $this->where($condition)
                      ->select('products.id as id_products', 'name', 'slug', 'price', 'sale_price',
                          'quantify', 'describe',
                          DB::raw('GROUP_CONCAT(images_product.image) AS images'))
                      ->join('images_product', 'images_product.id_products', '=', 'products.id')
                      ->groupby('id_products');
        if (!empty($order)){
            $query->orderBy($order[0], $order[1]);
        }

        return $query->get();
    }

    public function getProductFirst($slug){
        $result = DB::table('products')
                    ->select('products.id as id_products', 'products.name AS name_product',
                        'sale_price',
                        'products.slug AS slug_product', 'price', 'quantify', 'describe',
                        DB::raw('GROUP_CONCAT(DISTINCT categories.name) AS name_category'),
                        DB::raw('GROUP_CONCAT(DISTINCT categories.slug) AS slug_category'),
                        DB::raw('GROUP_CONCAT(images_product.image) AS images'))
                    ->join('intermediates_category', 'products.id', '=',
                        'intermediates_category.id_products')
                    ->join('categories', 'intermediates_category.id_category', '=', 'categories.id')
                    ->join('images_product', 'products.id', '=', 'images_product.id_products')
                    ->where('products.slug', $slug)
                    ->groupBy('products.id')
                    ->first();

        return $result;
    }


    public function getProductCA($condition){
        $products = DB::table('products')
                      ->join('intermediates_category', 'intermediates_category.id_products', '=',
                          'products.id')
                      ->join('categories', 'categories.id', '=',
                          'intermediates_category.id_category')
                      ->join('images_product', 'products.id', '=', 'images_product.id_products')
                      ->where($condition)
                      ->select('products.id as id_products',
                          'products.name as name',
                          'products.slug',
                          'describe',
                          'price',
                          'sale_price',
                          'quantify',
                          'products.created_at',
                          DB::raw('GROUP_CONCAT(images_product.image) AS images'),
                          DB::raw('GROUP_CONCAT(DISTINCT categories.name) AS name_ca'),
                          DB::raw('GROUP_CONCAT(DISTINCT categories.slug) AS slug_ca'))
                      ->groupBy('products.id')
                      ->get();

        return $products;
    }

}
