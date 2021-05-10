<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    //
    public function index()
    {
        return Payment::all();
    }
 
    public function show(Payment $payment)
    {
        return $payment;
    }

    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return response()->json($payment, 201);
    }

    public function update(Request $request, Payment $payment)
    {
        
        $payment->update($request->all());

        return response()->json($payment,200);
    }

    public function delete(Payment $payment)
    {
      
        $payment->delete();

        return response()->json(null,204);
    }
    
}
