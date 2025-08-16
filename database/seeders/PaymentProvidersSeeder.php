<?php
namespace Dandyphuong99\PaymentGateway\Database\Seeders;

use Illuminate\Database\Seeder;
use Dandyphuong99\PaymentGateway\Models\PaymentProvider;

class PaymentProvidersSeeder extends Seeder
{
    public function run(): void
    {
        $providers = [
            ['name' => 'SEPay', 'code' => 'sepay', 'description' => 'SEPay payment gateway'],
        ];

        foreach ($providers as $provider) {
            PaymentProvider::updateOrCreate(['code' => $provider['code']], $provider);
        }
    }
}
