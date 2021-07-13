<?php


namespace App\Http\Controllers;


use App\Cart;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController
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

        return view('checkout',[
            'select' => $select,
            'categories' => $categories,
            'products' => $products,
            'user' => $user,
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

           $user =  DB::table('users')
               -> where ('id', Auth::id())
                ->update([

//                'user_id' => $request->user_id,
//                'product_id' => $request->product_id,
//                'count' => $request->count,
//                'color' => $request->color,
//                'size' => $request->size,

                //            'img' => $img,
                'name'=> $request -> name,
                'surname'=> $request -> surname,
                'gender'=> $request ->gender,
//            'usersale'=> $request-> usersale,
//            'cupon' => $request -> cupon,
//            'point'=>$request->point,
                'email'=>$request->email,
//            'password'=> $request->password,
            'adress'=> $request->adress,
                'phone'=>$request ->phone,
            'post'=>$request->post,
            'city' =>$request->city
            ]);

//            return redirect()->back()->with('success', 'Product added to cart successfully!');
            return view('checkout',[
                'user' => $user,
            ] );
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



}
