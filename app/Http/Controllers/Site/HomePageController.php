<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\ProductContract;

class HomePageController extends Controller
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();

        return view('site.pages.homepage', compact('products', 'categories', 'brands'));
    }
}
