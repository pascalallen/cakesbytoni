<?php
/**
 * Manages orders
 * 
 * PHP version 7.2.11
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Validator;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrder;
use App\Mail\UpdateOrder;

/**
 * OrdersController
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request POST from form
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(), [
                'first_name' => 'required',
                'email' => 'required',
                'due_date' => 'required',
                'product' => 'required',
            ]
        );

        if ($validator->fails()) {
            response()->json(
                ['errors' => $validator->getMessageBag()->toArray()], 
                Response::HTTP_BAD_REQUEST
            );
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

        Mail::to(env('ADMIN_EMAIL'))->send(new NewOrder($order));

        return response()->json([], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param int $uniqueId Unique id from url
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($uniqueId)
    {
        $order = Order::where('unique_id', $uniqueId)->first();
        return response()->json($order, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request  POST from form
     * @param int                      $uniqueId Unique id from url
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uniqueId)
    {
        $order = Order::where('unique_id', $uniqueId)->first();

        if (!$order) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }

        $order->update($request->all());

        Mail::to(env('ADMIN_EMAIL'))->send(new UpdateOrder($order));

        return response()->json($order, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $uniqueId Unique id from url
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($uniqueId)
    {
        $order = Order::where('unique_id', $uniqueId)->first();

        if (!$order) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }

        $order->delete();

        return response()->json([], Response::HTTP_OK);
    }
}
