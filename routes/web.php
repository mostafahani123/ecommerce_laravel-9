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
    // query Biulder

 $result =   \DB::table('categors')->get();//  dd($result);
    return view('welcome', ['categors'=>$result]);
});
Route::get('/product/{catid?}', function ($catid = null) {
    // query Biulder
    // , = 
//   ? nullable
// b:if (!$catid){
b:if ($catid == null){
    $result =   \DB::table('products')->get(); //  dd($result);
    return view('product' , ['products'=> $result]);
    

}else{
$result =   \DB::table('products')->where('category_id' , $catid)->get(); //  dd($result);
return view('product' , ['products'=> $result]);

}
});
