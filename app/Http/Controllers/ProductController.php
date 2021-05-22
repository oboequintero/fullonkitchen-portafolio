<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  

    /**
     * Returns a page with product details
     * @return \Illuminate\Http\Response
     */
    public function showProduct($title, $id)
    {
        $product = $this->marketService->getProduct($id);
 
        return view('admin.products.show')->with([
            'product' => $product,
        ]); 
    }

    public function showPostmateList($id)
    {
        $list = $this->postmateService->getListPostmate($id);       

        return view('admin.postmate.list')->with([
            '$list' => $list ,
        ]); 
    }
}
