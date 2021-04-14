<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentRecieved;
use App\Events\ProductPurchased;

class PaymentsController extends Controller {
    public function show() {
        return view('payments.create');
    }

    public function store() {
        // Notification::send(request()->user(), new PaymentRecieved());
        // request()->user()->notify(new PaymentRecieved(9000));

        // process payment
        // unlock the purchase
        
        // event:
        ProductPurchased::dispatch('toy');

        // listeners:
        // notify user
        // award achievement
        // send shareable coupon
    }
}