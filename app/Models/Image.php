<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images_product';

    public function addImage($data){
        return $this->insert($data);
    }
    public function showImage($whereShow){
        return $this->where($whereShow)->get();
    }
    public function deleteImage($condition)
    {
        return $this->where($condition)->delete();
    }
}
