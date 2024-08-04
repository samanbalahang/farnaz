<?php

namespace App\Http\Controllers;


use App\Models\shop;
use Illuminate\Http\Request;
use App\Models\product;

class ShopbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    
        $prod = new product;
        $prod = $prod::paginate(15);
        return view('bulding/gallery3' , compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shop $shop)
    {
        //
    }
    // public function eachp($url){
    //     $thispro = new product;
    //     $thispro = $thispro::Where("url",$url)->first();
    //     if($thispro != null){
    //         return view("mahboob.item",compact('thispro'));
    //     }else{
    //         return view("mahboob.item");
    //     }
    // }
}
