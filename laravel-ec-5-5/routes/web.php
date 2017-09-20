<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Service\Cart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// トップページ（vegetablesテーブルの全データを表示）
Route::get('/', function () {
    $vegetables = DB::table('vegetables')->get();
    return view('index', [
        "vegetables" => $vegetables
    ]);
});

// 詳細ページ
Route::get('/detail', function(Request $request){
    $id = $request->get("id");
    $vegetable = DB::table('vegetables')->where('id', $id)->first();

    return view('detail', [
        "vegetable" => $vegetable
    ]);
});

// カートに入れる
Route::post('/cart', function(Request $request){
    $id = $request->get("id"); //idを取得
    $amount = $request->get("amount"); //amountを取得
//    $amount = 3; //仮で
    $cart = new Cart();
    $cart->addItem($id, $amount); //選択した商品のデータ全部をまるごと渡す
    return redirect("/cart"); //カートのページへリダイレクト
});

// カートの中を一覧表示
Route::get('/cart', function(){
    $cart = new Cart;
    $items = $cart->getlist();
    return view("cart", [ //データを渡してビューを表示
        "items" => $items
    ]);
});

// 商品を削除
Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除したい商品のindexを取得
    $cart = new Cart();
    $cart->removeItem($index);
    return redirect("/cart");
});

// カートを空にする
Route::get('/delete/all', function(){
    $cart = new Cart();
    $cart->clear();
    return redirect("/cart"); //カートのページへリダイレクト
});