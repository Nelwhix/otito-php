<?php

namespace OpenAPI\Client;

use Sammyjo20\Saloon\Http\SaloonConnector;
class OtitoConnector extends SaloonConnector
{
    public function defineBaseUrl(): string
    {
        return "https://api.otito.dev/v1";
    }

    public function defaultConfig(): array
    {
        return [
            'timeout' => 60,
        ];
    }

    public function defaultHeaders(): array
    {
        return [
          'Content-Type' => 'application/json',
          'Accept' => 'application/json'
        ];
    }

    public function __construct(private string $apiKey){}
}