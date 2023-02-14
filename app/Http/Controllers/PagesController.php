<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    // returning the view called about
    // passing it a variables which is equal to our array of names
    public function about() {
        $names = ["John", "Mike", "Dave"];
        return view('about', [
            'names' => $names
        ]);
    }
}
