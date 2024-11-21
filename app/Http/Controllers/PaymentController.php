<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // formulaire de paiement webinar
    public function form_payment()
    {
        return view('payment-webinar');
    }
}
