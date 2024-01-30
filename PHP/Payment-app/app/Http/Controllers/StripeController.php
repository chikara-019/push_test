<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\User;

class StripeController extends Controller
{
    public function subscription(Request $request){
        $user=Auth::user();
          return view('post.subscription',  [
            'intent' => $user->createSetupIntent()
        ]);
    }
  
    public function afterpay(Request $request){
        // ログインユーザーを$userとする
        $user=Auth::user();
 
        // またStripe顧客でなければ、新規顧客にする
        $stripeCustomer = $user->createOrGetStripeCustomer();
 
        // フォーム送信の情報から$paymentMethodを作成する
        $paymentMethod=$request->input('stripePaymentMethod');
 
        // プランはconfigに設定したbasic_plan_idとする
        $plan=config('services.stripe.basic_plan_id');
        
        // 上記のプランと支払方法で、サブスクを新規作成する
        $user->newSubscription('default', $plan)
        ->create($paymentMethod);
 
        // 処理後に'ルート設定'にページ移行
        return redirect()->route('ルート設定');
    }
}
