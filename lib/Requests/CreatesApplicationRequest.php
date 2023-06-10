<?php

namespace OpenAPI\Client\Requests;

use Sammyjo20\Saloon\Http\SaloonRequest;
use OpenAPI\Client\OtitoConnector;

class CreatesApplicationRequest extends SaloonRequest
{
    protected ?string $connector = OtitoConnector::class;

    protected ?string $method = 'POST';

    public function defineEndpoint(): string
    {
        return "";
    }
}