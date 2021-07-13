<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Http\Request;


class SalesController
{
    public function index()
    {
        $sale_products=  Product::withTranslations()->select()
            ->where('sale',">",0)
            ->get();
        $products = Product::paginate(10);

        return view('sales',
[
            'sale_products'=>$sale_products,
            'products'=>$products,

        ]);

    }
}
