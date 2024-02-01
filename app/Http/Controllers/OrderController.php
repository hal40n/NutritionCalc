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
        //
    }

    public function calc(Request $request, Order $order)
    {
        $properties = [
            'ENERC_KCAL',
            'PROT',
            'FAT',
            'SFA',
            'N6PUFA',
            'N3PUFA',
            'CHOCDF',
            'FIB',
            'VITA',
            'VITD',
            'VITE',
            'VITK',
            'THIA',
            'RIBF',
            'NE',
            'VITB6A',
            'VITB12',
            'FOL',
            'PANTAC',
            'BIOT',
            'VITC',
            'NA',
            'K',
            'CA',
            'MG',
            'P',
            'FE',
            'ZN',
            'CU',
            'MN',
            'ID',
            'SE',
            'CR',
            'MO'
        ];
        $intakeNutritionsTotal = array();

        foreach ($properties as $property) {
            $intakeNutritionsTotal[$property] = 0;
        }

        // 登録データを全件取得する
        $orders = Order::all();

        // 登録済みデータの詳細情報をfoodテーブルから取得する
        $foods = collect();

        foreach ($orders as $order) {
            $food = Food::where('food_code', '=', $order->food_code)->first();

            if ($food) {
                $foods->push($food);
                foreach ($properties as $property) {
                    $intakeNutritionsTotal[$property] += $food->$property;
                }
            }
        }

        // intakeStandardsテーブルからデータを取得する
        $intakeStandard = IntakeStandard::all();

        // ユーザーの年齢に応じて区分を変える
        $userData = [
            'age' => 27,
            'sex' => 'MAN',
            'activityLevel' => 'NORMAL',
            'height' => 182,
            'weight' => 68
        ];

        $ageCategory = NULL;
        switch (true) {
            case ($userData['age'] >= 1 && $userData['age'] <= 2):
                $ageCategory = '1～2(歳)';
                break;

            case ($userData['age'] >= 3 && $userData['age'] <= 5):
                // 3～5歳の処理
                $ageCategory = '3～5(歳)';
                break;

            case ($userData['age'] >= 6 && $userData['age'] <= 7):
                // 6～7歳の処理
                $ageCategory = '6～7(歳)';
                break;

            case ($userData['age'] >= 8 && $userData['age'] <= 9):
                // 8～9歳の処理
                $ageCategory = '8～9(歳)';
                break;

            case ($userData['age'] >= 10 && $userData['age'] <= 11):
                // 10～11歳の処理
                $ageCategory = '10～11(歳)';
                break;

            case ($userData['age'] >= 12 && $userData['age'] <= 14):
                // 12～14歳の処理
                $ageCategory = '12～14(歳)';
                break;

            case ($userData['age'] >= 15 && $userData['age'] <= 17):
                // 15～17歳の処理
                $ageCategory = '15～17(歳)';
                break;

            case ($userData['age'] >= 18 && $userData['age'] <= 29):
                // 18～29歳の処理
                $ageCategory = '18～29(歳)';
                break;

            case ($userData['age'] >= 30 && $userData['age'] <= 49):
                // 30～49歳の処理
                $ageCategory = '30～49(歳)';
                break;

            case ($userData['age'] >= 50 && $userData['age'] <= 64):
                // 50～64歳の処理
                $ageCategory = '50～64(歳)';
                break;

            case ($userData['age'] >= 65 && $userData['age'] <= 74):
                // 65～74歳の処理
                $ageCategory = '65～74(歳)';
                break;

            case ($userData['age'] >= 75):
                // 75歳以上の処理
                $ageCategory = '75以上(歳)';
                break;
        }

        // 年齢が入力されていたら年齢区分に応じた値を取得する
        if ($ageCategory !== NULL) {
            $ageValue = $intakeStandard->filter(function ($item) use ($ageCategory) {
                return $item->age_category == $ageCategory;
            });
        } else {
            // カテゴリーがNULLの場合は成人として処理
            $ageValue = $intakeStandard->filter(function ($item) use ($ageCategory) {
                return $item->age_category == '18～29(歳)';
            });
        }

        $intakeStandardProperties = [
            'ENERC_KCAL' => 'ENERC_KCAL_' . $userData['sex'] . '_' . $userData['activityLevel'],
            'PROT' => 'PROT_' . $userData['sex'] . '_' . $userData['activityLevel'] . '_MIN',
            'FAT' => 'FAT_' . $userData['sex'] . '_MIN',
            'SFA' => 'SFA_' . $userData['sex'] . '_MIN',
            'N6PUFA' => 'N6PUFA_' . $userData['sex'],
            'N3PUFA' => 'N3PUFA_' . $userData['sex'],
            'CHOCDF' => 'CHOCDF_' . $userData['sex'] . '_MIN',
            'FIB' => 'FIB_' . $userData['sex'] . '_MIN',
            'VITA' => 'VITA_' . $userData['sex'],
            'VITD' => 'VITD_' . $userData['sex'],
            'VITE' => 'VITE_' . $userData['sex'],
            'VITK' => 'VITK_' . $userData['sex'],
            'THIA' => 'THIA_' . $userData['sex'],
            'RIBF' => 'RIBF_' . $userData['sex'],
            'NE' => 'NE_' . $userData['sex'],
            'VITB6A' => 'VITB6A_' . $userData['sex'],
            'VITB12' => 'VITB12_' . $userData['sex'],
            'FOL' => 'FOL_' . $userData['sex'],
            'PANTAC' => 'PANTAC_' . $userData['sex'],
            'BIOT' => 'BIOT_' . $userData['sex'],
            'VITC' => 'VITC_' . $userData['sex'],
            'NA' => 'NA_' . $userData['sex'] . '_MIN',
            'K' => 'K_' . $userData['sex'],
            'CA' => 'CA_' . $userData['sex'],
            'MG' => 'MG_' . $userData['sex'],
            'P' => 'P_' . $userData['sex'],
            'FE' => 'FE_' . $userData['sex'],
            'ZN' => 'ZN_' . $userData['sex'],
            'CU' => 'CU_' . $userData['sex'],
            'MN' => 'MN_' . $userData['sex'],
            'ID' => 'ID_' . $userData['sex'],
            'SE' => 'SE_' . $userData['sex'],
            'CR' => 'CR_' . $userData['sex'],
            'MO' => 'MO_' . $userData['sex']
        ];
        $userStandardValue = array();

        foreach ($intakeStandardProperties as $intakeStandardKeys => $intakeStandardValues) {
            $intakeValue = $ageValue->pluck($intakeStandardValues)->first();
            $userStandardValue[$intakeStandardKeys] = $intakeValue;
        }

        // ここから計算を行う

        $calcVal = [
            'ENERC_KCAL' => 2650,
            'PROT' => $userData['weight'] * 0.8,
            'FAT' => 30,
            'FIB' => 21
        ];
        foreach ($calcVal as $key => $val) {
            $intakeNutritionsTotal[$key] = $val - $intakeNutritionsTotal[$key];
        }
        // $totals = [
        // 'ENERGY' => [
        // 'エネルギー（kcal）',
        // 'ENERGY',
        // $totals['ENERC_KCAL']
        // ],
        // 'PROT' => [
        // 'たんぱく質（g）',
        // 'PROT',
        // $totals['PROT']
        // ],
        // 'FAT' => [
        // '脂質（g）',
        // 'FAT',
        // $totals['FAT']
        // ],
        // 'choavlm' => [
        // '炭水化物',
        // 'CHOAVLM',
        // $totals['CHOAVLM']
        // ],
        // 'FIB' => [
        // '食物繊維',
        // 'FIB',
        // $totals['FIB']
        // ]
        // ];

        return view('order.calc', compact('intakeNutritionsTotal', 'intakeStandardProperties', 'userStandardValue'));
    }
}
