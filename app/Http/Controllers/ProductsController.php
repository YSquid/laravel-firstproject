<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //return a view from views folder in folder products, file index
        //here the . acts like a path direction
        //this uses the global route method to print the path of the route named products
        print_r(route('products'));
        
        return view('products.index');
    }

    public function about()
    {
        return 'about us page';
    }

    //param is passed into controller function
    public function show($name)
    {
        $title = "Welcome to Laravel 8!";
        $description = "Created by Ahmad";
        $data = [
            'iphone' => 'apple',
            'android' => 'samsung'
        ];
        //null ccoalescer ?? - if left operation is null, it returns right side
        $products = $data[$name] ?? 'Product ' . $name . ' does not exist.';

        //COMPACT METHOD
        //compact is used to pass variables to the view
        return view('products.index', compact('products', 'title', 'description'));
    }
}
