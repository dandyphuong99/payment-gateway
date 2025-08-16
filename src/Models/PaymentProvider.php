<?php

namespace Dandyphuong99\PaymentGateway\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentProvider extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description'
    ];

    public function sellerApis(): HasMany
    {
        return $this->hasMany(SellerPaymentApi::class, 'provider_id');
    }
}
