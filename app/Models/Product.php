<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_unique_id',
        'color',
        'category_id',
        'description',
        'image',
        'detail_1',
        'detail_2',
        'detail_3',
        'detail_4'

    ];

    public function Categories(){

        return $this->belongsTo(Categories::class);
    }
}
