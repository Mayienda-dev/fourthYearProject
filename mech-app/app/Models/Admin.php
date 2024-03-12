<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Authenticable
{
    use HasFactory;
    
    protected $guard = 'admin';
    
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    
    protected $hidden = [
        'password',
    ];

    public function vendorPersonal(){
        return $this->belongsTo('App\Models\Vendors', 'vendor_id' );
    }
    public function vendorBusiness(){
        return $this->belongsTo('App\Models\VendorsBusinessDetail', 'vendor_id' );
    }
    public function vendorPayment(){
        return $this->belongsTo('App\Models\VendorsPaymentDetail', 'vendor_id' );
    }




}
