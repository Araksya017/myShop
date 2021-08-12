<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Http\Request;

class NewController
{
    public function index()
    {
        $user = Auth::user();
        $new_products = Product::withTranslations()->select()
            ->orderBy('id','DESC')
            ->get();
        $products = Product::paginate(10);
        $shopimg_new = DB::table('homebaners')
            ->where('id','10')
            ->first();


        return view('new',
            [
                'new_products' => $new_products,
                'products'=>$products,
                'user' => $user,
                'shopimg_new' =>$shopimg_new,
            ]);
    }
}
