<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

   
    public function create_store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->quantity
        ]);
        return redirect()->route('create')->with('success', 'Product created successfully!');
    }

    public function product_list()
    {
        $products = DB::table('products')->get();

        return view('pages.productlist', [
            'products' => $products,
        ]);
    }

    public function update($id)
    {
        $products = DB::table('products')
            ->where('id', $id)
            ->get();
        return view('pages.updateproduct', [
            'products' => $products,
        ]);
    }

    public function update_store(Request $request)
    {
        $product_id = $request->product_id;
        $update = DB::table('products')
            ->where('id', $product_id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'qty' => $request->quantity,

            ]);
        return redirect()->route('product.list')->with('success', 'Product update successfully!');

    }

    public function sale($id)
    {
        $sale_id = DB::table('products')
            ->where('id', $id)
            ->get();

        return view('pages.sale', [
            'sale_id' => $sale_id,
        ]);
    }

    public function sale_update(Request $request)
    {
        $sale_id = $request->sale_id;
        $sale_name = $request->sale_name;
        $sale_price = $request->sale_price;
        $buy_quantity = $request->quantity;

        DB::table('products')
            ->where('id', $sale_id)
            ->decrement('qty', $buy_quantity);

        DB::table('transcations')->insert([
            'name' => $sale_name,
            'price' => $sale_price,
            'qty' => $buy_quantity,
            'product_id' => $sale_id
        ]);

        return redirect()->route('product.list')->with('buy', 'successfully product buy done !');

    }


    public function transaction_history()
    {
        $today = DB::table('transcations')
            ->join('products', 'transcations.product_id', '=', 'products.id')
            ->select('products.name', 'products.price', 'products.id', 'transcations.product_id', 'transcations.qty')
            ->whereDate('transcations.created_at', '2023-12-17')
            ->get();

        $yesterday = DB::table('transcations')
            ->join('products', 'transcations.product_id', '=', 'products.id')
            ->select('products.name', 'products.price', 'products.id', 'transcations.product_id', 'transcations.qty')
            ->whereDate('transcations.created_at', '2023-12-18')
            ->get();

        $thismonth = DB::table('transcations')
            ->join('products', 'transcations.product_id', '=', 'products.id')
            ->select('products.name', 'products.price', 'products.id', 'transcations.product_id', 'transcations.qty')
            ->whereMonth('transcations.created_at', 12)
            ->get();


        $lastmonth = DB::table('transcations')
            ->join('products', 'transcations.product_id', '=', 'products.id')
            ->select('products.name', 'products.price', 'products.id', 'transcations.product_id', 'transcations.qty')
            ->whereMonth('transcations.created_at', 11)
            ->get();

        return view('pages.transcation', [
            'today' => $today,
            'yesterday' => $yesterday,
            'thismonth' => $thismonth,
            'lastmonth' => $lastmonth,
        ]);
    }




}