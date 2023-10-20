<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermedia extends Model
{
    use HasFactory;
    protected $table = 'intermediates_category';

    public function addIntermedia($data){
        return $this->insert($data);
    }
    public function showIntermedia($whereShow){
        return $this->where($whereShow)->get();
    }
    public function showIntermedia2($whereShow){
        return $this->select('id_products')->where($whereShow)->get();
    }
    public function deleteInter($condition)
    {
        return $this->where($condition)->delete();
    }
}
