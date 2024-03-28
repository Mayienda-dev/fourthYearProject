<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VendorsBusinessDetail extends Model
{
    use HasFactory;

    public function mechanics(): HasMany
    {
        return $this->hasMany(Mechanic::class);
    }

    
}
