<?php
namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\IntakeStandard;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // すべての注文を取得
        $orders = Order::all();

        // 注文ごとに関連する食材を取得
        $orderDetails = collect(); // 空のコレクションを作成

        foreach ($orders as $order) {
            // 注文ごとの食材を取得してコレクションに追加
            $food = Food::where('food_code', '=', $order->food_code)->first();

            // $foodが見つかった場合のみコレクションに追加
            if ($food) {
                $orderDetails->push([
                    'food' => $food,
                    'quantity' => $order->quantity,
                    'id' => $order->id,
                ]);
            }
        }

        return view('order.index', [
            'orderDetails' => $orderDetails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        $data = [
            'order' => $order
        ];
        return view('order.create', $order);
    }

    /**
     * Store a newly created resource in storuserData['age'].
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // コードを取得する
        $foodCode = $request->input('food_code');
        // 取得したコードを基にクエリを作成する
        $food = Food::where('food_code', $foodCode)->first();
        if ($food) {

            $this->validate($request, [
                'quantity' => 'required'
            ]);

            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->food_code = $foodCode;
            $order->food_name = $food->food_name;
            $order->quantity = $request->input('quantity');
            $order->save();

            return view('order.store', [
                'food' => $food
            ]);
        } else {
            return view('order.store')->withErrors([
                'food_code' => '指定された食材は見つかりませんでした。'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storuserData['age'].
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storuserData['age'].
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        // ビューに受け渡すための食材データを取得する
        $foodCode = $order->food_code;
        $food = Food::where('food_code', $foodCode)->first();
        
        // 該当のOrderを削除する
        $order->delete();
        return view('order.delete', ['food' => $food]);
    }
}
