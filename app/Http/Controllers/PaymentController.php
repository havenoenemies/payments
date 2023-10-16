<?php

namespace App\Http\Controllers;

use App\Services\Payments\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Payment $payment)
    {
        return view('payments.checkout', compact('payment'));
    }
}
