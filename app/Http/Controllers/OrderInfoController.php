<?php

namespace App\Http\Controllers;

use App\Models\OrderInfo;
use Illuminate\Http\Request;

class OrderInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = OrderInfo::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderInfo  $order
     * @return \Illuminate\Http\Response
     */
    public function show(OrderInfo $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderInfo  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderInfo $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderInfo  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderInfo $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderInfo  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderInfo $order)
    {
        //
    }
}
