<?php

namespace App\Helpers;
use App\Shopproduct;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\UrlWindow;
use Illuminate\Support\Str;

class Helper{

    public static function shopFilter(array $conditions, $paginate){


        $filters = [];
        
        
        
        if(isset($conditions['search'])){
            $products = Shopproduct::search($conditions['search'])->where('show',1)->where('price', '!=', '[]');
            
        }else{
           $products =DB::table('shopproducts')->where('show',1)->where('price', '!=', '[]'); 
        }
        $order='id';
//        $price45 = Shopproduct::where('id',1)->firstOrfail();
//        dd($price45->price);



//         if (isset($conditions['category'])) {
//             $cat_id = Category::where('name',$conditions['category'])->firstOrfail();
//             $filters['category_id'] = $cat_id->id;
//             $filters1['category1_id'] = $cat_id->id;
//             $filters2['category1_id'] = $cat_id->id;
//             $filters3['category1_id'] = $cat_id->id;
//             $products->where($filters)->orWhere($filters1)->orWhere($filters2)->orWhere($filters3);
//             $category12 = Category::where('parent',$cat_id->id)->get();
//             if(count($category12)>0) {

//                 $array = [];
//                 $l = count($category12);
//                 for ($i = 0; $i < $l; $i++) {
//                     $filters['category_id'] = $category12[$i]->id;
//                     $products->orWhere($filters);
//                 }
//             }
// //            foreach ($category12 as $cat12){
// //
// //            }
// //            $products->where($filters);
//         }
   if (isset($conditions['category'])) {

            $cat_id = Category::where('name', $conditions['category'])->firstOrfail();
//            dd($cat_id);
            $filters['category_id'] = $cat_id->id;
            if (isset($conditions['min_price']) && isset($conditions['max_price'])) {
                $products1 = DB::table('shopproducts')->get();
                $json_arr = [];
            }else{
                if(isset($cat_id[0]))
            $filters['category_id'] = $cat_id[0]->id;
            $products->where($filters);
            }

            $category12 = Category::where('parent',$cat_id->id)->get();
            if(empty($category12[0]))
                $category12=Category::where('id',$cat_id->id)->get();
            if (count($category12) > 0) {

                $array = [];
                $l = count($category12);
                    for ($i = 0; $i < $l; $i++) {
                    if (isset($conditions['min_price']) && isset($conditions['max_price'])) {
                        foreach ($products1 as $json) {
                            if($json->category_id == $category12[$i]->id || $json->category1_id== $category12[$i]->id || $json->category2_id== $category12[$i]->id
                                || $json->category3_id== $category12[$i]->id){
                                $item1 = json_decode($json->price);
                                foreach ($item1 as $item) {
                                    if ($item->value > $conditions['min_price'] && $item->value < $conditions['max_price'] ) {
//                                        dd($json->category_id);

                                        array_push($json_arr, $json->id);
                                        // array_push($json_arr,$json);
                                        break;
                                    }
                                }

                            }
                        }
//            dd($products->get());
                        // dd($products->get());
                        // $products=$products->orWhere('price->value','>=',$conditions['min_price'])->orWhere('price->value','<=',$conditions['max_price']);
                    } else {
                        $filters['category_id'] = $category12[$i]->id;

                        $filters1['category1_id'] = $category12[$i]->id;
                        $filters2['category2_id']  = $category12[$i]->id;
                        $filters3['category3_id'] = $category12[$i]->id;
                        $products->orWhere($filters)->orWhere($filters1)->orWhere($filters2)->orWhere($filters3);
                    }
                }
            }
            if (isset($conditions['min_price']) && isset($conditions['max_price'])) {

                $products = $products->whereIn('id', $json_arr);
//                dd($products->get());/
            }
        }
        
        if(isset($conditions['min_price']) && isset($conditions['max_price'])){
            $products1 =DB::table('shopproducts')->get();
            // dd($products1);
            $json_arr=[];
            foreach ($products1 as $json){
                $item1=json_decode($json->price);
                foreach ($item1 as $item){
                    if($item->value>$conditions['min_price'] && $item->value<$conditions['max_price']){
                        array_push($json_arr,$json->id);
                        // array_push($json_arr,$json);
                    break;
                    }
                }
            }
                        $products=$products->whereIn('id',$json_arr);
            // dd($products->get());
            // $products=$products->orWhere('price->value','>=',$conditions['min_price'])->orWhere('price->value','<=',$conditions['max_price']);
        }
        // if (isset($conditions['sale'])) {
        //     // dd($conditions['sale']);
        //     $filters['sale'] = $conditions['sale'];
            
//             SELECT id, JSON_EXTRACT(price, '$.value') AS value FROM `shopproducts`
// ORDER BY value DESC
            
            
            // $products = $products->orderBy('CAST(JSON_EXTRACT(price, "$[0].value") AS SIGNED)','DESC');
            // $query = 'CAST(JSON_EXTRACT(price, "$[0].value") AS SIGNED) DESC';
            // $products = $products->orderByRaw($query);
            // $products = $products->where(JSON_CONTAINS('JSON_CONTAINS(price->"$[0].value", \'["Laravel"]\')'));
            // dd($products);
        // }
        if (isset($conditions['sale'])) {
            if($conditions['sale']=='Աճման'){
                $products = $products->orderByRaw('CAST(JSON_EXTRACT(price, "$[0].value") AS SIGNED)');
            }else {
                $products = $products->orderByRaw('CAST(JSON_EXTRACT(price, "$[0].value") AS SIGNED) DESC');
            }
        }else {
            $products = $products->orderBy($order,'DESC');//->onEachSide(1)
        }
        // dd($products);
        if(isset($conditions['pagecount'])) {
            $paginate=$conditions['pagecount'];
        }
        $products =$products->paginate($paginate)->appends('category',request('category'))->appends('sale',request('sale'))->appends('search',request('search'))->appends('min_price',request('min_price'))->appends('max_price',request('max_price'))->appends('pagecount',request('pagecount'));
        // dd($products);
//        if(isset($conditions['price'])){
//            $filters['price'] = $conditions['price'];
//
//            $jsone = $products->orderBy($order,'DESC')->get();
////            dd($jsone);
//            $json_arr=[];
////            json_decode($json->price)
//            foreach ($jsone as $json){
//                $item=json_decode($json->price);
//                var_dump($item);
//                echo '<br><br><br>';
//                foreach ($item as $item){
//                    if($item->value>1000){
//                        array_push($json_arr,$json);
//                        break;
//                    }
//                }
////                array_push($json_arr,[
////                    'id' =>$json->id,
////                    'category_id' => $json->category_id,
////                    'name_am' => $json->name_am,
////
////                ]);
//            }
//            dd($json_arr);
//        }


        return $products;

    }
    
    public static function render(LengthAwarePaginator $paginator, $onEachSide = 2)
{
    $window = UrlWindow::make($paginator, $onEachSide);

    $elements = array_filter([
        $window['first'],
        is_array($window['slider']) ? '...' : null,
        $window['slider'],
        is_array($window['last']) ? '...' : null,
        $window['last'],
    ]);

    return LengthAwarePaginator::viewFactory()->make(LengthAwarePaginator::$defaultView, [
        'paginator' => $paginator,
        'elements' => $elements,
    ])->render();
}

    // public static  function getSession(){
    //     return $_COOKIE["laravel_session"];
    // }

}


?>