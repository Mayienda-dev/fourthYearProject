<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceSetup extends Model
{
    use HasFactory;

    protected $table = 'service_setups';

    protected $fillable = [
        'vendor_id',
        'services'
    ];

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendors::class);
    }
}
