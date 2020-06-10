<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class MenusController extends Controller
{
    public function index()
    {
        $select= DB::table('menus')->select()->where('lang_id',1)->get();

//dd($select);
        return view('menus', ['select' => $select]);
    }


    public function insert(Request $request)
    {
//dd($request->title);
        DB::table('menus')->insert(
            ['title' => $request->title,'lang_id'=>1,'menus_id'=>0]);

        $id = DB::getPdo()->lastInsertId();




        DB::table('menus')->insert(
            [ 'title'=>$request->title_en,'lang_id'=>2,'menus_id'=>$id]
        );
        return redirect()->back();

        $current = Carbon::now();


    }



   public function edit($id)
    {
        $edit = DB::table('menus')->select()->where('id', $id)->orWhere('id', $id+1)->get();

       //echo $id;
    // dd($edit);
        return view('editmenus', ['edit' => $edit[0],'edit1' => $edit[1]]);


    }

          public function update(Request $request)
          {
              $current = Carbon::now();


              $update = DB::table('menus')->where('id', $request->id)->update(

                  ['title' => $request->title,'lang_id'=>1,'menus_id'=>0, 'updated_at'=>$current]);

               DB::table('menus')->where('id', $request->id+1)->update(

                  ['title' => $request->title_en,'lang_id'=>2,'menus_id'=>2, 'updated_at'=>$current]);

               return redirect()->back();

    }



    public function delete(Request $request)
    {

            DB::table('menus')->where('id', $request -> id )->delete();
            DB::table('menus')->where('id', $request -> id+1 )->delete();
            return redirect()->back();

        }

}


