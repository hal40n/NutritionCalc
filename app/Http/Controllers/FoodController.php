<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Food::query();
        $searchFood = $request->input('searchFood');
        if (!empty($searchFood)) {
            $query->where('food_name', 'like', "%{$searchFood}%");
        }
        
        $foods = (!empty($searchFood)) ? $query->simplePaginate(35) : Food::simplePaginate(35);
        return view('foods.index', ['foods' => $foods, 'searchFood' => $searchFood]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $food = new Food;
//         $food->food_name = $request->input('food_name');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($food_code)
    {

        // $food_code を使用して該当する食材の情報を取得
        $food = Food::where('food_code', $food_code)->first();
        
        $properties = [
            ['エネルギー', 'ENERC_KCAL', '（kcal）'],
            ['水分', 'WATER', '（g）'],
            ['タンパク質', 'PROT', '（g）'],
            ['コレステロール', 'CHOLE', '（mg）'],
            ['脂質', 'FAT', '（g）'],
            ['食物繊維', 'FIB', '（g）'],
            ['糖アルコール', 'POLYL', '（g）'],
            ['炭水化物', 'CHOCDF', '（g）'],
            ['有機酸', 'OA', '（g）'],
            ['灰分', 'ASH', '（g）'],
            ['ナトリウム', 'NA', '（mg）'],
            ['カリウム', 'K', '（mg）'],
            ['カルシウム', 'CA', '（mg）'],
            ['マグネシウム', 'MG', '（mg）'],
            ['リン', 'P', '（mg）'],
            ['鉄', 'FE', '（mg）'],
            ['亜鉛', 'ZN', '（mg）'],
            ['銅', 'CU', '（mg）'],
            ['マンガン', 'MN', '（mg）'],
            ['ヨウ素', 'ID', '（μg）'],
            ['セレン', 'SE', '（μg）'],
            ['クロム', 'CR', '（μg）'],
            ['モリブデン', 'MO', '（μg）'],
            ['レチノール', 'RETOL', '（μg）'],
            ['αカロテン', 'CARTA', '（μg）'],
            ['βカロテン', 'CARTB', '（μg）'],
            ['βクリプトキサンチン', 'CRYPXB', '（μg）'],
            ['βカロテン当量', 'CARTBEQ', '（μg）'],
            ['レチノール活性当量', 'VITA_RAE', '（μg）'],
            ['ビタミンD', 'VITD', '（μg）'],
            ['αトコフェロール', 'TOCPHA', '（mg ）'],
            ['βトコフェロール', 'TOCPHB', '（mg ）'],
            ['γトコフェロール', 'TOCPHG', '（mg ）'],
            ['δトコフェロール', 'TOCPHD', '（mg ）'],
            ['ビタミンK', 'VITK ', '（μg）'],
            ['ビタミンB1', 'THIA', '（mg）'],
            ['ビタミンB2', 'RIBF', '（mg）'],
            ['ナイアシン', 'NIA', '（mg）'],
            ['ナイアシン当量', 'NE', '（mg）'],
            ['ビタミンB6', 'VITB6A', '（mg）'],
            ['ビタミンB12', 'VITB12', '（μg）'],
            ['葉酸', 'FOL', '（μg）'],
            ['パントテン酸', 'PANTAC', '（mg）'],
            ['ビオチン', 'BIOT', '（μg）'],
            ['ビタミンC', 'VITC', '（mg）'],
            ['アルコール', 'ALC', '（g）'],
            ['食塩相当量', 'NACL_EQ', '（g）'],
            
        ];
        
        // 取得した情報をビューに渡す
        return view('foods.detail', ['food' => $food, 'properties' => $properties]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::where('food_code', $id)->first();
        $food->delete();
        return view('foods.delete', ['food' => $food]);
    }
    
    public function searchFoods(Request $request)
    {
        $searchValue = $request->input('food_name');
        $foods = Food::where('food_name', 'like', "%{$searchValue}%")->get();
        return view('foods.selectFood', ['inputVal' => $searchValue, 'foods' => $foods]);
    }
}
