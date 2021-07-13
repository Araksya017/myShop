<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //18.05
        $id = Auth::id();

        return view('users', ['user' => $user, 'id' => $id]);
    }

public function insert(Request $request)
{

//        dd($request->title1);
      $img= '';
      $image = $request->file('image');
    if ($image->getError() == 0) {
        $name = $image->getClientOriginalName();
        $image->move(public_path() . '/images/', $name);
        $img = $name;
    }

   $user = DB::table('users') -> insert ([
            'img' => $img,
            'name'=> $request -> name,
            'surname'=> $request -> surname,
            'gender'=> $request ->gender,
            'usersale'=> $request-> usersale,
            'cupon' => $request -> cupon,
            'point'=>$request->point,
            'email'=>$request->email,
            'password'=> $request->password,
            'adress'=> $request->adress,
            'phone'=>$request ->phone,
            'post'=>$request->post,
            'city' =>$request->city
   ]);

//        $user -> save();
//        Auth::login($user);
    return view('users',
        [
            'user' => $user,
        ]);
}

public function upload(Request $request)
{
    $path = $request->file('img')->store('uploads', 'public');
    return view('users', ['path' => $path]);
}

public function edit($id)
{
    $edit = DB::table('users')->select()->where('id', $id)->get();
//        echo $id;
//      dd($edit);
    return view('users', ['edit' => $edit[0]]);
}


    public function logout(Request $request) {
//        Auth::logout();
//        return redirect('/login');

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

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
    return redirect('/myprofile' );
}

public function delete(Request $request)
{

    DB::table('users') -> where('id', $request->id) -> delete();
}



}
