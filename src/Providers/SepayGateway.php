<?php

namespace Dandyphuong99\PaymentGateway\Providers;

use Dandyphuong99\PaymentGateway\Contracts\PaymentGatewayInterface;
use Illuminate\Support\Facades\Http;

class SepayGateway implements PaymentGatewayInterface
{
    public function __construct(private string $token) {}

    public function listTransactions(string $accountNumber, float|int $amount, string $dateFrom): array
    {
        $response = Http::withToken($this->token)
            ->get('https://my.sepay.vn/userapi/transactions/list', [
                'account_number' => $accountNumber,
                'amount_in' => $amount,
                'from' => $dateFrom,
            ]);

        return $response->json('transactions') ?? [];
    }
}
