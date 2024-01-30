<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock; //追加⭐️
use App\Models\UserStock; //追加⭐️
use Illuminate\Support\Facades\Auth; //追加⭐️　Authファザー度を使用しているため必要



class StockController extends Controller
{
    

    public function index() //追加
    {
        $stocks = Stock::SimplePaginate(45); //Eloquantで検索
        return view('stocks',compact('stocks')); //追記変更
    }

    public function myCart()
    {
       $userId = Auth::id();
       $myCartStocks = UserStock::where('userId',$userId)->get();
       return view('myCart',compact('myCartStocks'));
    }


    public function addMycart(Request $request,UserStock $userStock)
   {

       //カートに追加の処理
       $stockId=$request->stockId;
       $message = $userStock->addMyCart($stockId);

       //追加後の情報を取得
       $myCartStocks = $userStock->showMyCart();

       return view('myCart',compact('myCartStocks' , 'message'));
   }

   public function deleteMyCartStock(Request $request,UserStock $userStock)
   {

       //カートから削除の処理
       $stockId=$request->stockId;
       $message = $userStock->deleteMyCartStock($stockId);

       //追加後の情報を取得
       $myCartStocks = $userStock->showMyCart();

       return view('myCart',compact('myCartStocks' , 'message'));

   }
}
