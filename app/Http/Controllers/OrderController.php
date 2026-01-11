<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order_details;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::orderBy('id', 'desc')->paginate(10);
        return view('admin.order.all', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (auth()->check()) {
            $userId = null;
            $userName = null;

            $user = Auth::user();

            if ($user) {
                $userId = $user->id;
                $userName = $user->name;
                $userEmail = $user->email;
            }

            return view('website.cart', [
                'userId' => $userId,
                'userName' => $userName,
                'userEmail' => $userEmail
            ]);
        }

        return redirect()->route('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    { 
            //...... order........

            $user_id = $request->input('user_id');
            $total = $request->input('grandtotal');
            $status = $request->input('status');
            $billing_address = $request->input('bAddress');
            $shipping_address = $request->input('sAddress');
            $comment = $request->input('comment');


            $order = Order::create([
                'user_id' => $user_id,
                'status' => $status,
                'total' => $total,
                'billing_address' => $billing_address,
                'shipping_address' => $shipping_address,
                'comment' => $comment,
            ]);

            //...... order_details........

            if ($order) {
                $orders = $request->input('orders', []);
                $details = [];

                foreach ($orders as $row) {
                    $menu_id = $row['menu_id'];
                    $qty = $row['qty'];


                    $details[] = [
                        'order_id' => $order->id,
                        'menu_id' => $menu_id,
                        'quantity' => $qty,
                    ];
                }


                Order_details::insert($details);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Order created successfully!',

            ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->loadMissing(['order_details.menu']);
        // dd($order);

        return view('admin.order.show')->with(['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
