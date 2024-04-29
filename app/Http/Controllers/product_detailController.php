<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use Illuminate\Support\Facades\DB;

class product_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detail(string $product_id)
    {
        $product = DB::table('products')->where('id', $product_id)->first();
        $author = $product->author;
        $series = $product->series_id;

        $recommendations = DB::table('products')->where(function ($query) use ($author, $series, $product) {
            $query->where('author', 'like', $author)
                ->orWhere('series_id', $series);
        })->whereNot('id', $product->id)->take(3)->get();


        return view('product_detail', ['product'=>$product, 'recommendations'=>$recommendations]);
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
