<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

require '../vendor/autoload.php';
use AfterShip;

class AfterShipService 
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    /**
     * The url from which send the requests
     * @var string
     */
    protected $baseUri;
    protected $api_key;
    

    public function __construct()
    {        
        $this->baseUri = config('services.aftership.base_uri');
        $this->api_key = config('services.aftership.api_key');
       
        
    }


    public function getListAfterShip(){

        $key = 'dbde92f2-eaad-4f17-a915-dec4173d566e';

        $couriers = new AfterShip\Couriers($key);
     
        $response = $couriers->get();
        #dd($response);
        return $response;

         


        
    }

}