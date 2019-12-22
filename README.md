<p align="center"> 
<img src="logo.png" height="100" width="400" />
</p>

<p align="center"> 
No more ugly math in your business logic.
</p>

<p align="center"> 
<a href="https://travis-ci.org/Rackbeat/php-vat-helper"><img src="https://img.shields.io/travis/Rackbeat/php-vat-helper.svg?style=flat-square" alt="Build Status"></a>
<a href="https://coveralls.io/github/Rackbeat/php-vat-helper"><img src="https://img.shields.io/coveralls/Rackbeat/php-vat-helper.svg?style=flat-square" alt="Coverage"></a>
<a href="https://packagist.org/packages/rackbeat/php-vat-helper"><img src="https://img.shields.io/packagist/dt/rackbeat/php-vat-helper.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/rackbeat/php-vat-helper"><img src="https://img.shields.io/packagist/v/rackbeat/php-vat-helper.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/rackbeat/php-vat-helper"><img src="https://img.shields.io/packagist/l/rackbeat/php-vat-helper.svg?style=flat-square" alt="License"></a>
</p>

# Convert numbers to include or exclude VAT.

## Installation

You just require using composer and you're good to go!

```bash
composer require rackbeat/php-vat-helper
```

## Usage

```php
Rackbeat\VAT::include($amountExclVat = 100.0, 25); // 125.0
Rackbeat\VAT::exclude($amountInclVat = 100.0, 25); // 80.0
Rackbeat\VAT::amount($amountInclVat = 100.0, 25); // 25.0
Rackbeat\VAT::percentage($amountInclVat = 100.0, $amountExclVat = 80.0); // 0.25
```

## Plans

* Better documentation
* Per-country/region defined vat zones

## Requirements
* PHP >= 7.1
