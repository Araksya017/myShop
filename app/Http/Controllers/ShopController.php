<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use TCG\Voyager\Traits\Translatable;
use App\Helpers;

class ShopController extends Controller
{
    public function index()
    {

        $user = Auth::user();

//        $subject = Product::withTranslations()->get();
//        $subject = Product::paginate(9);


//      $products = Product::withTranslation(app()->getLocale())->take(9)->get();
//       $products = Product::paginate(10);
        $conditions = request()->all();
        $products = \App\Helpers\Helper::shopFilter($conditions, 9);
//        dd($products);
        $shopimg = DB::table('homebaners')->where('id','5')->first();



//       $products = DB::table('products')->simplePaginate(10);


//        $new_products= DB::table('products')->select()->orderBy('id','DESC')->take(4)->get();

//        dd($pagination);
        return view('shop')->with([

            'products'=>$products,
//            'subject' => $subject,
//          'pagination'=>$pagination
            'user' => $user,
            'shopimg' =>$shopimg,




//            'new_products'=>$new_products,
        ]);
    }


    public function singleProduct($id)
    {

        $subject = Product::withTranslations()->get();
        return view('shop')->with([

            'subject' => $subject,
]);

//dd($product);
    }



}
