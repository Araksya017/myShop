<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController
{
    public function index()
    {
        $categories = DB::table('categories')
            ->where('parent_id',1)
            ->get();


        $user=Auth::user();

        $products = DB::table('products')

            ->leftJoin('cart', 'products.id', 'cart.product_id')
            ->where('cart.user_id',$user->id)
            ->get();
//dd($products);
        $select = Product::all();
        $select->load('translations');
        $select = Product::withTranslations()->get();




        return view('cart',[
                'select' => $select,
                'categories' => $categories,
                'products' => $products,
        ] );
    }
    public function create(Request $request){
//        dd($request);
        $user = Auth::user();
        if(!Auth::check()){
            //dd(7);
            return redirect('/login');
        }
        //dd($user);

        if (isset($request -> product_id)) {

            $cart=Cart::where([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'color' => $request->color,
                'size' => $request->size,
            ])->first();
//            dd($cart);
            if(isset($cart->id)){

                $count=$cart->count+ $request->count;
                Cart::where('id',$cart->id)->update([
                    'user_id' => $request->user_id,
                    'product_id' => $request->product_id,
                    'count' => $count,
                    'color' => $request->color,
                    'size' => $request->size,
                ]);
            }else
            Cart::create([

                'user_id' => $request -> user_id,
                'product_id' => $request -> product_id,
                'count' => $request -> count,
                'color' => $request -> color,
                'size' => $request -> size,
            ]);
            return redirect() -> back() -> with('success', 'Product added to cart successfully!');
        }
    }
    public function update(Request $request, $id)
    {
//       dd($request);
        if (isset($request->product_id)) {

            Cart::where('id',$id)->update([

                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'count' => $request->count,
                'color' => $request->color,
                'size' => $request->size,
            ]);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }
    public function remove($id)
    {
//       dd($request);
        if (isset($id)) {

            Cart::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product remove!');
        }
        return redirect('home.home');

    }
    public function select(Request $request, $id) {
//        dd($request);

        $cart=Cart::where([

            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'color' => $request->color,
            'size' => $request->size,
            'products_count' => $request -> products_count,

        ])->get();
//        dd($cart);
        return redirect() -> back();
}

//$users = DB::table('users')
//->select('name', 'email as user_email')
//;

}
