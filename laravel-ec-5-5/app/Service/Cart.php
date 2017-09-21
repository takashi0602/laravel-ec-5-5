<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/*
 * カート周りのメソッド
 *
 * */
class Cart extends Model
{
    //商品の追加
    public function addItem($id, $amount){

        $item = DB::table('vegetables')->where('id', $id)->first(); //idが一致するものをvegetableテーブルから検索、取得
        $item->amount = $amount; //objの$itemにamountを追加
        $price = $item->price;
        $new_price = $price * $amount;
        $item->new_price = $new_price;
        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列

        $count_items = 0;
        $count_item = 0;
        foreach($items as $present_item){
            $count_items++;
            $item_id = $present_item->id;
            if($item_id == $item->id){
                $present_item->amount = $present_item->amount + $item->amount;
                $present_item->new_price = $present_item->new_price + $item->new_price;
            }else{
                $count_item++;
            }
        }
        if($count_items == $count_item){
            $items[] = $item; // 取得したデータにオブジェクトを保存
            session()->put("items", $items); //取得したデータをsessionに保存。 $_SESSION["items"] に保存するのと同じ
        }



    }
    //商品の削除
    public function removeItem($index){
        session()->forget("items.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
    }
    //カートを空にする
    public function clear(){
        session()->flush(); //sessionの全データを削除
    }
    //カート内商品すべてを取得
    public function getList(){
//        $cartItems = session()->get("items",[]); //セッションデータをそのまま取得、nullの場合は空の配列
        $items = session()->get("items", []);

//        $items = []; //表に渡す最終的な商品の配列（数量は足し算済みになってるようにする）

//        foreach($cartItems as $cartItem){
//            $id = $cartItem->id;
//            $items[$id] =

//            if($id === 2) {
//
//            }
//            if($id === 3) {
//
//            }
//            if($id === 4) {
//
//            }
//            if($id === 5) {
//
//            }
//        };

//        foreach($items as $item){
//            $id = $item["id"]->get();
//            $tests[] = $id;
//        };
//        dd($tests);


//        $listItems = [
//            "kana" => "じゃがいも",
//            "size" => "じゃがいも",
//            "amount" => "じゃがいも",
//            "price" => "じゃがいも"
//        ];
        return $items;
    }


    /*
     * name kana img description size contents price
     * */
}
