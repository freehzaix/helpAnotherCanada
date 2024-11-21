<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Stripe::setApiKey('sk_test_51KdcJ5CCemCCFgwRnkAWyCGKSVfV3Se7Py466bKYK4YcsZ5ibWyZmSCy7J0EKdyHnjYaDchuHGiNYdOT1NoCr14400gET6Uffu');

        $intent = PaymentIntent::create([
            'amount' => 79.0,
            'currency' => 'usd',
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('checkout.index',[
            'clientSecret' => $clientSecret,
            'intent' => $intent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
