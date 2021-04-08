<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function getPaymentForm()
    {
        return view('users.payments.form');
    }
}
