<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
#require '../vendor/autoload.php';
#use AfterShip;



class TestController extends Controller
{


    public function test()
    {  /*
        $key = 'dbde92f2-eaad-4f17-a915-dec4173d566e';

        $couriers = new AfterShip\Couriers($key);
     
        $response = $couriers->get();
        */

        $products = $this->marketService->getProducts();
        $categories = $this->marketService->getCategories();
        $aftership_list = $this->afterShipService->getListAfterShip();
        
        dd ($products,  $aftership_list, $categories);
       
        

       
        return view('admin.test', compact ('products','categories', 'aftership_list' ));
    }
}
