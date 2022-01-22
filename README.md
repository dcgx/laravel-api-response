# Laravel API Response

A simple package API responses in your Laravel application.

## Requirements

## Installation / Usage

`composer require devgoto/laravel-api-response`

Add the required trait inside your controller:

```php
<?php

namespace App\Http\API\Controllers;

use Devgoto\BuildsResponse;
use Illuminate\Http\JsonResponse;

class OrdersController
{
    use BuildsResponse;

    public function index(): JsonResponse
    {
        return $this->respondWithSuccess();
    }
}
```
