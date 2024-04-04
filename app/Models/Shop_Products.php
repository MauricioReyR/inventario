<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop_Products extends Model
{
    use HasFactory;
    
    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }

    public function suppliers(): HasMany
    {
        return $this->hasMany(Suppliers::class);
    }

    public function purchase_orders(): HasMany
    {
        return $this->hasMany(Purchase_Orders::class);
    }

    public function sale_osders(): HasMany
    {
        return $this->hasMany(Sale_Orders::class);
    }
    public function detail_orders(): HasMany
    {
        return $this->hasMany(Detail_Orders::class);
    }
}
