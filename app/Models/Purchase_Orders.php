<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Purchase_Orders extends Model
{
    use HasFactory;

    public function supplieres(): HasMany
    {
        return $this->hasMany(Suppliers::class);
    }
    public function shops(): BelongsTo
    {
        return $this->belongsTo(Shops::class);
    }
}
