<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {


        return view('users', ['y' => '5+']);
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

    DB::table('users')->insert(
        [ 'img' => $img, 'name'=> $request -> name, 'surname'=> $request -> surname, 'gender'=> $request ->gender,
            'usersale'=> $request-> usersale, 'cupon' => $request -> cupon, 'point'=>$request->point, 'email'=>$request->email,
             'password'=> $request->password, 'adress'=> $request->adress, 'phone'=>$request ->phone, 'post'=>$request->post, 'city'
        =>$request->city]
    );
    return view('users', ['x' => 2, 'y' => '5+']);
}

public function upload(Request $request)
{
    $path = $request->file('img')->store('uploads', 'public');
    return view('default', ['path' => $path]);
}

public function edit($id)
{
    $edit = DB::table('users')->select()->where('id', $id)->get();
//        echo $id;
//      dd($edit);
    return view('edit', ['edit' => $edit[0]]);
}

public function update(Request $request)
{
    $img = '';
    $image = $request->file('image');
    if ($image->getError() == 0) {
        $name = $image->getClientOriginalName();
        $image->move(public_path() . '/images/', $name);
        $img = $name;
    }

    $update = DB::table('users')->where('id', $request->id)->update(
        ['img' => $img, 'name'=> $request -> name, 'surname'=> $request -> surname, 'gender'=> $request ->gender,
            'usersale'=> $request-> usersale, 'cupon' => $request -> cupon, 'point'=>$request->point, 'email'=>$request->email,
            'password'=> $request->password, 'adress'=> $request->adress, 'phone'=>$request ->phone, 'post'=>$request->post, 'city'
        =>$request->city] );
}

public function delete(Request $request)
{

    DB::table('users')->where('id', $request->id)->delete();
}



}
