<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ThankYou;
use App\Mail\NewOrder;
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
		$order->unique_id = uniqid();
    	$order->save();

		// Mail::to($request->email)->send(new ThankYou($order));
		Mail::to(env('ADMIN_EMAIL'))->send(new NewOrder($order));
		
    	return redirect()->action(
			'OrderController@find', ['uniqid' => $order->unique_id]
		);
	}

    public function find($uniqid)
    {
		$order = Order::where('unique_id', $uniqid)->first();

		if (!$order) {
			return redirect()->action('Controller@home');
		}

    	return view('orders.show', ['order' => $order]);
	}

	public function update(Request $request, $uniqid)
    {
		$order = Order::where('unique_id', $uniqid)->first();

		if (!$order) {
			return redirect()->action('Controller@home');
		}

		$order->update($request->all());

    	return view('orders.show', ['order' => $order]);
    }
}
