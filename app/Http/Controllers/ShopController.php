<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use TCG\Voyager\Traits\Translatable;

class ShopController extends Controller
{
    public function index()
    {

//       $products = Product::withTranslation(app()->getLocale())->take(5)->get();
       $products = Product::paginate(10);

//       $products = DB::table('products')->simplePaginate(10);


//        $new_products= DB::table('products')->select()->orderBy('id','DESC')->take(4)->get();

//        dd($pagination);
        return view('shop')->with([

            'products'=>$products,
//          'pagination'=>$pagination

//            'new_products'=>$new_products,
        ]);
    }


    public function singleProduct($id)
    {

        $products = Product::withTranslation(app()->getLocale())->get();
        return view('shop')->with([

            'products'=>$products
]);

//dd($product);
    }



}
