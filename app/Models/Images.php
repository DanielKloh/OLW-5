<?php

namespace App\Models;

use App\Observers\ImagesObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy(ImagesObserver::class)]
class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        "sku_id",
        "url",
        "cover"
    ];

    public function sku():BelongsTo
    {
        return $this->belongsTo(Sku::class);
    }
}
