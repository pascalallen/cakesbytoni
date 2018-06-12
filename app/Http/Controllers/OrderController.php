<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ThankYou;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function new(Request $request)
    {
    	$order = new Order();
    	$order->first_name = $request->first_name;
    	$order->last_name = $request->last_name;
    	$order->email = $request->email;
    	$order->instructions = $request->instructions;
    	$order->due_date = $request->due_date;
    	$order->phone_number = $request->phone_number;
    	$order->price = 0;
    	$order->image = $request->image;
    	$order->product = $request->product;
    	$order->completed = 0;
    	$order->save();

    	// $response = Mail::to($request->email)->send(new ThankYou($order));
    	$response = Mail::to('thomaspascalallen@yahoo.com')->send(new ThankYou($order));
    	var_dump($response);
    	
    	return view('welcome', ['order' => $request]);
    }
}
