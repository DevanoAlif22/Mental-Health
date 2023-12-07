<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //

    public function process() {
        if(Auth::user()) {
            $validasi = Transaction::with('users')->where('id_user',Auth::user()->id)->first();
            if($validasi != null && $validasi->status == 'pending') {
                $validasi->delete();
            } else if($validasi != null && $validasi->status == 'success') {
                return redirect('/home');
            }
            $transaction = Transaction::create([
                'id_user' => Auth::user()->id,
                'status' => 'pending'
            ]);

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 10000,
                ),
                'customer_details' => array(
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                )
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            $transaction->token = $snapToken;
            $transaction->save();
            return redirect('/checkout/'.$transaction->id);
        } else {

            return redirect('/home');
        }
    }

    


}
