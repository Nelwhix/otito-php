<?php

namespace OpenAPI\Client;

use Sammyjo20\Saloon\Http\SaloonConnector;
class OtitoConnector extends SaloonConnector
{
    protected string $apiKey;

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
          'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->apiKey
        ];
    }

    public function __construct(string $apiKey){
        $this->apiKey = $apiKey;
    }
}