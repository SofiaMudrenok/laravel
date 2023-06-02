<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor','user','numberplate','color',
    ];

    public function dps(): BelongsTo
    {
        return $this->belongsTo( Dps::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
