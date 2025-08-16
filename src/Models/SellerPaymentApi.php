<?php

namespace Dandyphuong99\PaymentGateway\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SellerPaymentApi extends Model
{
    protected $fillable = [
        'user_id',
        'provider_id',
        'payment_method_id',
        'api_key',
        'is_active',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(PaymentProvider::class, 'provider_id');
    }

    // public function paymentMethod(): BelongsTo
    // {
    //     return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    // }

}
