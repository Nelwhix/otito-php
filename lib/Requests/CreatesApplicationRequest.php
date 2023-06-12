<?php

namespace OpenAPI\Client\Requests;

use Sammyjo20\Saloon\Http\SaloonRequest;
use OpenAPI\Client\OtitoConnector;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CreatesApplicationRequest extends SaloonRequest
{
    use HasJsonBody;
    protected ?string $connector = OtitoConnector::class;

    protected ?string $method = 'POST';

    protected string $appName;

    public function defineEndpoint(): string
    {
        return "/applications";
    }

    public function __construct(string $appName){
        $this->appName = $appName;
    }

    public function defaultData(): array
    {
        return [

        ];
    }
}