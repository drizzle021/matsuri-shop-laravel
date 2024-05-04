<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

use App\Models\Product;
use App\Models\Category;
use App\Models\Series;


class product_listController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(int $page = 0, Request $request)
    {
        $categories = Category::all();
        $series = Series::all();

        // Pagination
        // $products = Product::all()->skip($page -1 * 10)->take(10)->get();
        $products = DB::table('products')->skip($page * 10)->take(10)->get();
        $pageCount = (int)(count(Product::all())/10 + 1);

        // Search
        if ($request->has('search')) {
            $search = $request->input('search');

            \Log::info(json_encode($search));

            // search title, author
            $products = DB::table('products')->where(function ($query) use ($search){
                $query->where('name', 'ilike', "%$search%")
                    ->orWhere('author', 'ilike', "%$search%");
            })->get();

            $pageCount = (int)(count($products)/10 + 1);

            $products = $products->skip($page * 10)->take(10);
        }

        // Filter
        if ($request->has('filter-range-price-min')){
            $filterPriceMin = $request->input('filter-range-price-min');
            $filterPriceMax = $request->input('filter-range-price-max');
            $filterOrderBy = $request->input('product-list-order-by');
            $filterCategory = $request->input('category');
            $filterSeries = $request->input('series');

            $products = DB::table('products')->whereBetween('price', [$filterPriceMin, $filterPriceMax]);

            if($filterCategory == null){
                $filterCategory = Category::all()->pluck('uuid')->toArray();
            }
            else{
                $filterCategory = Category::all()->whereIn('name', $filterCategory)->pluck('uuid')->toArray();
            }

//            print_r($filterCategory);

            if($filterSeries == null){
                $filterSeries = Series::all()->pluck('uuid')->toArray();
            }
            else{
                $filterSeries = Series::all()->whereIn('name', $filterSeries)->pluck('uuid')->toArray();
            }

//            $categoriesAndSeries = array_merge($filterCategory, $filterSeries);

            $products = $products->where(function ($query) use($filterCategory, $filterSeries){
                $query->whereIn('category_id', $filterCategory)
                    ->whereIn('series_id', $filterSeries);
            });

            // ORDERING
            if($filterOrderBy == 'az_asc'){
                $products->orderBy('name', 'asc');
            }
            elseif ($filterOrderBy == 'az_desc'){
                $products->orderBy('name', 'desc');
            }
            elseif ($filterOrderBy == 'pri_hi_lo'){
                $products->orderBy('price', 'desc');
            }
            elseif ($filterOrderBy == 'pri_lo_hi'){
                $products->orderBy('price', 'asc');
            }
            elseif ($filterOrderBy == 'disc_hi_lo'){
                $products->orderBy('discount', 'desc');
            }

            $products = $products->get();

            $pageCount = (int)(count($products)/10 + 1);

            $products = $products->skip($page * 10)->take(10);
        }


        return view('product_list', [
            'categories' => $categories,
            'series' => $series,
            'products' => $products,
            'pageCount' => $pageCount,
            'currentPage' => $page,
            'search' => $request->input('search'),
            'filter_range_price_min' => $request->input('filter-range-price-min'),
            'filter_range_price_max' => $request->input('filter-range-price-max'),
            'product_list_order_by' => $request->input('product-list-order-by'),
            'category_filter' => $request->input('category'),
            'series_filter' => $request->input('series')
        ]);
    }

    public function addProduct(Request $request)
    {
        // just log to see if it works
        \Log::info(json_encode($request->all()));

        // Generate a UUID
        $productId = Uuid::uuid4()->toString();

        $category_id = DB::table('categories')->where('name', $request->category_select)->value('uuid');
        $series_id = DB::table('series')->where('name', $request->series_select)->value('uuid');

        $newProduct = new Product;
        $newProduct->id = $productId;

        $newProduct->category_id = $category_id;
        $newProduct->series_id = $series_id;

        $newProduct->name = $request->name;
        $newProduct->author = strtoupper($request->author);     // optional
        $newProduct->pages = $request->pages;                   // optional
        $newProduct->publisher = $request->publisher;
        $newProduct->dimensions = $request->dimensions;

        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;

        $newProduct->stock = $request->stock;

        $newProduct->description = $request->description;

//        $request->validate([
//            'main_img' => 'required|mimes:pdf,jpg,png',
//            'side_img_1' => 'required|mimes:pdf,jpg,png',
//            'side_img_2' => 'required|mimes:pdf,jpg,png'
//        ]);

//        Storage::disk('public')->put($request->main_img->getClientOriginalName(), $request->file('main_img'));
        // Storage::disk('public')->put('', $request->file('main_img'));

        $tmp = $request->file('main_img')->storeAs('public/products', $request->main_img->getClientOriginalName());
        $tmp1 = $request->file('side_img_1')->storeAs('public/products', $request->side_img_1->getClientOriginalName());
        $tmp2 = $request->file('side_img_2')->storeAs('public/products', $request->side_img_2->getClientOriginalName());

        $newProduct->main_img = $request->main_img->getClientOriginalName();
        $newProduct->side_img_1 = $request->side_img_1->getClientOriginalName();
        $newProduct->side_img_2 = $request->side_img_2->getClientOriginalName();

        $newProduct->save();

//        return redirect()->action(product_listController::class,'index');

        return redirect()->route('productList')->with('success', 'Product added');
    }

    public function addCategory(Request $request)
    {
        $categoryId = Uuid::uuid4()->toString();

        // check if category already exists
        $checkIfExists = DB::table('categories')->where('name', 'ilike', $request->name)->count();
        if ($checkIfExists == 0){
            $newCategory = new Category;
            $newCategory->uuid = $categoryId;
            $newCategory->name = $request->name;
            $newCategory->save();

            return redirect()->route('productList')->with('success', 'Category added');
        }
        else{
            return redirect()->route('productList')->with('failure', 'Failure: Category already exists');
        }


    }

    public function addSeries(Request $request)
    {
        $seriesId = Uuid::uuid4()->toString();

        // check if category already exists
        $checkIfExists = DB::table('series')->where('name', 'ilike', $request->name)->count();
        if ($checkIfExists == 0){
            $newSeries = new Series;
            $newSeries->uuid = $seriesId;
            $newSeries->name = $request->name;
            $newSeries->save();

            return redirect()->route('productList')->with('success', 'Series added');
        }
        else{
            return redirect()->route('productList')->with('failure', 'Failure: Series already exists');
        }
    }

    public function editProduct(Request $request)
    {
        // just log to see if it works
        \Log::info(json_encode($request->all()));

        // Generate a UUID for the new user
        $productId = Uuid::uuid4()->toString();

        $category_id = DB::table('categories')->where('name', $request->category)->value('id');
        $series_id = DB::table('series')->where('name', $request->series)->value('id');

        $newProduct = new Product;
        $newProduct->uuid = $productId;

        $newProduct->category_id = $category_id;
        $newProduct->series_id = $series_id;

        $newProduct->name = $request->add_product_product_title;
        $newProduct->author = $request->author;     // optional

        $newProduct->pages = $request->pages;       // optional
        $newProduct->publisher = $request->publisher;
        $newProduct->dimensions = $request->dimensions;
        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;
        $newProduct->description = $request->description;
        $newProduct->main_img = $request->main_img;
        $newProduct->side_img_1 = $request->side_img_1;
        $newProduct->side_img_2 = $request->side_img_2;

        $newProduct->save();
        return view('product_list');
    }

    public function removeProduct(Request $request)
    {
        // just log to see if it works
        \Log::info(json_encode($request->all()));

        // Generate a UUID for the new user
        $productId = Uuid::uuid4()->toString();

        $category_id = DB::table('categories')->where('name', $request->category)->value('id');
        $series_id = DB::table('series')->where('name', $request->series)->value('id');

        $newProduct = new Product;
        $newProduct->uuid = $productId;

        $newProduct->category_id = $category_id;
        $newProduct->series_id = $series_id;

        $newProduct->name = $request->add_product_product_title;
        $newProduct->author = $request->author;     // optional

        $newProduct->pages = $request->pages;       // optional
        $newProduct->publisher = $request->publisher;
        $newProduct->dimensions = $request->dimensions;
        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;
        $newProduct->description = $request->description;
        $newProduct->main_img = $request->main_img;
        $newProduct->side_img_1 = $request->side_img_1;
        $newProduct->side_img_2 = $request->side_img_2;

        $newProduct->save();
        return view('product_list');
    }

    public function searchProduct(int $page, Request $request)
    {
//        $categories = Category::all();
//        $series = Series::all();
//
//        // $search = $request->input('search');
//        $search = $request->string('search')->trim();
//
//        $products = DB::table('products')->where('name', 'like', "%$request%")->get();
//
//        $pageCount = count($products);
//        $page = 1;
//
//        return view('product_list', [
//            'categories' => $categories,
//            'series' => $series,
//            'products' => $products,
//            'pageCount' => $pageCount,
//            'currentPage' => $page
//        ]);

        return $this->index($request);
    }

    public function filterProduct(int $page,Request $request)
    {

        return $this->index($request);

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
