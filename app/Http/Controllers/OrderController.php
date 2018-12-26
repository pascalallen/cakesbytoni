<?php
/**
 * Controller to manage orders
 * 
 * PHP version 7.2.11
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ThankYou;
use App\Mail\NewOrder;
use App\Mail\UpdateOrder;
use Illuminate\Support\Facades\Mail;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
use Validator;

/**
 * OrderController
 * 
 * PHP version 7.2.11
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
class OrderController extends Controller
{
    /**
     * Creates new Order
     *
     * @param Request $request request from page
     * 
     * @return void
     */
    public function new(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required',
            'due_date' => 'required',
            'product' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->action('Controller@home')
                ->withErrors($validator)
                ->withInput();
        }

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

		Mail::to(env('ADMIN_EMAIL'))->send(new UpdateOrder($order));

    	return view('orders.show', ['order' => $order]);
	}
	
	// public function getCheckout()
	// {
		
	// }

	// public function postCheckout(Request $request)
	// {
		// $validator = Validator::make($request->all(), [
		// 	'card_no' => 'required',
		// 	'ccExpiryMonth' => 'required',
		// 	'ccExpiryYear' => 'required',
		// 	'cvvNumber' => 'required',
		// 	//'amount' => 'required',
		// ]);

		// $input = $request->all();

		// if ($validator->passes()) { 
		// 	$input = array_except($input,array('_token'));
		// 	$stripe = Stripe::make('sk_test_PVXtzkhKGE6eV0iuxTqgh4iZ');
		// 	try {
		// 		$token = $stripe->tokens()->create([
		// 			'card' => [
		// 				'number' => $request->get('card_no'),
		// 				'exp_month' => $request->get('ccExpiryMonth'),
		// 				'exp_year' => $request->get('ccExpiryYear'),
		// 				'cvc' => $request->get('cvvNumber'),
		// 			],
		// 		]);
				
		// 		// $token = $stripe->tokens()->create([
		// 			// 'card' => [
		// 				// 'number' => '4242424242424242',
		// 				// 'exp_month' => 10,
		// 				// 'cvc' => 314,
		// 				// 'exp_year' => 2020,
		// 			// ],
		// 		// ]);

		// 		if (!isset($token['id'])) {
		// 			return redirect()->route('addmoney.paywithstripe');
		// 		}

		// 		$charge = $stripe->charges()->create([
		// 			'card' => $token['id'],
		// 			'currency' => 'USD',
		// 			'amount' => 10.49,
		// 			'description' => 'Add in wallet',
		// 		]);

		// 		if($charge['status'] == 'succeeded') {
		// 			/**
		// 			* Write Here Your Database insert logic.
		// 			*/
		// 			echo “<pre>”;
		// 			print_r($charge);exit();
		// 			return redirect()->route('addmoney.paywithstripe');
		// 		} else {
		// 			\Session::put('error','Money not add in wallet!!');
		// 			return redirect()->route('addmoney.paywithstripe');
		// 		}

		// 	} catch (Exception $e) {
		// 		\Session::put('error',$e->getMessage());
		// 		return redirect()->route('addmoney.paywithstripe');
		// 	} catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
		// 		\Session::put('error',$e->getMessage());
		// 		return redirect()->route('addmoney.paywithstripe');
		// 	} catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
		// 		\Session::put('error',$e->getMessage());
		// 		return redirect()->route('addmoney.paywithstripe');
		// 	}
		// }
	// }
}
