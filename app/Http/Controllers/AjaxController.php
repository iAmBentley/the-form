<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AjaxController extends Controller
{

    public function getStoresByCat(Request $request)
    {
    	
    	// $selectedCat = $request->category_id;

	    // $storesByCat=Category::with('stores')->where('id','=',$selectedCat)->get();

	    // $htmlCode = view('orders.create', compact('storesByCat'))->render();

	    // return  $htmlCode;

    }

}
