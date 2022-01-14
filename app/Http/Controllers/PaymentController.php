<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getGroupByIdPayment(Request $request){
        $groupId = $request->user()->id;
        $payment = DB::table('users')
            ->join('payments')
            ->select('')
        return view('payment', ['groupId' => $groupId]);
    }

    public function createPayment(PaymentRequest $request, $id){
        $payment_file_name = $request->payment->getClientOriginalName();
        $payment = $request->file('payment')->storeAs('payment-data', $payment_file_name);

        Payment::create([
            'payment' => $payment,
            'groupId' => $id
        ]);

        return redirect(route('home'));
    }
}
