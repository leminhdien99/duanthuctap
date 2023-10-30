<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function listCategory()
    {
        return $this->orderBy('id', 'desc')->paginate(5);
    }

    public function AddCategory($value)
    {

        return $this->insert($value);
    }
    public function getId($where){
        return $this->select('id')->where($where)->first()->id;
    }

    public function editCategory($condition)
    {
        return $this->where($condition)->first();
    }

    public function updateCategory($value, $condition)
    {
        return $this->where($condition)->update($value);
    }

    public function GetCategory()
    {
        return $this->get();
    }

    public function deleteCategory($slug)
    {
        // Kiểm tra xem nhu cầu có sản phẩm nào không
        $demandHasProducts = $this->where('categories.slug', $slug)
                                  ->join('intermediates_category', 'categories.id', '=', 'intermediates_category.id_category')
                                  ->exists();

        if ($demandHasProducts) {
            return false; // Trả về false nếu có sản phẩm liên quan
        }

        // Nếu không có sản phẩm liên quan, xóa nhu cầu
        $this->where('categories.slug', $slug)->delete();

        return true; // Trả về true nếu xóa thành công
    }
}
