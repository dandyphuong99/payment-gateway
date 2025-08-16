<?php

namespace Dandyphuong99\PaymentGateway\Contracts;

interface PaymentGatewayInterface
{
    public function listTransactions(string $accountNumber, int $amount, string $dateFrom, int $limit = 100): array;
}
