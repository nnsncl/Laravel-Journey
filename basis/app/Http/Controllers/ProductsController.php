<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Laravel 8 Journey";
        $description = "Some content here";
        $data = [
            'productOne' => 'Occulus Rift',
            'productTwo' => 'Galaxy G8'
        ];

        //Compact method
        // return view('products.index', compact('title', 'description'));
        
        // With Method
        return view('products.index')->with('data', $data);

    }

    public function about()
    {
        return 'About products page';
    }
}
