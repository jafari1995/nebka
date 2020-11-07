<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $builder = new Product();

        if ($request->has('operate')) {
            $avgPriceOfProducts = Product::productAvgPrice();
            if ($request->operate == 'avg-equals')
                $builder = $builder->query()->where('price', $avgPriceOfProducts);

            if ($request->operate == 'avg-bigger')
                $builder = $builder->query()->where('price', '>', $avgPriceOfProducts);

            if ($request->operate == 'avg-smaller')
                $builder = $builder->query()->where('price', '<', $avgPriceOfProducts);
        }
        return $builder->get();
    }
}
