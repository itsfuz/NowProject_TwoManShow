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
        'category_id',
        'description',
        'image'

    ];

    public function Categories(){

        return $this->belongsTo(Categories::class);
    }
}
