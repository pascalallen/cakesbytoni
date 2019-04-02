<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrder;
use App\Mail\UpdateOrder;
use Illuminate\Support\Carbon;
use App\Http\Requests\NewOrderRequest;

class OrderController extends Controller
{
    
    public function index(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $pageSize = $request->get('pageSize', 20);
        
        return Order::distinct()
            ->paginate($pageSize);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewOrderRequest $request POST from form
     * 
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function store(NewOrderRequest $request)
    {
        Order::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'instructions' => $request->instructions,
            'due_date' => Carbon::parse($request->due_date),
            'phone_number' => $request->phone_number,
            'image' => $request->image,
            'product' => $request->product,
            'unique_id' => uniqid(),
        ]);

        // Mail::to(env('ADMIN_EMAIL'))->send(new NewOrder($order));

        return response('', Response::HTTP_OK);
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

        $result = $order->delete();

        return response()->json($result, Response::HTTP_OK);
    }
}
