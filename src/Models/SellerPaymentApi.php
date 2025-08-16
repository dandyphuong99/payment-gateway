<?php

namespace Dandyphuong99\PaymentGateway\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SellerPaymentApi extends Model
{
    protected $fillable = [
        'seller_extra_id',
        'provider_id',
        'api_key',
        'is_active',
    ];

    // public function seller(): BelongsTo
    // {
    //     return $this->belongsTo(\App\Models\SellerExtraInfo::class, 'seller_extra_id');
    // }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(PaymentProvider::class, 'provider_id');
    }

}
