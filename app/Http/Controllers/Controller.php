<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use App\Services\JsonPlaceholder;
use App\Services\PostmateService;
use App\Services\AfterShipService;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    /**
     * The market service to consume from this client
     * @var App\Services\MarketService
     */
    protected $marketService;
    protected $jsonPlaceholder;
    protected $postmateService;
    protected $afterShipService;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(MarketService $marketService, PostmateService $postmateService,JsonPlaceholder $jsonPlaceholder,AfterShipService $afterShipService)
    {
        $this->marketService = $marketService;
        $this->postmateService = $postmateService;
        $this->jsonPlaceholder = $jsonPlaceholder;
        $this->afterShipService = $afterShipService;

    }

    


 }
