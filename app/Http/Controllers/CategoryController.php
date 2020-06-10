<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {

        $select= DB::table('categories')->select()->get();
//      dd($select);

        $best_products = Product::withTranslation(app()->getLocale())->get();
//        dd($best_products);
        $select = Category::all();
        $select->load('translations');

// Loads all translations
        $select = Category::withTranslations()->get();

        $name =Category::withTranslation(app()->getLocale())
//          ->where('id',$id)
            ->join('products', 'products.id', '=', 'categories.products_id')
         ->select('products.*', 'categories.name')
//
            ->get();


        return view('category',
            [
                'select' => $select,
                'best_products' => $best_products,
                'name' => $name,

            ]);

    }






   public function singleCategory($id)
    {

        $categories= Category::select()->where('id',$id)->get();
        return view('singleCtg', ['categories'=>$categories]);

////dd($category);
    }


    public function insert(Request $request)
    {

       // dd($insert);
        $current = Carbon::now();

        DB::table('categories')->insert(
            [  'name'=> $request -> name_ru,'lang_id'=>1,'name_id'=>0,'created_at'=>$current,'updated_at'=>$current]
        );
        $id = DB::getPdo()->lastInsertId();
        DB::table('category')->insert(
            [ 'name'=>$request->name_en,'lang_id'=>2,'name_id'=>$id,'created_at'=>$current,'updated_at'=>$current]
        );
        return back();
    }



//    public function edit($id)
//    {
//        $edit = DB::table('categories')->select()->where('id', $id)->orWhere('id', $id+1)->get();
////        echo $id;
////      dd(1);
//        return view('admin/edit_category', ['edit' => $edit[0],'edit1' => $edit[1]]);
//    }

//    public function update(Request $request)
//    {
//
//
//        $current = Carbon::now();
//
//        $update = DB::table('categories')->where('id', $request->id)->update(
//
//        [  'name'=> $request -> name_ru,'lang_id'=>1,'name_id'=>0,'created_at'=>$current,'updated_at'=>$current]
//        );
//
//        DB::table('categories')->where('id', $request->id+1)->update(
//            [ 'name'=>$request->name_en,'lang_id'=>2,'name_id'=>0,'created_at'=>$current,'updated_at'=>$current]
//        );
//
//        return redirect()->back();
//
//    }

//    public function delete(Request $request)
//    {
//
//        DB::table('categories')->where('id', $request -> id )->delete();
//        DB::table('categories')->where('id', $request -> id+1 )->delete();
//        return redirect()->back();
//
//    }



}
