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
        
        
        // 取得した情報をビューに渡す
        return view('foods.detail', ['food' => $food]);
        
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
