<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = \App\Product::with('user')->get();
//    dd($products);
});

//avelacratc 09.05

Auth::routes();


Route::group(['middleware'=>'auth'],function (){

    Route::get('admin/users','UsersController@index')->name('users.admin');
    Route::post('/admin/users/insert','UsersController@insert')->name('users.usersinsert');
    Route::get('myprofile','UsersController@index')->name('users.users')->middleware('auth');
    Route::post('updateuser','UsersController@update')->name('user.update')->middleware('auth');
    Route::post('updateadress','AdressController@update')->name('adress.update')->middleware('auth');
});

//avelacratc 17.05
 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('admin/category','CategoryController@index')->name('category.admin');
Route::get('/admin/category/insert','CategoryController@insert')->name('category.categoryinsert');
//
Route::post('/admin/category/insert','CategoryController@insert')->name('category.categoryinsert');
//
//
Route::get('/admin/category/edit/{id}','CategoryController@edit')->name('category.categoryedit');
Route::post('/admin/category/update','CategoryController@update')->name('category.categoryupdate');
Route::get('/admin/category/delete/{id}','CategoryController@delete')->name('category.categorydelete');

//Route::get('category','CategoryController@insert')->name('categories.categories');

Route::get('/category','ShopController@singleCategory')->name('category.category');

Route::get('category','ShopController@index')->name('category.index');


Route::get('test','TestController@index')->name('test');


Route::get('/shop','ShopController@index')->name('shop.shop');
Route::get('/pagination','ShopController@index')->name('shop.page');

Route::get('/aboutus','AboutusController@index')->name('about.us');

Route::get('/contactus','ContactController@index')->name('contact.us');

Route::get('/blog','BlogController@index')->name('blog.blog');

Route::get('/cart','CartController@index')->name('cart.cart');

Route::post('/create','CartController@create')->name('create.create');

Route::get('/remove/{id}','CartController@remove')->name('cart.remove');

Route::post('/wish','WishlistController@create')->name('create.wish');

Route::get('/delete/{id}','WishlistController@remove')->name('wish.remove');



Route::get('/checkout','CheckoutController@index')->name('checkout');
Route::post('/checkout_update','CheckoutController@update')->name('checkout.update');
//Route::post('/create','CheckoutController@create')->name('checkout.create');
//Route::get('/remove/{id}','CheckoutController@remove')->name('checkout.remove');


Route::get('/sales','SalesController@index')->name('sale');

Route::get('/sale/{id}','SalesController@index')->name('sale.sale');

Route::get('/new','NewController@index')->name('new');
Route::get('/news/{id}','NewController@index')->name('new.products');

//Route::get('/login','Auth\LoginController@__construct')->name('login');
//Route::('/login','LoginpageController@index')->name('login');

Route::get('/wishlist','WishlistController@index')->name('wishlist');

Route::get('/compare','CompareController@index')->name('compare');

Route::get('/orders','OrderController@index')->name('order');

Route::get('/adress','adressController@index')->name('adress');

Route::get('/changepsw','ChangepswController@index')->name('changepsw');

Route::get('/privacy','PrivacyController@index')->name('privacy');

Route::get('/refund','RefundController@index')->name('refund');

Route::get('/term','TermController@index')->name('term');

Route::get('/thank_you','ThanksController@index')->name('thanks');

Route::get('/how_to_make_order','Make_orderController@index')->name('make.order');

Route::get('/orders_info','OrderInfoController@index')->name('orders.info');







Route::get('/product/{id}','ProductController@show')->name('product.index');

//Route::get('/singleproduct/{id}','ProductController@index')->name('single.product');

Route::get('/product','ProductController@singleProduct')->name('product.productinsert');
Route::get('/admin/product/edit/{id}','ProductController@edit')->name('product.productedit');
Route::post('/admin/product/update','ProductController@update')->name('product.productedit');
Route::get('/admin/product/delete/{id}','ProductController@delete')->name('product.productdelete');


//Rout::get('/adminka','AdminkaController@login')->name('adminka.adminlogin');


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});










Route::get('admin/menus','MenusController@index')->name('menus.admin');
Route::post('/admin/menus/insert','MenusController@insert')->name('menus.menusinsert');
Route::get('/admin/menus/edit/{id}','MenusController@edit')->name('menus.menusedit');
Route::post('/admin/menus/update','MenusController@update')->name('menus.menusupdate');
Route::get('/admin/menus/delete/{id}','MenusController@delete')->name('menus.menusdelete');



Route::get('home','HomeController@index')->name('home.home');
Route::get('/','HomeController@index');
Route::get('katalog','KatalogController@index')->name('katalog.katalog');




Route::get('admin/language','LanguageController@index')->name('language.admin');
Route::post('/admin/language/insert','LanguageController@insert')->name('language.languageinsert');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
