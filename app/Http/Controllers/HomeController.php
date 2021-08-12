<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Product;
use App\Homebaners;
use Illuminate\Support\Facades\Auth;



class HomeController extends BaseController
{
    //avelacratc blok 09.05

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index(){
//        dd(Auth::user());
        $user = Auth::user();
//        $logo = DB::table('homebaners')->where('id','36')->first();

        $banners3 = DB::table('homebaners')->orderBy('id','DESC')->take(3)->get();

//dd($banners3);

        $banners1 = DB::table('homebaners')->where('id','38')->first();
        $banners2 = DB::table('homebaners')->where('id','28')->first();
        $banners4 = DB::table('homebaners')->where('id','27')->first();
        $banners5 = DB::table('homebaners')->where('id','35')->first();
        $banners6 = DB::table('homebaners')->where('id','25')->first();


//dd($banners3);
       // $best_products= DB::table('products')->select()->where('best',1)->take(8)->get();

       // $best_products = Product::select()->where('best',1)->take(8);
        //$best_products->load('translations');
//dd(app()->getLocale());
// Loads all translations
        $best_products = Product::withTranslations()->get();
//       dd($best_products);
        $popular_products = Product::withTranslations()->take(2)->get();

        $new_products= DB::table('products')->select()->orderBy('id','DESC')->take(4)->get();
       // dd($new_products);
        $sale_products= DB::table('products')->select()->where('sale',">",0)->take(3)->get();

//        $popular_products= DB::table('products')->select()->where('popular',1)->take(2)->get();

        $parent_id_categories= DB::table('categories')->select()->take(3)->get();


        return view('home',
            [
                'banners3' => $banners3,
                'banners2' => $banners2,
                'banners1' => $banners1,
                'banners4' => $banners4,
                'banners5' => $banners5,
                'banners6' => $banners6,
                'best_products'=>$best_products,
                'new_products'=>$new_products,
                'sale_products'=>$sale_products,
                'popular_products'=>$popular_products,
                'parent_id_categories'=>$parent_id_categories,
                'user' => $user,
//                'logo' => $logo
            ]);

    }



    }
