<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'country',
        'zip_code',
        'city',
        'street',
        'street_number',
        'number'
    ];

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
