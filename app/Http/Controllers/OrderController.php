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
use GuzzleHttp\Client;
use Illuminate\Http\Response;

/**
 * OrderController
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
     * @param Request $request Request from form
     * 
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function new(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required',
            'due_date' => 'required',
            'product' => 'required',
            'recaptcha_token' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->action('Controller@home')
                ->withErrors($validator)
                ->withInput();
        }

        $client = new Client([
            'base_uri' => 'https://www.google.com/recaptcha/api/',
        ]);
        
        $r = $client->request('POST', 'siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $request->recaptcha_token,
            ]
        ]);

        if ($r->getStatusCode() === Response::HTTP_OK) {
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
    
            Mail::to(env('ADMIN_EMAIL'))->send(new NewOrder($order));
    
            return redirect()->action(
                'OrderController@find', ['uniqid' => $order->unique_id]
            );
        }

        return redirect()->action('Controller@home');
    }

    /**
     * Retreive order using unique id
     *
     * @param string $uniqid Unique id from query string
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function find($uniqid)
    {
        $order = Order::where('unique_id', $uniqid)->first();

        if (!$order) {
            return redirect()->action('Controller@home');
        }

        return view('orders.show', ['order' => $order]);
    }

    /**
     * Retreive order using unique id
     * and update
     *
     * @param Request $request Request from form
     * @param string  $uniqid  Unique id from query string
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
}
