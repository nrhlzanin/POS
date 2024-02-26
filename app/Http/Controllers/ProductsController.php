<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodbeverage() {
        return view('category.food-beverage');
    }

    public function beautyhealth() {
        return view('category.beauty-health');
    }

    public function homecare() {
        return view('category.home-care');
    }

    public function babykid() {
        return view('category.baby-kid');
    }
}
