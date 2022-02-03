<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function getAllProducts(){

        $AllCategory = Categories::all();
        $AllProduct = Product::all();

        $product = [];

        $counter = 0;

        foreach($AllCategory as $categories){
            foreach($AllProduct as $product){

                if($product->category_id == $categories->id){

                    $product[$counter]['id'] = $product->id;
                    $product[$counter]['product_name'] = $product->product_name;
                    $product[$counter]['unique_id'] = $product->product_unique_id;
                    $product[$counter]['category_name'] = $categories->category_name;
                    $product[$counter]['image'] = $product->image;

                    $counter++;
                }
            }
        }

        return view('product')
        ->with('products', $product)
        ->with('counter', $counter);
    }

    public function getProductbyCategory($id){

        $categoryName = Categories::where('id', $id)->category_name->get();
        $products = Product::where('category_id', $id) ->get();

        $product = [];

        $counter = 0;

        foreach($products as $aproduct){

            $product[$counter]['id'] = $aproduct->id;
            $product[$counter]['product_name'] = $aproduct->product_name;
            $product[$counter]['unique_id'] = $aproduct->product_unique_id;
            $product[$counter]['category_name'] = $categoryName;
            $product[$counter]['image'] = $aproduct->image;

            $counter++;

        }

        return view('product')
        ->with('products', $product)
        ->with('counter', $counter);
    }
}
