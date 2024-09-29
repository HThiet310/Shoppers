<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()->get();

        $products = Product::query()->latest('id')->paginate(3);

        return view('client.index', compact('categories', 'products'));
    }
}
