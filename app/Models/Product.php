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
    public function intermedia()
    {
        return $this->hasMany(Intermedia::class, 'id_products');
    }
    public function image()
    {
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

    public function getProduct($condition){
        return $this->select([
            'products.id as id_products',
            'products.name as name_product',
            'products.slug',
            'describe',
            'price',
            'quantify',
            'products.created_at',
            DB::raw('GROUP_CONCAT(categories.name) AS name_category'),
            DB::raw('GROUP_CONCAT(intermediates_category.id_category) AS id_category')
        ])
                    ->leftJoin('intermediates_category', 'products.id', '=', 'intermediates_category.id_products')
                    ->join('categories', 'intermediates_category.id_category', '=', 'categories.id')
                    ->where($condition)
                    ->groupBy('id_products')
                    ->first();
    }

    public function getProductImage($condition){
        return $this->select([
            'products.id as id_product',
            DB::raw('GROUP_CONCAT(images_product.image) AS img'),
            DB::raw('GROUP_CONCAT(images_product.id) AS id_img')
        ])
                    ->join('images_product', 'images_product.id_products', '=', 'products.id')
                    ->where($condition)
                    ->groupBy('id_product')
                    ->get();
    }

}
