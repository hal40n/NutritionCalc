<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Food;
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
        $foods = collect(); // 空のコレクションを作成

        foreach ($orders as $order) {
            // 注文ごとの食材を取得してコレクションに追加
            $food = Food::where('food_code', '=', $order->food_code)->first();

            // $foodが見つかった場合のみコレクションに追加
            if ($food) {
                $foods->push($food);
            }
        }

        return view('order.index', [
            'foods' => $foods
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
     * Store a newly created resource in storage.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function calc(Request $request, Order $order)
    {
        $properties = [
            'energy' => 'ENERC_KCAL',
            'prot' => 'PROT0',
            'fat' => 'FAT0',
            'choavlm' => 'CHOAVLM',
            'fib' => 'FIB0',
        ];
        
        $totals = [
            'energy' => 0,
            'prot' => 0,
            'fat' => 0,
            'choavlm' => 0,
            'fib' => 0,
        ];
        
        // 登録データを全件取得する
        $orders = Order::all();
        
        // 登録済みデータの詳細情報をfoodテーブルから取得する
        $foods = collect();
        
        foreach ($orders as $order) {
            $food = Food::where('food_code', '=', $order->food_code)->first();
            
            if ($food) {
                $foods->push($food);
                
                foreach ($properties as $property => $foodProperty) {
                    $totals[$property] += $food->$foodProperty;
                }
            }
        }
        
        // ここで他の計算を行う
        $weight = 67; // Auth::User()->weight;
        $calcVal = [
            'energy' => 2650,
            'prot' => $weight * 0.8,
            'fat' => 30,
            'choavlm' => 50,
            'fib' => 21,
        ];
        foreach ($calcVal as $key => $val) {
            $totals[$key] = $val - $totals[$key];
        }
        $totals = [
            'energy' =>['エネルギー（kcal）', 'energy', $totals['energy']],
            'prot' => ['たんぱく質（g）', 'prot', $totals['prot']],
            'fat' => ['脂質（g）', 'fat', $totals['fat']],
            'choavlm' =>['炭水化物', 'choavlm', $totals['choavlm']],
            'fib' => ['食物繊維', 'fib', $totals['fib']],
        ];
        
        
        return view('order.calc', ['totals' => $totals]);
    }
}
