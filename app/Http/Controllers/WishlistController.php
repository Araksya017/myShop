<?php


namespace App\Http\Controllers;


use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController
{
     public function index()
{
    //return view('wishlist');

    $categories = DB::table('categories')
        ->where('parent_id', 1)
        ->get();

    $user = Auth::user();

    $products = DB::table('products')
        ->leftJoin('wishlist', 'products.id', 'wishlist.product_id')
        ->where('wishlist.user_id', $user->id)
        ->get();



    $select = Product::all();
    $select->load('translations');
    $select = Product::withTranslations()->get();


    return view('wishlist', [
        'select' => $select,
        'categories' => $categories,
        'products' => $products,

    ]);
}

public function create(Request $request){
        //dd($request);
    $user = Auth::user();
    if(!Auth::check()){
        //dd(7);
        return redirect('/login');
    }
    //dd($user);
    if (isset($request -> id)) {

            Wishlist::where('id', $request->id)->delete();
        }else
            Wishlist::create([
                'user_id' => $request -> user_id,
                'product_id' => $request -> product_id,
                'color' => $request -> color,
                'size' => $request -> size,
            ]);
        return redirect()->back() -> with('success', 'Product added to wishlist successfully!');



}

//    public function create() {
//        if(\Auth::check()){
//            Wishlist::where('id', $request->id)->delete();
//       }else
//           Wishlist::create([
//                'user_id' => $request -> user_id,
//                'product_id' => $request -> product_id,
//                'color' => $request -> color,
//                'size' => $request -> size,
//           ]);
//        return redirect()->back() -> with('success', 'Product added to wishlist successfully!');
//
//
//
//        }
//        else{
//            return redirect('auth/login');
//        }
//    }


    public
    function remove($id)
    {
//       dd($request);
        if (isset($id)) {

            Wishlist::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product remove!');
        }
        return redirect('wishlist');
    }

    public
    function select(Request $request, $id)
    {
//        dd($request);
        $wish = Wishlist::where([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'color' => $request->color,
            'size' => $request->size,
        ])->get();
//    dd($wish);
        return redirect()->back();
    }
}


