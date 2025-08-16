<?php

namespace Dandyphuong99\PaymentGateway;

use Dandyphuong99\PaymentGateway\Contracts\PaymentGatewayInterface;
use Dandyphuong99\PaymentGateway\Providers\SepayGateway;

class PaymentGatewayFactory
{
    public static function make(string $providerCode, string $token): PaymentGatewayInterface
    {
        return match ($providerCode) {
            'sepay'   => new SepayGateway($token),
            // 'dvsteam' => new DVSteamGateway($token),
            default   => throw new \InvalidArgumentException("Provider [$providerCode] not supported"),
        };
    }
}
