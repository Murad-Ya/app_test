<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'name',
        'image',
        'price',
        'cost',
        'teg',
        'category_id'
    ];


    public function category()
    {
        return $this->hasOne(Category::class , 'category_id', 'id');
    }

}
