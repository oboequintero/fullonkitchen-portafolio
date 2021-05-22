<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

class PostmateService
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    /**
     * The url from which send the requests
     * @var string
     */
    protected $baseUri;
    protected $costumer_id;

    public function __construct()
    {        
        $this->baseUri = config('services.postmate.base_uri');
        $this->costumer_id = config('services.postmate.costumer_id');
    }

    

    public function getListPostmate($costumer_id){
        #Ruta segun documentacion
        #/ v1 / customers / {v1_customer_id} / entregas 
        return $this->makeRequest('GET', "/v1/customers/{$costumer_id}/deliveries");

        # ruta completa https://api.postmates.com/v1/customers/{$costumer_id}/entregas
        # https://api.postmates.com/v1/customers/{cus_N2E3uOQt92rBLV}/deliveries

        # https://api.postmates.com/v1/customers/{v1_customer_id}/deliveries

        #ruta : http://127.0.0.1:8000/postmate_list/cus_N2E3uOQt92rBLV 
    }

}