<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $data = ['order' => $order];
        return view('order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        $data = ['order' => $order];
        return view('order.create', $order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // コードを取得する
        $foodCode = $request->input('food_code');
        // 取得したコードを基にクエリを作成する
        $food = Food::where('food_code', $foodCode)->first();
            if($food) {
                
                $this->validate($request, [
                    'quantity' => 'required',
                ]);
            
                $order = new Order();
                $order->user_id = Auth::user()->id;
                $order->food_code = $foodCode;
                $order->food_name = $food->food_name;
                $order->quantity = $request->input('quantity');
                $order->save();
                
                return view('order.store', ['food_name' => $food->food_name]);
            } else {
                // $food が見つからなかった場合のエラーハンドリング
                return view('order.store')->withErrors(['food_code' => '指定された食材は見つかりませんでした。']);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
