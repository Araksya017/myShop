<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Http\Request;

class NewController
{
    public function index()
    {
        $new_products = Product::withTranslations()->select()
            ->orderBy('id','DESC')
            ->get();
        $products = Product::paginate(10);

        return view('new',
            [
                'new_products' => $new_products,
                'products'=>$products,
            ]);
    }
}
