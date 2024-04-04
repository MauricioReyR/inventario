<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale_Orders extends Model
{
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
    public function custumers(): HasMany
    {
        return $this->hasMany(Customers::class);
    }
    public function supplieres(): HasMany
    {
        return $this->hasMany(Suppliers::class);
    }
    public function shops(): BelongsTo
    {
        return $this->belongsTo(Shops::class);
    }
}
