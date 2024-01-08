<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'name',
        'position',
        'job_type',
        'duration',
    ];

    public function skills(): HasMany
    {
        return $this->hasMany(Skills::class);
    }
}
