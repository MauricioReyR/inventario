<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    public function detail_orders(): HasMany
    {
        return $this->hasMany(Detail_Orders::class);
    }
    public function shop_products(): HasMany
    {
        return $this->hasMany(Shop_Products::class);
    }
}
