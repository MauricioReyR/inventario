<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Suppliers extends Model
{
    use HasFactory;
    
    public function purchase_orders(): HasMany
    {
        return $this->hasMany(Purchase_Orders::class);
    }
    public function sale_orders(): HasMany
    {
        return $this->hasMany(Sale_Orders::class);
    }
    
    public function shop_products(): HasMany
    {
        return $this->hasMany(Shop_Products::class);
    }
}
