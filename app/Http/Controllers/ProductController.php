<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;

use Carbon\Carbon;

class ProductController extends Controller
{
    public function index($id)
    {
//        dd($id);
        $user = Auth::user();
        $categories = DB::table('categories')->where('parent_id',1)->get();
//        dd($category);
        $similar = DB::table('categories')->where('name',$id)->get();

        $products = Product::withTranslations()->get();

//       $single_products= Product::withTranslations()->where('id',$id)->first();

        $single_img=DB::table('products')->where('id',$id)->get();

        $sale_products= DB::table('products')->select()->where('sale',">",0)->take(3)->get();




        $select = Product::all();
        $select->load('translations');


// Loads all translations
        $select = Product::withTranslations()->get();

        return view('product',
            [
                'select' => $select,
                'categories' => $categories,
                'products'=>$products,
                'single_img'=>$single_img,
                'similar'=>$similar,
                'sale_products'=>$sale_products,
                'user' => $user,
                ] );
    }

    public function show($id)
    {

        $user = Auth::user();
        $categories = DB::table('categories')
            ->where('parent_id',1)
            ->get();


        $products = Product::withTranslations()
            ->get();
//dd($products);
        $single_products= Product::withTranslations()
            ->join('categories', 'categories.id', '=', 'products.category_id')

            ->where('products.id',$id)->first();
          // dd($single_products);

        $similar=Product::withTranslations()
          ->where('category_id',$single_products->category_id)
          ->get();
       // dd($similar);

        $single_img=DB::table('products')

           ->where('id',$id)
//            ->whereNotNull('singleimg',$id)
            ->get();

        $sale_products= DB::table('products')->select()
            ->where('sale',">",0)
            ->take(3)
            ->get();



//        dd($single_img);

        $select = Product::all();

        $select->load('translations');


// Loads all translations
        $select = Product::withTranslations()
            -> get();

        return view('product',
            [
                'select' => $select,
                'categories' => $categories,
                'products'=>$products,
                'single_products'=>$single_products,
                'single_img'=>$single_img,
                'similar'=>$similar,
                'sale_products'=>$sale_products,
                'user' => $user,
                ] );
    }

    public function singleProduct($id)
{

    $products = Product::withTranslation(app()->getLocale())->get();

    return view('single', ['products'=>$products]);

//dd($products);
}



//        public function upload(Request $request)
//{
//    $path = $request->file('img')->store('uploads', 'public');
//
//    $singleimg = $request->file('singleimg')->store('uploads', 'public');
//    return view('product', ['path' => $path, 'singleimg' => $singleimg]);
//
//}
//
//public function edit($id)
//{
//    $edit = DB::table('products')->select()->where('id', $id)->orWhere('id', $id+1
//    )->get();
////        echo $id;
////      dd($edit);
//    return view('edit', ['edit' => $edit[0],'edit1' => $edit[1]]);
//}
//
//public function update(Request $request)
//
//{
//    $current = Carbon::now();
//
//    $img = $request->img;
//    $image = $request->file('img');
////dd($img);
//    if ($image && $image->getError() == 0) {
//        $name = $image->getClientOriginalName();
//        $image->move(public_path() . '/images/', $name);
//        $img = $name;
//
//    }
//
//
//        $singleimg = $request->singleimg;
//        $image = $request->file('singleimg');
////    dd();
//        if ($image && $image->getError() == 0) {
//            $name = $image->getClientOriginalName();
//            $image->move(public_path() . '/images/', $name);
//            $singleimg = $name;
////dd($singleimg);
//        }
//
//
//    $update = DB::table('products')->where('id', $request->id)->update(
//
//        ['title' => $request->title,'product_number' => $request->product_number, 'description' => $request->description,
//            'img' => $img,'singleimg'=>$singleimg,'category_id'=>$request->category_id,'lang_id'=>1,
//            'price' => $request ->price, 'count' => $request -> count,  'sale' => $request -> sale, 'best'=> 0,
//            'popular'=> 0]);
//
//    $update = DB::table('products')->where('id', $request->id+1)->update(
//        ['title' => $request->title_en,'product_number' => $request->product_number, 'description' => $request->description_en,  'img' => $img, 'singleimg'=>$singleimg,
//            'price' => $request ->price, 'count' => $request -> count,  'sale' => $request -> sale, 'best'=> 1,'category_id'=>$request->category_id,'lang_id'=>2,
//            'popular'=> 1]);
//
//    return redirect()->back();
//
//
//}
//
//public function delete(Request $request)
//{
//
//    DB::table('products')->where('id', $request -> id )->delete();
//    DB::table('products')->where('id', $request -> id+1 )->delete();
//    return redirect()->back();
//
//}
}
