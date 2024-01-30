<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\UserStock;
use Illuminate\Support\Facades\Auth; //追加


class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::SimplePaginate(8);
        // return view('stock');
        return view('stock', compact('stocks'));
    }

    public function myCart()
    {

        // $myCartStocks = UserStock::all();
        // var_dump($myCartStocks);

        $myCartStocks = UserStock::where('userid',$userid)->get();
        // return view('myCart',compact('myCartStocks' , 'message'));
        // return view('myCart',compact('myCartStocks'));
        // dd($myCartStocks);

        return view('myCart',compact('myCartStocks' , 'message'));

    }

    public function addMyCart(Request $request)
    {
        $userid = Auth::id(); 
        $stockid = $request->input('stockid');
 
        $cartAddInfo = UserStock::firstOrCreate(['stockid' => $stockid,'userid' => $userid]);
 
        if($cartAddInfo->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }
 
        $myCartStocks = UserStock::where('userid',$userid)->get();
 
        return view('myCart',compact('myCartStocks' , 'message'));
 
    }
}
