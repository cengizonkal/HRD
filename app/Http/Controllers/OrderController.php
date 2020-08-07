<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $order = Order::all();
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->productId = $request->productId;
        $order->orderCode = $request->orderCode;
        $order->quantity = $request->quantity;
        $order->address = $request->address;
        $order->shippingDate = $request->shippingDate;
        $order->user_id = Auth()->id();
        $order->save();
        return response()->json('Ürün başarıyla eklendi.');
    }

    public function show($id)
    {
        $orders = Order::find($id);
        return response()->json($orders);
    }

    public function showList()
    {
        $orders = Order::paginate(7);
        return response()->json($orders);

    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->productId = $request->productId;
        $order->orderCode = $request->orderCode;
        $order->quantity = $request->quantity;
        $order->address = $request->address;
        $order->shippingDate = $request->shippingDate;
        $order->update();
        return response()->json('Ürün başarıyla düzenlendi.');
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return response()->json('Ürün başarıyla silindi.');
    }

}
