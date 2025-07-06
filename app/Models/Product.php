<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'categories',
        'category_id',
        'status',
        'price',
        'image'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
