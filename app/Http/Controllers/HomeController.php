<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Product;
use TCG\Voyager\Traits\Translatable;



class HomeController extends BaseController
{
    public function index(){
        $baners= DB::table('homebaners')->select()->get();

       // $best_products= DB::table('products')->select()->where('best',1)->take(8)->get();

       // $best_products = Product::select()->where('best',1)->take(8);
        //$best_products->load('translations');

// Loads all translations
        $best_products = Product::withTranslation(app()->getLocale())->get();
        $popular_products = Product::withTranslation(app()->getLocale())->take(2)->get();

        $new_products= DB::table('products')->select()->orderBy('id','DESC')->take(4)->get();
       // dd($new_products);
        $sale_products= DB::table('products')->select()->where('sale',">",0)->take(3)->get();

//        $popular_products= DB::table('products')->select()->where('popular',1)->take(2)->get();

        $parent_id_categories= DB::table('categories')->select()->take(3)->get();


        return view('home', ['baners' => $baners,'best_products'=>$best_products,'new_products'=>$new_products,'sale_products'=>$sale_products,
                'popular_products'=>$popular_products,'parent_id_categories'=>$parent_id_categories]);

    }

  // public function request()
    //{
      //  $name_category = DB::table('category')->select()->where('name', 1)->take(2)->get();

       // return view(  'home', ['name_category'=>$name_category]);

   // }

    }
