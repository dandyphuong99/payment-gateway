<?php

namespace Dandyphuong99\PaymentGateway\Contracts;

interface PaymentGatewayInterface
{
    public function listTransactions(string $accountNumber, float|int $amount, string $dateFrom): array;
}
