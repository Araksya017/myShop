<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function index()
    {
        $select = DB::table('language')->select()->get();


        return view('language', ['y' => '5+']);
    }


    public function insert(Request $request)
    {
        DB::table('language')->insert(
            ['name' => $request->name]);
        return view('language', ['x' => 2, 'y' => '5+']);
    }



    public function edit($id)
    {
        $edit = DB::table('language')->select()->where('id', $id)->get();
//        echo $id;
//      dd($edit);
        return view('edit', ['edit' => $edit[0]]);
    }

    public function update(Request $request)
    {
        $update = DB::table('language')->where('id', $request->id)->update(
            ['name' => $request->name]);
    }



    public function delete(Request $request)
    {
//       $delete = DB::table('ararat')->delete();

        DB::table('language
        ')->where('id', $request->id)->delete();
    }
}


