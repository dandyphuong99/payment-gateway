Laravel package to generate VietQR data / VietQR code
Cập nhật cho Laravel 11^

## Installation

You can install the package via composer:

```bash
composer require dandyphuong99/payment-gateway:dev-main
```

## Usage

```php
use Takashato\VietQr\Facades\VietQr;
use Takashato\VietQr\Enums\Currency;

$qrCode = VietQr::create()
    ->merchant('970422', '1234567890', 'NGUYEN VAN A') // BIN, account number, name
    ->amount(50000)
    ->additionalInfo('Thanh toan don hang 123')
    ->generateQr(); // Trả về QR dạng SVG

echo $qrCode;

```

## Security Vulnerabilities

Please email me at dandyphuong99@gmail.com for any security vulnerabilities.

## Credits

- [dandyphuong99](https://github.com/dandyphuong99)
- All other contributors
