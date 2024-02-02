<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\IntakeStandard;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculationController extends Controller
{
    public function calc(Request $request, Order $order)
    {
        // ログインユーザーのデータ
        $userData = [
            'age' => 27,
            'sex' => 'MAN',
            'activityLevel' => 'NORMAL',
            'height' => 182,
            'weight' => 68
        ];
        
        $intakeStandardProperties = [
            ['エネルギー', 'ENERC_KCAL', 'ENERC_KCAL_' . $userData['sex'] . '_' . $userData['activityLevel']],
            ['タンパク質', 'PROT', 'PROT_' . $userData['sex'] . '_' . $userData['activityLevel'] . '_MIN'],
            ['脂質', 'FAT', 'FAT_' . $userData['sex'] . '_MIN'],
            ['飽和脂肪酸', 'SFA', 'SFA_' . $userData['sex'] . '_MIN'],
            ['n-6系脂肪酸', 'N6PUFA', 'N6PUFA_' . $userData['sex']],
            ['n-3系脂肪酸', 'N3PUFA', 'N3PUFA_' . $userData['sex']],
            ['炭水化物', 'CHOCDF', 'CHOCDF_' . $userData['sex'] . '_MIN'],
            ['食物繊維', 'FIB', 'FIB_' . $userData['sex'] . '_MIN'],
            ['ビタミンA', 'VITA', 'VITA_' . $userData['sex']],
            ['ビタミンD', 'VITD', 'VITD_' . $userData['sex']],
            ['ビタミンE', 'VITE', 'VITE_' . $userData['sex']],
            ['ビタミンK', 'VITK', 'VITK_' . $userData['sex']],
            ['ビタミンB1', 'THIA', 'THIA_' . $userData['sex']],
            ['ビタミンB2', 'RIBF', 'RIBF_' . $userData['sex']],
            ['ナイアシン', 'NE', 'NE_' . $userData['sex']],
            ['ビタミンB6', 'VITB6A', 'VITB6A_' . $userData['sex']],
            ['ビタミンB12', 'VITB12', 'VITB12_' . $userData['sex']],
            ['葉酸', 'FOL', 'FOL_' . $userData['sex']],
            ['パントテン酸', 'PANTAC', 'PANTAC_' . $userData['sex']],
            ['ビオチン', 'BIOT', 'BIOT_' . $userData['sex']],
            ['ビタミンC', 'VITC', 'VITC_' . $userData['sex']],
            ['ナトリウム', 'NA', 'NA_' . $userData['sex'] . '_MIN'],
            ['カリウム', 'K', 'K_' . $userData['sex']],
            ['カルシウム', 'CA', 'CA_' . $userData['sex']],
            ['マグネシウム', 'MG', 'MG_' . $userData['sex']],
            ['リン', 'P', 'P_' . $userData['sex']],
            ['鉄', 'FE', 'FE_' . $userData['sex']],
            ['亜鉛', 'ZN', 'ZN_' . $userData['sex']],
            ['銅', 'CU', 'CU_' . $userData['sex']],
            ['マンガン', 'MN', 'MN_' . $userData['sex']],
            ['ヨウ素', 'ID', 'ID_' . $userData['sex']],
            ['セレン', 'SE', 'SE_' . $userData['sex']],
            ['クロム', 'CR', 'CR_' . $userData['sex']],
            ['モリブデン', 'MO', 'MO_' . $userData['sex']]
        ];
        
        // intakeStandardsテーブルから食事摂取基準のデータを取得する
        $intakeStandard = IntakeStandard::all();
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
        
        // ログインユーザーの年齢に応じた基準量を格納する
        $userStandardValue = array();
        foreach ($intakeStandardProperties as $intakeStandardProperty) {
            $intakeValue = $ageValue->pluck($intakeStandardProperty[2])->first();
            $userStandardValue[$intakeStandardProperty[1]] = $intakeValue;
        }
        // 食事摂取基準ここまで
        
        // 登録した食材の栄養価の合計値の取得
        // 登録データを全件取得する
        $orders = Order::all();
        
        // 登録済みデータの詳細情報をfoodテーブルから取得
        $foods = collect();
        // 合計値を格納する配列を初期化
        $intakeNutritionsTotal = array();
        foreach ($intakeStandardProperties as $intakeStandardProperty) {
            $intakeNutritionsTotal[$intakeStandardProperty[1]] = 0;
        }
        // 該当食材のデータをfoodテーブルから取得
        foreach ($orders as $order) {
            $food = Food::where('food_code', '=', $order->food_code)->first();
            
            if ($food) {
                $foods->push($food);
                // 全ての食材の栄養価を配列に格納する
                //                 foreach ($properties as $key => $val) {
                //                     $intakeNutritionsTotal[$val] += $food->$val;
                //                 }
                    // $val = uppercase column
                foreach ($intakeStandardProperties as $intakeStandardProperty) {
                    $intakeNutritionsTotal[$intakeStandardProperty[1]] += $food[$intakeStandardProperty[1]];
                }
            }
        }
        // 食材のデータ取得ここまで
        return view('order.calc', compact('intakeNutritionsTotal', 'intakeStandardProperties', 'userStandardValue'));
    }
}
