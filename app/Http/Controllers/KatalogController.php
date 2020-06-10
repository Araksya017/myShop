<?php


namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use TCG\Voyager\Traits\Translatable;


class KatalogController extends BaseController
{
//    public function index()
//    {
//        $katalog= DB::table('katalog')->select()->get();
//
//        $category = DB::table('category')->where('lang_id',1)->get();
////        dd($category);
//        // dd($select);
//        // $query = DB::table('products')->select('img');
//
//        $select = Product::all();
//        $select->load('translations');
//
//// Loads all translations
//        $select = Katalog::withTranslations()->get();
//
//        return view('katalog', ['select' => $select, 'category' => $category]);



        public function index(){
        $katalog= DB::table('katalog')->select()->get();




        $parent_id_categories= DB::table('categories')->select()->get();


        return view('katalog', ['katalog' => $katalog, 'parent_id_categories'=>$parent_id_categories]);

    }


}
