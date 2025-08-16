Multi payment gateway for Laravel cho Laravel 11^

## Installation

You can install the package via composer:

```bash
composer require dandyphuong99/payment-gateway:dev-main
```
Create tables:

```bash
php artisan migrate --path=vendor/dandyphuong99/payment-gateway/database/migrations
```

Seeder:

```bash
php artisan db:seed --class='Dandyphuong99\PaymentGateway\Database\Seeders\PaymentProvidersSeeder
```

## Usage

```php
use App\Services\PaymentGateways\PaymentGatewayFactory;

public function handle(): void
{
    $providerCode = $this->deposit->paymentMethod->provider->code; // sepay, dvsteam
    $token = $this->deposit->paymentMethod->api_key;

    $gateway = PaymentGatewayFactory::make($providerCode, $token);

    $transactions = $gateway->listTransactions(
        $this->deposit->paymentMethod->account_number,
        $this->deposit->amount,
        $this->deposit->created_at->format('Y-m-d H:i:s')
    );

    // xử lý logic tìm giao dịch...
}

```

## Security Vulnerabilities

Please email me at dandyphuong99@gmail.com for any security vulnerabilities.

## Credits

- [dandyphuong99](https://github.com/dandyphuong99)
- All other contributors


