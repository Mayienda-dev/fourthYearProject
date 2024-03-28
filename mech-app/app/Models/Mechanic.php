<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mechanic extends Model
{
    use HasFactory;

    public function vendorbusinessdetail(): BelongsTo
    {
        return $this->belongsTo(VendorsBusinessDetail::class);
    }
}
