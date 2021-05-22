<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

class JsonPlaceholder
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    /**
     * The url from which send the requests
     * @var string
     */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.jsonplaceholder.base_uri');
    }

    /**
     * Obtains the list of products from the API
     * @return stdClass
     */
    public function getUsers()
    {
        return $this->makeRequest('GET', 'users');
    }

}
