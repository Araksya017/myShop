<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdressController
{
    public function index()
    {
        $user = Auth::user();
        //18.05
        $id = Auth::id();

        return view('adress', ['user' => $user, 'id' => $id]);
    }

        public function update(Request $request)
    {
//    $img = '';
//    $image = $request->file('image');
//    if ($image->getError() == 0) {
//        $name = $image->getClientOriginalName();
//        $image->move(public_path() . '/images/', $name);
//        $img = $name;
//    }

        $user = DB::table('users')
            -> where ('id', Auth::id())
            -> update ([
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
            ] );
//    dd($user);
        return redirect('/adress' );
    }



}
