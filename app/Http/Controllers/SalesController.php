<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Http\Request;


class SalesController
{
    public function index()
    {
        $user = Auth::user();
        $sale_products=  Product::withTranslations()->select()
            ->where('sale',">",0)
            ->get();
        $products = Product::paginate(10);
        $shopimg_sales = DB::table('homebaners')
            ->where('id','9')
            ->first();


        return view('sales',
[
            'sale_products'=>$sale_products,
            'products'=>$products,
            'user' => $user,
            'shopimg_sales' =>$shopimg_sales,

        ]);

    }
}
