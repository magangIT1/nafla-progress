<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    function getCategory () {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    function getProductDetail () {
        return $this->belongsTo(ProductDetail::class, 'productdetail_id', 'id');
    }
}
