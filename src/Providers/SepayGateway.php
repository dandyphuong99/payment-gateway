<?php

namespace Dandyphuong99\PaymentGateway\Providers;

use Dandyphuong99\PaymentGateway\Contracts\PaymentGatewayInterface;
use Illuminate\Support\Facades\Http;

class SepayGateway implements PaymentGatewayInterface
{
    public function __construct(private string $token) {}

    public function listTransactions(string $accountNumber, int $amount, string $dateFrom, int $limit = 100): array
    {
        $response = Http::withToken($this->token)
            ->acceptJson()
            ->get('https://my.sepay.vn/userapi/transactions/list', [
                'account_number' => $accountNumber,
                'transaction_date_min' => $dateFrom,
                'limit' => $limit
            ]);

        return $response->json('transactions') ?? [];
    }
}
