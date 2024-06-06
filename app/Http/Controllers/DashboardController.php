<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showFinance(){
        $show['title'] = 'finance';
        $show['paragraf'] = 'paragraf 1 sadnalksd';
        $show['detail'] = 'detail finance';
        $view['judul'] = 'hello world';

        return view('components.finance' , $show, $view);
    }

    public function showProduct (){
        $show = [
            'title' => 'Product',
            'product' => Product::all(),
            // 'category' => Category::all()
        ];

        return view('components.product', $show);
    }

    public function showCrypto(){
        return view('components.crypto');
    }

    public function showEvent(){
        return view('components.event');
    }

    public function showHelpdesk(){
        return view('components.helpdesk');
    }

    public function showSales(){
        return view('components.sales');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
