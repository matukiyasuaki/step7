<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productName = $request->input('productName');
        $companyName = $request->input('companyName');

        $products = Product::with('company')
            ->searchByName($productName)
            ->searchByCompany($companyName)
            ->get();

        $companies = Company::all();

        return view('products.index', compact('products', 'companies'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', '商品を削除しました。');
    }
}